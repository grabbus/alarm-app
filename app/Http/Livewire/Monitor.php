<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Monitor extends Component
{
    public $callSign;
    public $type;
    public $status;

    public function mount($vehicle)
    {
        $this->callSign = $vehicle->call_sign;
        $this->type = $vehicle->type;
        $this->status = $vehicle->status;
    }

    public function render()
    {
        return view('livewire.monitor');
    }
}
