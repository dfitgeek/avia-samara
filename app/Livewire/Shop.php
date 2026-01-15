<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class Shop extends Component
{
    public $category = 'all';
    public $locked = false;

    // Cart Inputs
    public $selectedProduct = null;
    public $size = null;
    public $quantity = 1;

    public function mount($category = null)
    {
        // Only set if passed, otherwise default to 'all'
        if ($category) {
            $this->category = $category;

            // If a specific category is requested via the component tag, lock the filter
            if ($category !== 'all') {
                $this->locked = true;
            }
        }
    }

    public function updatedCategory()
    {
        // Optional: Reset pagination here if you use WithPagination
        // $this->resetPage();
    }

    public function addToCart($productId, $selectedSize, $selectedQty)
    {
        $product = Product::findOrFail($productId);
        $cart = session()->get('cart', []);
        $cartKey = $product->id . '-' . ($selectedSize ?? 'default');

        if (isset($cart[$cartKey])) {
            $this->dispatch('warning', 'Item already exists in cart');
            return;
        }

        $image = 'https://placehold.co/600x800?text=No+Image';
        if (isset($product->metadata['images']) && is_array($product->metadata['images']) && count($product->metadata['images']) > 0) {
            $image = asset('storage/' . $product->metadata['images'][0]);
        }

        $cart[$cartKey] = [
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'image' => $image,
            'quantity' => $selectedQty,
            'size' => $selectedSize,
        ];

        session()->put('cart', $cart);
        $this->dispatch('cart-updated');
        $this->dispatch('notify', 'Product added to cart');
    }

    public function render()
    {
        $query = Product::query();

        // Ensure we filter based on the current state of $this->category
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
            if (empty($images)) $images[] = 'https://placehold.co/600x800?text=No+Image';

            return [
                'id' => $product->id,
                'name' => $product->name,
                'price' => number_format($product->price, 2),
                'category' => $product->category,
                'images' => $images,
                'details' => [
                    'material' => $product->material,
                    'fit' => $product->fit,
                    'care' => $product->care,
                    'description' => $product->description,
                    'colors' => $product->metadata['colors'] ?? [],
                    'sizes' => $product->metadata['sizes'] ?? [],
                ],
            ];
        });

        return view('livewire.shop', ['products' => $products]);
    }
}
