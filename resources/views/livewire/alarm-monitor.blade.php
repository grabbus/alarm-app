<div class="container-fluid h-100">
    <div class="row h-100 d-flex">
        <div class="col-2">
            <div class="h-100 d-flex flex-column">
                <div class="row">
                    <div class="text-white d-flex align-items-center justify-content-center border">
                        <div style="height:20rem;" >
                            <div class="mt-5">
                                <svg xmlns="http://www.w3.org/2000/svg" height="192" width="168" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ff0000" d="M159.3 5.4c7.8-7.3 19.9-7.2 27.7 .1c27.6 25.9 53.5 53.8 77.7 84c11-14.4 23.5-30.1 37-42.9c7.9-7.4 20.1-7.4 28 .1c34.6 33 63.9 76.6 84.5 118c20.3 40.8 33.8 82.5 33.8 111.9C448 404.2 348.2 512 224 512C98.4 512 0 404.1 0 276.5c0-38.4 17.8-85.3 45.4-131.7C73.3 97.7 112.7 48.6 159.3 5.4zM225.7 416c25.3 0 47.7-7 68.8-21c42.1-29.4 53.4-88.2 28.1-134.4c-4.5-9-16-9.6-22.5-2l-25.2 29.3c-6.6 7.6-18.5 7.4-24.7-.5c-16.5-21-46-58.5-62.8-79.8c-6.3-8-18.3-8.1-24.7-.1c-33.8 42.5-50.8 69.3-50.8 99.4C112 375.4 162.6 416 225.7 416z"/></svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row flex-grow-1 justify-content-center align-items-center border">
                    <div class="text-white text-center">
                        <h1 class="display-4">
                            {{ date('h:m:s') }}
                        </h1>
                        <h1>
                            {{ date('D, d M Y') }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-10 bg-gray border">
        @if(!empty($vehicles))
            @foreach($vehicles as $vehicle)
                <div class="row border mb-3 mx-1 p-3
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
                    bg-status-0 text-white
                @elseif($vehicle->status == 'C')
                    bg-status-c
                @elseif($vehicle->status == 'J')
                    bg-status-j
                @endif
                ">
                    <div class="col-1 text-center">
                        <h1 class="display-4 bolder">
                            {{ $vehicle->status }}
                        </h1>
                    </div>
                    <div class="col">
                        <h1 class="display-4">
                            {{ $vehicle->call_sign }}
                        </h1>
                    </div>
                </div>
            @endforeach
        @endif
        </div>
    </div>
{{--    --}}
{{--    --}}
{{--    --}}
{{--    <div wire:poll.15000ms="checkIfCallIsOngoing">--}}
{{--        @if($currentCall)--}}
{{--        --}}{{-- Stichwort --}}
{{--        <div class="row flex-grow-1 align-items-start">--}}
{{--            <div class="col-12 h-100 bg-brand" style="color: white; background: red;">--}}
{{--                <div class="text-center">--}}
{{--                    <h1 class="display-3">--}}
{{--                        {{ $currentCall->keyword }} - {{ $currentCall->category }} - {{ $currentCall->catchword }}--}}
{{--                    </h1>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        --}}{{-- Adresse --}}
{{--        <div class="row flex-grow-1 align-items-center">--}}
{{--            <div class="col-12">--}}
{{--                <div class="text-center">--}}
{{--                    <h1 class="display-4">--}}
{{--                        {{ $currentCall->street }} {{$currentCall->house_number}}, {{ $currentCall->city }}--}}
{{--                    </h1>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        --}}{{-- Einsatzmittel --}}
{{--        <div class="row flex-grow-1 row-cols-3 align-items-center justify-content-center">--}}
{{--            @if($currentCall->vehicles)--}}
{{--                @foreach($currentCall->vehicles as $vehicle)--}}
{{--                    <div class="col mb-4">--}}
{{--                        <div class="card text-center rounded-0--}}
{{--                                        @if($vehicle->status == 1)--}}
{{--                                            bg-status-1--}}
{{--                                        @elseif($vehicle->status == 2)--}}
{{--                                            bg-status-2--}}
{{--                                        @elseif($vehicle->status == 3)--}}
{{--                                            bg-status-3--}}
{{--                                        @elseif($vehicle->status == 4)--}}
{{--                                            bg-status-4--}}
{{--                                        @elseif($vehicle->status == 5)--}}
{{--                                            bg-status-5 text-white--}}
{{--                                        @elseif($vehicle->status == 6)--}}
{{--                                            bg-status-6--}}
{{--                                        @elseif($vehicle->status == 7)--}}
{{--                                            bg-status-7--}}
{{--                                        @elseif($vehicle->status == 8)--}}
{{--                                            bg-status-8--}}
{{--                                        @elseif($vehicle->status == 9)--}}
{{--                                            bg-status-9--}}
{{--                                        @elseif($vehicle->status == 0)--}}
{{--                                            bg-status-0--}}
{{--                                        @elseif($vehicle->status == 'C')--}}
{{--                                            bg-status-c bg-white--}}
{{--                                        @endif--}}
{{--                        ">--}}
{{--                            <div class="card-body">--}}
{{--                                <h1>--}}
{{--                                    {{ $vehicle->call_sign }}--}}
{{--                                </h1>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            @endif--}}
{{--        </div>--}}
{{--        @else--}}

{{--    </div>--}}
{{--        @endif--}}
{{--    </div>--}}
{{--    @if($currentCall)--}}
{{--        <script>--}}
{{--            document.addEventListener('livewire:load', function () {--}}
{{--                let played = false;--}}
{{--                window.addEventListener('newCall', event => {--}}
{{--                    let gong = new Audio("{{ asset('/audio/gong.mp3') }}");--}}
{{--                    if(played === false) {--}}
{{--                        gong.play();--}}
{{--                    }--}}
{{--                    played = true;--}}
{{--                })--}}
{{--            });--}}
{{--        </script>--}}
{{--    @endif--}}
</div>
