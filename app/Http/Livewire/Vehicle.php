<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Vehicle extends Component
{
    public $callSign;
    public $type;
    public $typeLong;
    public $status;

    protected $listeners = ['setStatus' => '$refresh'];

    public function mount($vehicle)
    {
        $this->callSign = $vehicle->call_sign;
        $this->type = $vehicle->type;
        $this->typeLong = $vehicle->type_long;
        $this->status = $vehicle->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function render()
    {
        return view('livewire.vehicle');
    }
}
