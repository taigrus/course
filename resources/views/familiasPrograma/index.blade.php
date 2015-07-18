@extends('app')
@if (!Auth::guest())
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Listado de Familias Registradas</div>
                        @if (Session::has('message'))
                            <p class="alert alert-success">{{Session::get('message')}}</p>
                        @endif
                        <div class="panel-body">
                            <p>
                                <a href="{{ route("familiaprograma.familia.create") }}" class="btn btn-small btn-info iframe"> <span class="glyphicon glyphicon-plus-sign"></span>
                                    Nueva Familia
                                </a>
                            </p>
                            {{--<div class="text">
                                {!! Form::label('folio', 'Buscar') !!}
                                {!! Form::number('folio', null, array(
                                 'class' => 'form-control',
                                 'placeholder' => 'Ingrese en número de folio',
                                 'step' => 'any',
                                 'decimals' => '0',
                                )) !!}
                                <a class="btn btn-success" href="{{route("familiaprograma.familia.search")}}" role="button">
                                    buscar
                                </a>
                            </div>--}}
                            <p>Se tienen {{$familiasPrograma->total()}} familias en {{$familiasPrograma->lastPage()}} páginas</p>
                            @include('familiasPrograma.partials.table')
                            {{--El render pone los numeros de pagina abajo--}}
                            {!! $familiasPrograma->appends(Input::except('page'))->setPath('')->render() !!}
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
