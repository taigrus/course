<div class="form-group">
    {!! Form::label('folio', 'Folio') !!}
    {!! Form::number('folio', null, array(
     'class' => 'form-control',
     'placeholder' => 'Ingrese en número de folio',
     'min' => '1111111111',
     'max' => '9999999999',
     'step' => 'any',
     'decimals' => '0',
    )) !!}
</div>
<div class="form-group">
    {!! Form::label('direccion', 'Direccion') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la direccion']) !!}
</div>
<div class="form-group">
    {!! Form::label('latitud', 'Latitud de la vivienda') !!}
    {!! Form::number('latitud',null,array(
     'class' => 'form-control',
     'placeholder' => 'Ingrese la latitud',
     'min' => '-99.00000000',
     'max' => '99.9999999',
     'step' => 'any',
     'decimals' => '8',
     'thousands_separator' => ',',
     'decimal_separator' => '.'
     )) !!}
</div>