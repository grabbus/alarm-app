<?php

namespace App\Http\Livewire;

use App\Jobs\DispatchResources;
use App\Models\Call;
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
        if ($vehicles) {
            DispatchResources::dispatch($this->call);
        }
    }
}
