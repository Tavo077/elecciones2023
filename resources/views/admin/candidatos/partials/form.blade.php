<div class="row">
    <div class="form-group col-lg-6">
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

    <div class="form-group col-lg-6">
        {!! Form::label('party_id', 'Partido al que pertenece el candidato') !!}
        {!! Form::select('party_id', $partidos, null, ['class' => 'form-control']) !!}

        @error('party')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>


<div class="row">
    <div class="col-lg-6">
        <div class="image-wrapper">
            @isset($candidato->image)
                <img id="picture" src="{{ Storage::url($candidato->image->url) }}" alt="Cama a mostrar">
            @else
                <img id="picture" src="https://crnnoticias.com/wp-content/uploads/2022/12/tse-logo-2023.jpg"
                    alt="Foto del candidato">
            @endisset
        </div>
    </div>
    <div class="flex-column justify-content-center col-lg-6 d-flex">
        <div class="form-group">
            {!! Form::label('file', 'Foto del candidato') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
            @error('file')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <ul class="h5">
            <li class="mb-2">Las dimensiones para foto del candidato deben ser: <span
                    class="font-weight-bold text-danger">600px
                    *
                    600px.</span></li>
            <li>Recuerde que esta imagen debe de estar con la extensión
                <strong class="font-weight-bold text-danger">PNG</strong>
            </li>
        </ul>
    </div>
</div>
