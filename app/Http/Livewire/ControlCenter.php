<?php

namespace App\Http\Livewire;

use App\Jobs\DispatchResources;
use App\Models\Call;
use App\Models\CallKeyword;
use Carbon\Carbon;
use Livewire\Component;

class ControlCenter extends Component
{
    public $keywords;
    public $vehicles;

    public array $selectedResources = [];

    public string $caller = '';
    public string $callerPhoneNumber = '';
    public string $street = '';
    public string $houseNumber = '';
    public string $city = '';
    public string $zip = '';
    public string $section = '';
    public string $object = '';

    public string $selectedKeyword = '';
    public string $priority = '';

    public string $note = '';
    public $date;
    public $time;

    protected $rules = [
        'street' => 'required|string',
        'city' => 'required',
        'zip' => 'required|min:5|string',
        'selectedKeyword' => 'required',
        'priority' => 'required',
        'selectedResources' => 'required|array',
        'date' => 'sometimes',
        'time' => 'sometimes',
    ];

    protected $messages = [
        'street.required' => 'Eine Straße ist erforderlich.',
        'city.required' => 'Eine Stadt ist erforderlich.',
        'zip.required' => 'Eine Postleitzahl ist erforderlich.',
        'zip.min' => 'Die Postleitzahl muss 5 Stellen besitzen.',
        'selectedKeyword.required' => 'Ein Einsatzstichwort ist erforderlich.',
        'priority.required' => 'Eine Priorität ist erforderlich.',
        'selectedResources.required' => 'Mindestens ein Einsatzmittel ist erforderlich.'
    ];

    public function mount(
        $keywords,
        $vehicles
    ) {
        $this->keywords = $keywords;
        $this->vehicles = $vehicles;
    }

    public function render()
    {
        return view('livewire.control-center');
    }

    public function submit()
    {
        $this->validate();

        $keyword = CallKeyword::query()
            ->find($this->selectedKeyword);

        if (isset($this->date) && isset($this->time)) {
            $disposeDate = Carbon::parse($this->date . ' ' . $this->time);
        }

        $call = new Call([
            'caller' => $this->caller,
            'caller_phone_number' => $this->callerPhoneNumber,
            'street' => $this->street,
            'house_number' => $this->houseNumber,
            'city' => $this->city,
            'zip' => $this->zip,
            'section' => $this->section,
            'object' => $this->object,
            'keyword' => $keyword->keyword,
            'category' => $keyword->category,
            'catchword' => $keyword->catchword,
            'priority' => $this->priority,
            'note' => $this->note,
            'dispose_at' => $disposeDate ?? null,
        ]);

        $call->save();

        if (isset($disposeDate)) {
            $now = Carbon::now();
            $minutes = $disposeDate->diffInMinutes($now);
            DispatchResources::dispatch($call)->delay($now->addMinutes($minutes));
        }

        $this->addResources($this->selectedResources, $call);
        $this->resetProperties();

        return redirect()->to('/leitstelle');
    }

    public function addResources(array $resources, Call $call)
    {
        $vehicles = \App\Models\Vehicle::query()
            ->whereIn('id', $resources)
            ->get();

        foreach($vehicles as $vehicle) {
            $vehicle->calls()->attach($call->id);
        }
    }

    public function resetProperties()
    {
        $this->reset([
            'caller',
            'callerPhoneNumber',
            'street',
            'houseNumber',
            'city',
            'zip',
            'section',
            'object',
            'selectedKeyword',
            'priority',
            'note',
            'selectedResources',
        ]);
    }
}
