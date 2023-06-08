<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
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
        if ($status !== $this->status) {
            sleep(1);
            $this->status = $status;
            $this->vehicle->status = $status;
            $this->vehicle->save();

            DB::table('status_log')
                ->insert([
                    'vehicle_id' => $this->vehicle->id,
                    'status' => $status,
                    'created_at' => now(),
                ]);

            $this->emit('changed-status');
        }
    }

    public function render()
    {
        return view('livewire.vehicle');
    }
}
