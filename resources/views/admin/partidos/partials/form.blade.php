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
