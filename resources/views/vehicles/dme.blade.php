@extends('layouts.app')

@section('content')
     {{ $vehicle }}
     <div x-data="{}">
        <div>

        </div>

         <button x-on:click="stop">Stop</button>
     </div>

{{--    <div class="container">--}}
{{--        <livewire:d-m-e :vehicle="$vehicle"/>--}}
{{--    </div>--}}
@stop
