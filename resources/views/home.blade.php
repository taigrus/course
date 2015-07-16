@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Home</div>

                    <div class="panel-body">
                        @if (Auth::guest())
                        Estas usando el sistema como invitado
                        @else
                        Estas usando el sistema como <strong>{{ Auth::user()->full_name }}</strong> y su Rol es: <strong>{{Auth::user()->type}}</strong>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection