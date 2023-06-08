<?php

namespace App\Http\Livewire;

use App\Models\Call;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Alarm extends Component
{
    public $call;

    public function mount(Call $call)
    {
        $this->call = $call;
    }

    public function render()
    {
        return view('livewire.alarm');
    }

    public function alarm(Call $call)
    {
       $vehicles = $call->vehicles;
       $this->alertVehicles($vehicles);
    }

    public function alertVehicles($vehicles)
    {
        if($vehicles) {
            foreach($vehicles as $vehicle) {
                $vehicle->status = 'C';
                $vehicle->save();

                DB::table('status_log')
                    ->insert([
                        'vehicle_id' => $vehicle->id,
                        'status' => 'C',
                        'created_at' => now(),
                    ]);
            }
        }
    }
}
