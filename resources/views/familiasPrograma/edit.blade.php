@extends('app')
@if (!Auth::guest())
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Esta editando la familia con folio: <strong>{{$familiaPrograma->folio}}</strong></div>
                    <div class="panel-body">
                        @include('familiasPrograma.partials.messages')
                        {!! Form::model($familiaPrograma, ['route' => ['familiaprograma.familia.update', $familiaPrograma->id], 'method' => 'PUT']) !!}
                        <div class="col-md-6">
                            @include('familiasPrograma.partials.fields')
                        </div>
                        <div class="col-md-6">
                            @include('familiasPrograma.partials.fieldsderecha')
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                            {!! Form::submit('Actualizar familia',['class' => 'btn btn-info']) !!}
                            {!! link_to_route('familiaprograma.familia.index', 'Cancelar','',['class' => 'btn btn-default']) !!}
                            </div>
                        </div>
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