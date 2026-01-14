<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class AvailableProducts extends Component
{
    #[Layout('components.layouts.admin')]

    public $category = 'all';

    // 1. The Delete Action
    public function delete($id)
    {
        $product = Product::findOrFail($id);

        // Optional: Delete images from storage to save space
        if (isset($product->metadata['images']) && is_array($product->metadata['images'])) {
            foreach ($product->metadata['images'] as $img) {
                Storage::disk('public')->delete($img);
            }
        }

        $product->delete();

        session()->flash('message', 'Product deleted successfully.');
        return redirect()->route('admin.products');
    }

    public function render()
    {
        $query = Product::query();

        if ($this->category !== 'all') {
            $query->where('category', $this->category);
        }

        $products = $query->latest()->get()->map(function ($product) {

            $images = [];
            if (isset($product->metadata['images']) && is_array($product->metadata['images'])) {
                foreach ($product->metadata['images'] as $img) {
                    $images[] = asset('storage/' . $img);
                }
            }

            if (empty($images)) {
                $images[] = 'https://placehold.co/600x800?text=No+Image';
            }

            return [
                'id' => $product->id,
                'name' => $product->name,
                'price' => '₦' . number_format($product->price, 2),
                'category' => $product->category,
                'images' => $images,
                // 2. Generate the Edit URL here (Replace 'products.edit' with your actual route name)
                // You likely need to create this route in web.php
                'edit_url' => route('edit-product', $product->id),
                'details' => [
                    'material' => $product->material ?? 'N/A',
                    'fit' => $product->fit ?? 'N/A',
                    'care' => $product->care ?? 'N/A',
                    'description' => $product->description ?? '',
                ],
            ];
        });

        return view('livewire.available-products', [
            'products' => $products
        ]);
    }
}