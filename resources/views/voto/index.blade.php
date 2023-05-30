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

    <div class="container">
        <div class="row">

            @foreach ($candidatos as $candidate)
                {{-- <div class="col-xs-12 col-sm-12 col-md-4">
                    <a href="">
                        <div class="card">
                            <div class="image-box card1"
                                style="background-image:url({{ Storage::url($candidate->image->url) }})">
                                <div class="text-container">
                                    <span class="subtitle">{{ $candidate->party->nombre_partido }}<i
                                            class="fa fa-angle-double-down"></i></span>
                                    <p class="nombre-candidato">{{ $candidate->nombre }}</p>
                                    <img class="foto-candidato" src="{{ Storage::url($candidate->party->image->url) }}"
                                        alt="">
                                </div>
                                <div class="button-down">
                                    <span>VOTAR</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div> --}}
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="card">
                        <div class="card-header nombre-candidato">{{ $candidate->nombre }}</div>

                        <div class="card1" style="background-image: url({{ Storage::url($candidate->image->url) }})"></div>
                        <img class="logo_partido" src="{{ Storage::url($candidate->party->image->url) }}" alt="">

                        <div class="card-body nombre_partido">{{ $candidate->party->nombre_partido }}</div>
                        <div class="card-footer d-flex justify-content-center">
                            <a class="btn btn-outline-success votar ">
                                VOTAR ! <img width="40px" src="{{ asset('./images/logo-quetzal.svg') }}" alt="">
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach

            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="card">
                    <div class="card-header nombre-candidato text-danger">VOTO NULO</div>

                    <div class="card1"
                        style="background-image: url(https://www.pngitem.com/pimgs/m/81-817805_letter-x-png-free-download-x-icon-red.png)">
                    </div>

                    <div class="card-body nombre_partido text-danger">VOTO NULO</div>
                    <div class="card-footer d-flex justify-content-center">
                        <a class="btn btn-outline-danger votar ">
                            VOTAR ! <img width="40px" src="{{ asset('./images/logo-quetzal.svg') }}" alt="">
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('./css/boleta.css') }}">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
