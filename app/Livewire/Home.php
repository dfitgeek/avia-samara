<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class Home extends Component
{
    #[Title('Avia Samara - Home')]


    public function render()
    {
        return view('livewire.home');
    }
}
