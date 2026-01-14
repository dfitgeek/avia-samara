<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Dashboard extends Component
{
    #[Layout('components.layouts.admin')]

    public $user;
    public function mount()
    {
        //
        $this->user = auth()->user();
    }

    public function render()
    {
        return view('livewire.dashboard', [
            'user' => $this->user,
        ]);
    }
}
