@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Listado de Usuarios</div>
                        @if (Session::has('message'))
                            <p class="alert alert-success">{{Session::get('message')}}</p>
                        @endif
                        <div class="panel-body">
                            <p>
                                <a class="btn btn-success" href="{{route("admin.users.create")}}" role="button">
                                    Nuevo usuario
                                </a>
                            </p>
                            <p>Se tienen {{$users->total()}} usuarios en {{$users->lastPage()}} páginas</p>
                            @include('admin.users.partials.table')
                            {!!$users->setPath('')->render()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection