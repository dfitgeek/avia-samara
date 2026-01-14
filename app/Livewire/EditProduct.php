<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;

class EditProduct extends Component
{
    use WithFileUploads;

    #[Layout('components.layouts.admin')]

    public $productId;

    // Form Properties
    public $name;
    public $price;
    public $category;
    public $brand;
    public $stock_quantity;

    // Details
    public $description;
    public $material;
    public $fit;
    public $care;

    // Metadata / Variants
    public $colors;
    public $sizes;

    // Image Handling
    public $existingImages = [];
    public $newImages = [];

    // 1. Define Custom Error Messages Here
    protected function messages()
    {
        return [
            // This catches the specific "failed to upload" error
            'newImages.*.uploaded' => 'The uploaded file is too large (Check server logs) or the upload failed.',

            'newImages.*.image' => 'Each uploaded file must be an image.',
            'newImages.*.mimes' => 'Each uploaded file must be a file of type: jpeg, png, jpg.',
            'newImages.*.max' => 'Each uploaded file must not be greater than 2 MB.',
        ];
    }

    public function mount($id)
    {
        $product = Product::findOrFail($id);
        $this->productId = $product->id;

        $this->name = $product->name;
        $this->price = $product->price;
        $this->category = $product->category;
        $this->brand = $product->brand;
        $this->stock_quantity = $product->stock_quantity;

        $this->description = $product->description;
        $this->material = $product->material;
        $this->fit = $product->fit;
        $this->care = $product->care;

        $metadata = $product->metadata ?? [];

        $this->existingImages = $metadata['images'] ?? [];
        $this->colors = isset($metadata['colors']) ? implode(', ', $metadata['colors']) : '';
        $this->sizes = isset($metadata['sizes']) ? implode(', ', $metadata['sizes']) : '';
    }

    public function update()
    {
        // 2. Updated Rules to include 'mimes' so the error can actually trigger
        $this->validate([
            'name' => 'required|min:3',
            'price' => 'required|numeric',
            'category' => 'required',
            // Added mimes:jpeg,png,jpg to match your error message requirement
            'newImages.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $product = Product::findOrFail($this->productId);

        $finalImages = $this->existingImages;

        if (!empty($this->newImages)) {
            $finalImages = [];
            foreach ($this->newImages as $image) {
                $finalImages[] = $image->store('products', 'public');
            }
        }

        $metadata = [
            'images' => $finalImages,
            'colors' => $this->colors ? array_map('trim', explode(',', $this->colors)) : [],
            'sizes' => $this->sizes ? array_map('trim', explode(',', $this->sizes)) : [],
        ];

        $product->update([
            'name' => $this->name,
            'price' => $this->price,
            'category' => $this->category,
            'brand' => $this->brand,
            'stock_quantity' => $this->stock_quantity,
            'description' => $this->description,
            'material' => $this->material,
            'fit' => $this->fit,
            'care' => $this->care,
            'metadata' => $metadata,
        ]);

        

        $this->newImages = [];
        $this->existingImages = $finalImages;

        session()->flash('message', 'Product updated successfully.');
        redirect()->route('admin.products');
    }

    public function render()
    {
        return view('livewire.edit-product');
    }
}