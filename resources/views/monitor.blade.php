@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-md-3">
            @foreach($vehicles as $vehicle)
                <livewire:monitor :vehicle="$vehicle"/>
            @endforeach
        </div>
    </div>
@stop
