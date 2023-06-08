<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SpeakRequest extends Component
{
    public $vehicles;

    protected $listeners = ['refreshComponent' => '$refresh'];

    public function mount($vehicles)
    {
        $this->vehicles = $vehicles;
    }

    public function render()
    {
        return view('livewire.speak-request');
    }

    public function sendSpeakPrompt(\App\Models\Vehicle $vehicle)
    {
        $vehicle->status = 'J';
        $vehicle->updated_at = now();
        $vehicle->save();

        DB::table('status_log')
            ->insert([
                'vehicle_id' => $vehicle->id,
                'status' => 'J',
                'created_at' => now(),
            ]);

        $this->emit('refreshComponent');
    }
}
