@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <a href="{{ route('control-center.index') }}"
               class="btn btn-primary mb-3">
                Zurück
            </a>

            <a href="{{ route('control-center.close-call', ['call' => $call]) }}"
                class="btn btn-danger mb-3 @if($call->is_closed) disabled @endif" @if($call->is_closed) disabled @endif>
                Einsatz abschließen
            </a>
        </div>


        <h3 class="mb-3">
            {{ $call->keyword }} -
            {{ $call->category }} -
            {{ $call->catchword }}
        </h3>

        <div class="row">
            <div class="col">
                <h4 class="mb-3 fw-bold">Einsatzdetails</h4>
                <h5 class="mb-3 fw-bold">Einsatzort</h5>
                <div class="row mb-2">
                    <div class="col">
                        <label class="form-label"
                               for="caller">Meldender</label>
                        <input id="caller"
                               name="caller"
                               type="text"
                               class="form-control"
                               value="{{ $call->caller }}"
                               readonly
                               @if($call->is_closed) disabled @endif
                        >
                    </div>
                    <div class="col">
                        <label class="form-label"
                               for="caller_phone_number">Meldender Telefonnummer</label>
                        <input id="caller_phone_number"
                               name="caller_phone_number"
                               type="text"
                               class="form-control"
                               value="{{ $call->caller_phone_number }}"
                               readonly
                               @if($call->is_closed) disabled @endif
                        >
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label class="form-label" for="street">Straße *</label>
                        <input id="street"
                               name="street"
                               type="text"
                               class="form-control"
                               value="{{ $call->street }}"
                               readonly
                               @if($call->is_closed) disabled @endif
                        >
                    </div>
                    <div class="col-2">
                        <label class="form-label" for="house_number">Hausnummer</label>
                        <input id="house_number"
                               name="house_number"
                               type="text"
                               class="form-control"
                               value="{{ $call->house_number }}"
                               readonly
                               @if($call->is_closed) disabled @endif
                        >
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label class="form-label" for="city">Stadt *</label>
                        <input id="city"
                               name="city"
                               type="text"
                               class="form-control"
                               value="{{ $call->city }}"
                               readonly
                               @if($call->is_closed) disabled @endif
                        >
                    </div>
                    <div class="col-2">
                        <label class="form-label" for="zip">Postleitzahl *</label>
                        <input id="zip"
                               name="zip"
                               type="text"
                               class="form-control"
                               value="{{ $call->zip }}"
                               readonly
                               @if($call->is_closed) disabled @endif
                        >
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <label class="form-label" for="section">Abschnitt</label>
                        <input id="section"
                               name="section"
                               type="text"
                               class="form-control"
                               value="{{ $call->section }}"
                               readonly
                               @if($call->is_closed) disabled @endif
                        >
                    </div>
                    <div class="col">
                        <label class="form-label" for="object">Objekt</label>
                        <input id="object"
                               name="object"
                               type="text"
                               class="form-control"
                               value="{{ $call->object }}"
                               readonly
                               @if($call->is_closed) disabled @endif
                        >
                    </div>
                </div>
                <h5 class="mb-3 fw-bold">Einsatzmittel</h5>
                <ul class="list-group">
                    @foreach($call->vehicles as $vehicle)
                        <li class="list-group-item
                        @if($vehicle->status == 1)
                        bg-status-1
                        @elseif($vehicle->status == 2)
                        bg-status-2
                        @elseif($vehicle->status == 3)
                        bg-status-3
                        @elseif($vehicle->status == 4)
                        bg-status-4
                        @elseif($vehicle->status == 5)
                        bg-status-5
                        @elseif($vehicle->status == 6)
                        bg-status-6
                        @elseif($vehicle->status == 7)
                        bg-status-7
                        @elseif($vehicle->status == 8)
                        bg-status-8
                        @elseif($vehicle->status == 9)
                        bg-status-9
                        @elseif($vehicle->status == 'C')
                        bg-status-c
                        @elseif($vehicle->status == 'J')
                        bg-status-j
                        @endif
                        ">
                            <div class="float-start">
                                {{ $vehicle->call_sign }} - {{ $vehicle->type_long }}
                            </div>
                            <div class="float-end">
                                <strong>{{ $vehicle->status }}</strong>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="col">
                <h5 class="mb-3 fw-bold">Dokumentation</h5>
                <livewire:call-history :call="$call"/>
            </div>
        </div>
    </div>
    <script>
        //todo 30 reload
    </script>
@stop
