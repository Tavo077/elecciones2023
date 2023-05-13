@extends('adminlte::page')

@section('title', 'Editar usuario')

@section('content_header')
    <h1>Edición de usuarios</h1>
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

            {!! Form::model($usuario, ['route' => ['usuarios.update', $usuario], 'method' => 'put']) !!}

            @include('admin.usuarios.partials.form')

            <button type="submit" class="btn btn-primary">Actualizar información <i class="ml-2 fas fa-pencil"></i></button>


            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
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
