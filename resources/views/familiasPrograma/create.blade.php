@extends('app')
@if (!Auth::guest())
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Registro de familias nuevas</div>
                    <div class="panel-body">
                        @include('familiasPrograma.partials.messages')
                        {!! Form::open(['route' => 'familiaprograma.familia.store', 'method' => 'POST']) !!}
                        @include('familiasPrograma.partials.fields')
                        {!! Form::submit('Registrar',['class' => 'btn btn-info']) !!}
                        {!! link_to_route('familiaprograma.familia.index', 'Cancelar','',['class' => 'btn btn-default']) !!}
                        {!! form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@else
    <p class="alert alert-danger">Ed. no esta autorizado para usar esta función</p>
@endif