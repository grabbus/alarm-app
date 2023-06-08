<?php

namespace App\Http\Livewire;

use App\Models\Call;
use Livewire\Component;

class CallHistory extends Component
{
    public $call;
    public $message;
    public $histories;

    protected $listeners = ['refreshComponent' => '$refresh'];

    protected $rules = [
        'message' => 'required|string'
    ];

    protected $messages = [
        'message.required' => 'Ein Eintrag ist erforderlich.'
    ];

    public function mount(Call $call)
    {
        $this->call = $call;
        $this->loadHistory($call);
    }

    public function render()
    {
        return view('livewire.call-history');
    }

    public function addMessage()
    {
        $this->validate();

        $history = new \App\Models\CallHistory([
            'call_id' => $this->call->id,
            'message' => $this->message,
        ]);
        $history->save();

        $this->reset([
            'message'
        ]);
        $this->loadHistory($this->call);

        $this->emit('refreshComponent');
    }

    private function loadHistory($call)
    {
        $this->histories = \App\Models\CallHistory::query()
            ->where('call_id', $call->id)
            ->get();
    }
}
