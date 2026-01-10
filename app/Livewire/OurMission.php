<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class OurMission extends Component
{
    #[Title('Avia Samara - Our Mission')]


    public function render()
    {
        return view('livewire.our-mission');
    }
}
