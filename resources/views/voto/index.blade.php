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


    @if ($voto)
        {{-- <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ Storage::url($candidato->image->url) }}" alt="{{ $candidato->nombre }}">
            <div class="card-body">
                <p class="card-text">Usted ya realizo su voto, usted voto por: {{ $candidato->nombre }}</p>
            </div>
        </div> --}}
        <div class="container">
            <div class="row">
                <div class="text-center offset-lg-4 col-lg-4 col-sm-6 col-12 main-section">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 profile-header"></div>
                    </div>
                    <div class="row user-detail">
                        <div class="col-lg-12 col-sm-12 col-12">
                            <img src="{{ Storage::url($candidato->image->url) }}" class="rounded-circle">
                            <h5>{{ $candidato->nombre }}</h5>
                            <p>Partido {{ $candidato->party->nombre_partido }}</p>

                            <hr>
                            <p class="text-center text-danger text-uppercase frase">Usted ya realizo su voto!</p>
                        </div>
                    </div>
                    <div class="row user-social-detail">
                        <div class="col-lg-12 col-sm-12 col-12">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        {!! Form::open(['route' => 'voto.store']) !!}
        <div class="container">
            <div class="row">
                @foreach ($candidatos as $candidate)
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        {!! Form::hidden('user_id', auth()->user()->id) !!}
                        <div class="card">
                            <div class="card-header nombre-candidato">{{ $candidate->nombre }}</div>

                            <div class="card1" style="background-image: url({{ Storage::url($candidate->image->url) }})">
                            </div>
                            <img class="logo_partido" src="{{ Storage::url($candidate->party->image->url) }}"
                                alt="">

                            <div class="card-body nombre_partido">{{ $candidate->party->nombre_partido }}</div>
                            <div class="card-footer d-flex justify-content-center">
                                {!! Form::checkbox('candidates_id', $candidate->id, null) !!}
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
            <button type="submit" class="btn btn-outline-success votar ">
                REALIZAR VOTO ! <img width="40px" src="{{ asset('./images/logo-quetzal.svg') }}" alt="">
            </button>
        </div>
        {!! Form::close() !!}
    @endif

@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('./css/boleta.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/card.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        @if (Session::has('info'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
            }
            toastr.success("{{ session('info') }}");
        @endif
    </script>
@stop
