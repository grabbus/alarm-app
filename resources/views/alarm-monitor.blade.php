@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <livewire:alarm-monitor :vehicles="$vehicles" :calls="$calls"/>
    </div>
@stop
