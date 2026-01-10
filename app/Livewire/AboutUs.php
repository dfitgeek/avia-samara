<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class AboutUs extends Component
{
    #[Title('Avia Samara - About Us')]

    public function render()
    {
        return view('livewire.about-us');
    }
}
