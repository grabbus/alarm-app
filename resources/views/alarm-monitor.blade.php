@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        {{ date('Y-m-d H:i:s') }}
        <livewire:alarm-monitor :vehicles="$vehicles" :calls="$calls"/>
    </div>
@stop
