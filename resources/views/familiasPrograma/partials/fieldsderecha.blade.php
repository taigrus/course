<div class="form-group">
{!! Form::label('longitud', 'longitud de la vivienda') !!}
{!! Form::number('longitud',null,array(
 'class' => 'form-control',
 'placeholder' => 'Ingrese la longitud',
 'min' => '-99.00000000',
 'max' => '99.9999999',
 'step' => 'any',
 'decimals' => '8',
 'thousands_separator' => ',',
 'decimal_separator' => '.'
 )) !!}
</div>
<div class="form-group">
    {!! Form::label('altura', 'altura de la vivienda') !!}
    {!! Form::number('altura',null,array(
     'class' => 'form-control',
     'placeholder' => 'Ingrese la altura',
     'min' => '3000',
     'max' => '4500',
     'step' => 'any',
     'decimals' => '0',
     'thousands_separator' => ',',
     'decimal_separator' => '.'
     )) !!}
</div>