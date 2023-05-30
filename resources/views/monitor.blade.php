@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-md-3">
            <livewire:monitor :vehicle="$vehicles"/>
        </div>
    </div>
@stop
