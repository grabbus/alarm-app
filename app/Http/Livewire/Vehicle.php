<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Vehicle extends Component
{
    public $vehicle;
    public $callSign;
    public $type;
    public $typeLong;
    public $status;

    public function mount($vehicle)
    {
        $this->vehicle = $vehicle;
        $this->callSign = $vehicle->call_sign;
        $this->type = $vehicle->type;
        $this->typeLong = $vehicle->type_long;
        $this->status = $vehicle->status;
    }

    public function setStatus($status)
    {
        sleep(1);
        $this->status = $status;
        $this->vehicle->status = $status;
        $this->vehicle->save();

        $this->emit('changed-status');
    }

    public function render()
    {
        return view('livewire.vehicle');
    }
}
