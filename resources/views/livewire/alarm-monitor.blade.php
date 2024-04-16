<div wire:poll>
    <div class="container h-100 d-flex flex-column" style="height: 100%;">
        @if($currentCall)
        {{-- Stichwort --}}
        <div class="row flex-grow-1 align-items-start">
            <div class="col-12 h-100 bg-brand" style="color: white; background: red;">
                <div class="text-center">
                    <h1 class="display-3">
                        {{ $currentCall->keyword }} - {{ $currentCall->category }} - {{ $currentCall->catchword }}
                    </h1>
                </div>
            </div>
        </div>
        {{-- Adresse --}}
        <div class="row flex-grow-1 align-items-center">
            <div class="col-12">
                <div class="text-center">
                    <h1 class="display-4">
                        {{ $currentCall->street }} {{$currentCall->house_number}}, {{ $currentCall->city }}
                    </h1>
                </div>
            </div>
        </div>
        {{-- Einsatzmittel --}}
        <div class="row flex-grow-1 row-cols-3 align-items-center justify-content-center">
            @if($currentCall->vehicles)
                @foreach($currentCall->vehicles as $vehicle)
                    <div class="col mb-4">
                        <div class="card text-center rounded-0
                                        @if($vehicle->status == 1)
                                            bg-status-1
                                        @elseif($vehicle->status == 2)
                                            bg-status-2
                                        @elseif($vehicle->status == 3)
                                            bg-status-3
                                        @elseif($vehicle->status == 4)
                                            bg-status-4
                                        @elseif($vehicle->status == 5)
                                            bg-status-5 text-white
                                        @elseif($vehicle->status == 6)
                                            bg-status-6
                                        @elseif($vehicle->status == 7)
                                            bg-status-7
                                        @elseif($vehicle->status == 8)
                                            bg-status-8
                                        @elseif($vehicle->status == 9)
                                            bg-status-9
                                        @elseif($vehicle->status == 0)
                                            bg-status-0
                                        @elseif($vehicle->status == 'C')
                                            bg-status-c bg-white
                                        @endif
                        ">
                            <div class="card-body">
                                <h1>
                                    {{ $vehicle->call_sign }}
                                </h1>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        @else

        @endif
    </div>
</div>
