<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Cart extends Component
{
    public $cartItems = [];
    public $subtotal = 0;

    public function mount()
    {
        $this->loadCart();
    }

    #[On('cart-updated')]
    public function loadCart()
    {
        $this->cartItems = session()->get('cart', []);
        $this->subtotal = collect($this->cartItems)->sum(function($item) {
            return $item['price'] * $item['quantity'];
        });
    }

    public function removeFromCart($key)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$key])) {
            unset($cart[$key]);
            session()->put('cart', $cart);
        }

        $this->loadCart();
        $this->dispatch('cart-updated');
        $this->dispatch('notify', 'Item removed from cart');
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
