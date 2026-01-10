<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class Shop extends Component
{
    #[Title('Avia Samara - Our Collection')]


    public function render()
    {
        return view('livewire.shop');
    }
}
