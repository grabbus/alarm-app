<?php

namespace App\Http\Livewire;

use App\Models\StatusHistory;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Vehicle extends Component
{
    public $vehicle;
    public $callSign;
    public $type;
    public $typeLong;
    public $status;
    public $alarmedAt;

    protected $listeners = ['refreshComponent' => '$refresh'];

    public function mount($vehicle)
    {
        $this->vehicle = $vehicle;
        $this->callSign = $vehicle->call_sign;
        $this->type = $vehicle->type;
        $this->typeLong = $vehicle->type_long;
        $this->status = $vehicle->status;
        $this->alarmedAt = $vehicle->alarmed_at;
    }

    public function setStatus($status)
    {
        if ($status !== $this->status) {
            sleep(1);
            $this->status = $status;
            $this->vehicle->status = $status;
            $this->vehicle->updated_at = now();
            $this->vehicle->save();

            DB::table('status_log')
                ->insert([
                    'vehicle_id' => $this->vehicle->id,
                    'status' => $status,
                    'created_at' => now(),
                ]);

            $this->emit('changed-status');
            $this->emit('refreshComponent');
        }
    }

    public function sendAcknowledgment()
    {
        $lastStatus = StatusHistory::query()
            ->where('vehicle_id', $this->vehicle->id)
            ->whereNot('status', '5')
            ->whereNot('status', 'C')
            ->whereNot('status', 'J')
            ->latest()
            ->first();

        if (!$lastStatus) {
            $lastStatus = "2";
        } else {
            $lastStatus = $lastStatus->status;
        }

        $this->vehicle->status = $lastStatus;
        $this->vehicle->updated_at = now();
        $this->vehicle->save();

        DB::table('status_log')
            ->insert([
                'vehicle_id' => $this->vehicle->id,
                'status' => $lastStatus,
                'created_at' => now(),
            ]);

        $this->emit('changed-status');
        $this->emit('refreshComponent');
    }

    public function render()
    {
        return view('livewire.vehicle');
    }
}
