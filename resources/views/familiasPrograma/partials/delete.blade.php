{!! Form::open(['route' => ['admin.users.destroy', $user->id], 'method' => 'DELETE']) !!}

{!! Form::submit('Eliminar usuario',['onclick' => 'return confirm("¿Esta seguro de eliminar este registro?")','class' => 'btn btn-danger']) !!}
{!! form::close() !!}