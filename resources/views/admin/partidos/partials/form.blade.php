<div class="form-group">
    {!! Form::label('nombre_partido', 'Nombre completo del partido político:') !!}
    {!! Form::text('nombre_partido', null, [
        'class' => 'form-control',
        'placeholder' => 'Ingrese nombre completo del partido político...',
        'autofocus',
    ]) !!}

    @error('nombre_partido')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>


<div class="row">
    <div class="col-lg-6">
        <div class="image-wrapper">
            @isset($partido->image)
                <img id="picture" src="{{ Storage::url($partido->image->url) }}" alt="Cama a mostrar">
            @else
                <img id="picture" src="https://crnnoticias.com/wp-content/uploads/2022/12/tse-logo-2023.jpg"
                    alt="Logo del partido">
            @endisset
        </div>
    </div>
    <div class="flex-column justify-content-center col-lg-6 d-flex">
        <div class="form-group">
            {!! Form::label('file', 'Logo del partido') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
            @error('file')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <ul class="h5">
            <li class="mb-2">Las dimensiones para el logo del partido deben ser: <span
                    class="font-weight-bold text-danger">600px
                    *
                    600px.</span></li>
            <li>Recuerde que esta imagen debe de estar con la extensión
                <strong class="font-weight-bold text-danger">PNG</strong>
            </li>
        </ul>
    </div>
</div>




{{-- <div class="form-group">
    {!! Form::label('file', 'Foto del logo del partido') !!}
    {!! Form::file('file', ['class' => 'form-control-file', 'id' => 'picture', 'accept' => 'image/*']) !!}
    @error('file')
        <small class="text-danger">{{ $message }}</small>
    @enderror

    @isset($partido->image)
        <img class="mt-2 d-block" width="200px" src="{{ Storage::url($partido->image->url) }}"
            alt="{{ $partido->nombre_partido }}">
    @endisset
</div>
 --}}

{{-- <div class="row">
        <div class="col">
            <div class="form-group">
                {!! Form::label('foto_persona', 'Foto del candidato:') !!}
                {!! Form::text('foto_persona', null, [
                    'class' => 'form-control',
                    'placeholder' => 'Ingrese el enlace de la foto del candidato...',
                ]) !!}
                @error('foto_persona')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div> --}}
