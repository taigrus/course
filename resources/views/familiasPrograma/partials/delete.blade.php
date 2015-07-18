{!! Form::open(['route' => ['familiaprograma.familia.destroy', $familiaPrograma->id], 'method' => 'DELETE']) !!}

{!! Form::submit('Eliminar familia integra',['onclick' => 'return confirm("¿Esta seguro de eliminar el registro de la familia con folio: ' . $familiaPrograma->folio .'")','class' => 'btn btn-danger']) !!}
{!! form::close() !!}