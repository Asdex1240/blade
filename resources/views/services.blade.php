@extends('layouts.landing')

@section('title', 'Servies')
@section('content')
    <h1>Services</h1>
    @component('_components.card')
        @slot('title', 'Service 1')
        @slot('content', 'Lorem ipsum dolor ser almet')
    @endcomponent
@endsection