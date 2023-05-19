@extends('adminlte::page')

@section('title', 'Registro de partidos')

@section('content_header')
    <h1>Registro de partidos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <h3 class="text-white"><i class="fa-solid fa-triangle-exclamation"></i> Existen los siguientes
                        errores:</h3>

                    <hr>

                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {!! Form::open(['route' => 'partidos.store', 'files' => true]) !!}

            {!! Form::hidden('user_id', auth()->user()->id) !!}

            @include('admin.partidos.partials.form')

            <button type="submit" class="btn btn-primary">Registrar partido <i class="ml-2 fa-solid fa-plus"></i></button>


            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .none {
            display: none;
        }

        .image-wrapper {
            position: relative;
            padding-bottom: 56.25%;
            margin-bottom: 20px;
            border-radius: 20px;
        }

        .image-wrapper img {
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
            border-radius: 20px;
        }
    </style>
@stop

@section('js')
    {{-- image --}}
    <script>
        //Cambiar imagen
        document.getElementById('file').addEventListener('change', changeImage);

        function changeImage(event) {
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };
            reader.readAsDataURL(file);
        }
    </script>
@stop
