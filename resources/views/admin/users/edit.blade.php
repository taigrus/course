@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar usuario: <strong>{{$user->first_name}} {{$user->last_name}}</strong></div>
                    <div class="panel-body">
                        @include('admin.users.partials.messages')
                        {!! Form::model($user, ['route' => ['admin.users.update', $user->id], 'method' => 'PUT']) !!}
                        @include('admin.users.partials.fields')
                        {!! Form::submit('Actualizar usuario',['class' => 'btn btn-info']) !!}
                        {!! link_to_route('admin.users.index', 'Cancelar','',['class' => 'btn btn-default']) !!}
                        {!! form::close() !!}
                    </div>
                </div>
                @include('admin.users.partials.delete')
            </div>
        </div>
    </div>
    </div>
@endsection