<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class MadeToMeasure extends Component
{
    #[Title('Avia Samara - Made To Measure')]


    public function render()
    {
        return view('livewire.made-to-measure');
    }
}
