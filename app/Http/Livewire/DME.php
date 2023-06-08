<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DME extends Component
{
    public $vehicle;

    public function mount($vehicle)
    {
        $this->vehicle = $vehicle;
    }

    public function render()
    {
        return view('livewire.d-m-e');
    }
}
