@extends('app')
@if (!Auth::guest())
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Familia: <strong>{{$familiaPrograma->folio}}</strong></div>
                    <div class="panel-body">
                        @include('familiasPrograma.partials.messages')
                        {!! Form::model($familiaPrograma, ['route' => ['familiaprograma.familia.update', $familiaPrograma->id], 'method' => 'PUT']) !!}
                        @include('familiasPrograma.partials.fields')
                        {!! Form::submit('Actualizar familia',['class' => 'btn btn-info']) !!}
                        {!! link_to_route('familiaprograma.familia.index', 'Cancelar','',['class' => 'btn btn-default']) !!}
                        {!! form::close() !!}
                    </div>
                </div>
                @include('familiasPrograma.partials.delete')
            </div>
        </div>
    </div>
    </div>
@endsection
@else
    <p class="alert alert-danger">Ed. no esta autorizado para usar esta función</p>
@endif