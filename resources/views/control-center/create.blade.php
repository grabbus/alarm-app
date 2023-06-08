@extends('layouts.app')

@section('content')
    <div class="container">
        <livewire:control-center :keywords="$keywords" :vehicles="$vehicles"/>
    </div>
@stop
