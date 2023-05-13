<div class="form-group">
    {!! Form::label('name', 'Nombre completo del usuario:') !!}
    {!! Form::text('name', null, [
        'class' => 'form-control',
        'placeholder' => 'Ingrese nombre completo del usuario...',
        'autofocus',
    ]) !!}

    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="row">
    <div class="col">
        <div class="form-group">
            {!! Form::label('dpi', 'Número de DPI:') !!}
            {!! Form::text('dpi', null, [
                'class' => 'form-control',
                'placeholder' => 'Ingrese el número de DPI...',
            ]) !!}
            @error('dpi')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col">
        <div class="form-group">
            {!! Form::label('email', 'Correo electrónico del usuario:') !!}
            {!! Form::text('email', null, [
                'class' => 'form-control',
                'placeholder' => 'Ingrese el correo electrónico del ausuario...',
            ]) !!}
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col form-group">
            {!! Form::label('password', 'Contraseña del usuario: ') !!}
            {!! Form::password('password', [
                'class' => 'form-control',
                'placeholder' => 'Ingrese la contraseña para el usuario...',
            ]) !!}
            @error('password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- <div class="col form-group">
            {!! Form::label('password_confirmation', 'Confirmación de la contraseña:') !!}
            {!! Form::password('password_confirmation', [
                'class' => 'form-control',
                'placeholder' => 'Confirme la contraseña del usuario...',
            ]) !!}
            @error('password_confirmation')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div> --}}
    </div>

    {{-- <div class="form-group">
        {!! Form::label('role', 'Permisos del usuairo:') !!}
        {!! Form::select('role', ['Administrador', 'Maestro', 'Padre/encargado'], null, ['class' => 'form-control']) !!}
        @error('role')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div> --}}

</div>
