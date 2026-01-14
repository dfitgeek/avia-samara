<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class CustomerOrders extends Component
{
    #[Layout('components.layouts.admin')]

    public function render()
    {
        return view('livewire.customer-orders');
    }
}
