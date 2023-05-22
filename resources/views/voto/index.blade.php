@extends('adminlte::page')

@section('title', 'Emisión Voto')

{{-- @section('content_header')
    <h1>Emisión de voto</h1>
@stop --}}

@section('content')
    <div class="border-tipico"></div>
    <div class="px-5 text-white bg-primary">
        <div class="container">
            <h1 class="display-4">Guatemala tú votas, tú eliges, tú decides</h1>
            <p class="lead">Recuerda una vez realizado tu voto no podras hacer cambio de este</p>
        </div>
    </div>
    <x-boleta />
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('./css/boleta.css') }}">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
