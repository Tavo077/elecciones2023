@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h2>Resumen de Votantes</h2>
    <hr>
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="panel panel-dark panel-colorful">
                <div class="text-center panel-body">
                    <p class="text-sm text-uppercase mar-btm">Votantes registrados</p>
                    <i class="fa fa-users fa-5x"></i>
                    <hr>
                    <p class="h2 text-bold">{{ $usuarios }}</p>
                </div>
            </div>
        </div>


        {{-- Usuarios que no han votado --}}

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="panel panel-danger panel-colorful">
                <div class="text-center panel-body">
                    <p class="text-sm text-uppercase mar-btm">Votantes faltantes</p>
                    <i class="fas fa-user-times fa-5x"></i>
                    <hr>
                    <p class="h2 text-bold">{{ $faltantes }}</p>
                </div>
            </div>
        </div>

        {{-- Votos realizados --}}

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="panel panel-success panel-colorful">
                <div class="text-center panel-body">
                    <p class="text-sm text-uppercase mar-btm">Votos Realizados</p>
                    <i class="fas fa-user-check fa-5x"></i>
                    <hr>
                    <p class="h2 text-bold">{{ $votos_realizados }}</p>
                </div>
            </div>
        </div>

    </div>

    <h2>Resumen de Votos</h2>
    <hr>

    <div class="row">
        @foreach ($candidates as $candidate)
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="card">

                    <div class="card-header nombre-candidato">{{ $candidate->nombre }} -
                        {{ $candidate->party->nombre_partido }}</div>



                    <div class="card1" style="background-image: url({{ Storage::url($candidate->image->url) }})">
                    </div>
                    <img class="logo_partido" src="{{ Storage::url($candidate->party->image->url) }}" alt="">

                    <div class="card-body nombre_partido d-flex justify-content-between align-items-center">
                        <p>Votos: {{ $voteCounts[$candidate->id] }}</p>
                    </div>
                    <div class="card-footer d-flex justify-content-center">
                    </div>

                </div>
            </div>
        @endforeach
    </div>


    {{-- {{ $count_candidatos }}

    @foreach ($candidates as $candidate)
        <div>{{ $candidate->nombre }}</div>
        {{ $voteCounts[$candidate->id] }}
    @endforeach

    {{ $faltantes }}
    {{ $votos_realizados }}
    {{ $usuarios }} --}}

@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/boleta.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/card.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
