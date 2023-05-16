<div class="form-group">
    {!! Form::label('nombre', 'Nombre completo del candidato:') !!}
    {!! Form::text('nombre', null, [
        'class' => 'form-control',
        'placeholder' => 'Ingrese nombre completo del candidato...',
        'autofocus',
    ]) !!}

    @error('nombre')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="row">
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

    <div class="col">
        <div class="form-group">
            {!! Form::label('logo', 'Enlace del logo del partido:') !!}
            {!! Form::text('logo', null, [
                'class' => 'form-control',
                'placeholder' => 'Ingrese el enlace de la foto del logo del partido...',
            ]) !!}
            @error('logo')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col form-group">
            {!! Form::label('nombre_partido', 'Nombre del partido: ') !!}
            {!! Form::text('nombre_partido', null, [
                'class' => 'form-control',
                'placeholder' => 'Ingrese el nombre del partido...',
            ]) !!}
            @error('nombre_partido')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
</div>
