@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Quicklinks</h1>

        <div class="card mb-4">
            <a href="{{ route('monitor') }}"
               class="text-black text-decoration-none">
                <div class="card-body">
                    <div class="float-start">
                        <h3 class="card-title">Fahrzeugübersicht</h3>
                        <p class="card-text">
                            Fahrzeugübersicht mit Status
                        </p>
                    </div>
                    <div class="float-end">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"
                             class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                        </svg>
                    </div>
                </div>
            </a>
        </div>

        <div class="card mb-4">
            <a href="{{ route('control-center.index') }}"
               class="text-black text-decoration-none">
                <div class="card-body">
                    <div class="float-start">
                        <h3 class="card-title">Leitstelle</h3>
                        <p class="card-text">
                            Leitstelle zum Disponieren von Einsätzen
                        </p>
                    </div>
                    <div class="float-end">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"
                             class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                        </svg>
                    </div>
                </div>
            </a>
        </div>

        <hr/>

        <h2>Fahrzeugspezfische Funktionen</h2>

        @isset($vehicles)
            <div class="card mb-4">
                <div class="card-body">
                    <div class="mb-2">
                        <h3 class="card-title">FMS</h3>
                        <p class="card-text">
                            Funkmeldesystem
                        </p>
                    </div>
                    <div>
                        @foreach($vehicles as $vehicle)
                            <a class="btn btn-lg btn-outline-primary me-2"
                               href="{{ route('show-vehicle', $vehicle) }}">
                                {{ $vehicle->call_sign }}
                            </a>
                        @endforeach
                    </div>

                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="mb-2">
                        <h3 class="card-title">DME</h3>
                        <p class="card-text">
                            Digitaler Meldeempfänger - funktioniert nur wenn der Bildschirm geöffnet bleibt!
                        </p>
                    </div>
                    <div>
                        @foreach($vehicles as $vehicle)
                            <a class="btn btn-lg btn-outline-primary me-2"
                               href="{{ route('vehicle.dme', $vehicle) }}">
                                {{ $vehicle->call_sign }}
                            </a>
                        @endforeach
                    </div>

                </div>
            </div>
        @endisset
    </div>
@stop
