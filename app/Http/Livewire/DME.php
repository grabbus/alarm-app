<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DME extends Component
{
    public $vehicle;
    public $status;
    public $alarmedAt;
    public $message;
    public $address;

    protected $listeners = ['refreshComponent' => '$refresh'];

    public function mount($vehicle)
    {
        $this->vehicle = $vehicle;
        $this->status = $vehicle->status;
        $this->alarmedAt = $vehicle->alarmed_at;
        $this->getCallInfo();
    }

    public function render()
    {
        return view('livewire.d-m-e');
    }

    public function acknowledge()
    {
        $this->reset([
            'message',
            'address',
        ]);

        $this->emit('refreshComponent');
    }

    public function getCallInfo()
    {
        $call = $this->vehicle->calls()->latest()->first();

        if (
            $this->status === 'C'
            && isset($call)
        ) {
            $this->message =
                $call->keyword . ' - ' .
                $call->category . ' - ' .
                $call->catchword;

            $this->address =
                $call->street . ' ' .
                $call->housenumber . ' - ' .
                $call->zip . ' ' . $call->city;

            $this->note = $call->note;
        }
    }
}
