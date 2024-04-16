<?php

namespace App\Http\Livewire;

use App\Models\Vehicle;
use App\Models\Call;
use Carbon\Carbon;
use Livewire\Component;

class AlarmMonitor extends Component
{
    public $vehicles;
    public $calls;
    public $currentCall = null;

    public $alarmedVehicles = null;

    public bool $alarm = false;

    protected $listeners = ['refreshComponent' => '$refresh'];
    public function mount($vehicles, $calls)
    {
        $this->vehicles = $vehicles;
        $this->calls = $calls;
        $this->currentCall = $this->checkIfCallIsOngoing();
    }
    public function render()
    {
        return view('livewire.alarm-monitor');
    }

    public function checkIfCallIsOngoing()
    {
        $ongoingCall = null;
        $calls = $this->calls;
        foreach($calls as $call) {
            if(
                //$call->alarmed_at >= Carbon::now()->subMinutes(5)->toDateTimeString()
                $call->alarmed_at <= Carbon::now()->addMinutes(5)->toDateTimeString()
            ) {
                $ongoingCall = $call;
            }
        }
        return $ongoingCall;
    }
}
