<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class OrderProcess extends Component
{
    #[Title('Avia Samara - How We Work')]


    public function render()
    {
        return view('livewire.order-process');
    }
}
