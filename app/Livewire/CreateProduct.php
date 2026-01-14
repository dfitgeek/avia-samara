<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;

class CreateProduct extends Component
{
    use WithFileUploads;

    // Basic Fields
    public $name;
    public $price;
    public $category;
    public $brand;
    public $sku;
    public $stock_quantity = 0;

    // Details
    public $material;
    public $fit;
    public $care;
    public $description;

    // Metadata Inputs
    public $images = []; // Temporary storage for uploads
    public $colors = ''; // Comma separated string
    public $sizes = '';  // Comma separated string

    protected $rules = [
        'name' => 'required|min:3',
        'price' => 'required|numeric|min:0',
        'category' => 'required|string',
        // 'sku' => 'nullable|unique:products,sku',
        'stock_quantity' => 'integer|min:0',
        'images.*' => 'image|mimes:jpeg,png,jpg|max:2048', // 2MB Max
    ];

    #[Layout('components.layouts.admin')]


    public function save()
    {
        $this->validate();

        // 1. Handle Image Uploads
        $imagePaths = [];

        $this->sku = $this->sku ?: 'SKU-' . strtoupper(uniqid());

        if ($this->images) {
            foreach ($this->images as $image) {
                // Stores in storage/app/public/products
                $imagePaths[] = $image->store('products', 'public');
            }
        }

        // 2. Construct Metadata JSON
        $metadata = [
            'images' => $imagePaths,
            'colors' => $this->colors ? array_map('trim', explode(',', $this->colors)) : [],
            'sizes' => $this->sizes ? array_map('trim', explode(',', $this->sizes)) : [],
        ];

        // 3. Create Product
        Product::create([
            'name' => $this->name,
            'price' => $this->price,
            'category' => $this->category,
            'brand' => $this->brand,
            'sku' => $this->sku,
            'stock_quantity' => $this->stock_quantity,
            'material' => $this->material,
            'fit' => $this->fit,
            'care' => $this->care,
            'description' => $this->description,
            // 'metadata' => json_encode($metadata),
            'metadata' => $metadata,
        ]);

        // 4. Reset & Flash
        $this->reset();
        session()->flash('message', 'Product created successfully!');
        return redirect()->route('admin.products');
    }

    public function render()
    {
        return view('livewire.create-product');
    }
}
