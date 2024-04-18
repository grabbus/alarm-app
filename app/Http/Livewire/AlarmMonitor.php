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
    public function mount($vehicles, $calls)
    {
        $this->vehicles = $vehicles;
        $this->calls = $calls;
        $this->checkIfCallIsOngoing();
    }
    public function render()
    {
        return view('livewire.alarm-monitor');
    }

    public function checkIfCallIsOngoing(): void
    {
        $ongoingCall = null;
        $calls = $this->calls;
        foreach($calls as $call) {
            if(
                $call->alarmed_at >= Carbon::now()->subMinutes(5)->toDateTimeString()
                && $call->alarmed_at <= Carbon::now()->addMinutes(5)->toDateTimeString()
                && !$call->is_closed
            ) {
                $ongoingCall = $call;
            } else {
                $this->currentCall = null;
            }
        }

        if($ongoingCall) {
            $this->dispatchBrowserEvent('newCall');
            $this->currentCall = $ongoingCall;
        }
    }
}
