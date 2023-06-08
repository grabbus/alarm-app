@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="mb-4">
            <strong>Feuerwehr</strong>
        </h3>
        <div class="row row-cols-md-3">
            @foreach($vehiclesFD as $vehicleFD)
                <livewire:monitor :vehicle="$vehicleFD"/>
            @endforeach
        </div>
        <hr class="my-4"/>
        <h3 class="mb-4">
            <strong>Rettungsdienst</strong>
        </h3>
        <div class="row row-cols-md-3">
            @foreach($vehiclesEMS as $vehicleEMS)
                <livewire:monitor :vehicle="$vehicleEMS"/>
            @endforeach
        </div>
    </div>
@stop
