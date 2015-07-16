@extends('app')

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
                                {{--<a class="btn btn-success" href="{{route("familias.create")}}" role="button">
                                    Nueva Familia
                                </a>--}}
                            </p>
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