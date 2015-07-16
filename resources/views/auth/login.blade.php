@extends('app')
@section('content')
    <div class="container">

        @include('partials.messages')
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Autenticación</div>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'auth/login', 'class' => 'form']) !!}
                        <div class="form-group">
                            <label>Email</label>
                            {!! Form::email('email', '', ['class'=> 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label>Contraseña</label>
                            {!! Form::password('password', ['class'=> 'form-control']) !!}
                        </div>
                        <div class="checkbox">
                            <label><input name="remember" type="checkbox"> Recuérdame</label>
                        </div>
                        <div class="btn-group">
                            {!! Form::submit('Validar',['class' => 'btn btn-primary']) !!}
                            {!! Form::reset('Limpiar',['class' => 'btn btn-default']) !!}
                            {!! link_to_route('home', 'Cancelar','',['class' => 'btn btn-default']) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection