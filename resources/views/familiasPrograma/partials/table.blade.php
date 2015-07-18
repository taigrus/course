<table class="table table-striped">

    <tr>
        <th>{!! SortableTrait::link_to_sorting_action('folio') !!}</th>
        <th>{!! SortableTrait::link_to_sorting_action('direccion') !!}</th>
        <th>{!! SortableTrait::link_to_sorting_action('latitud', 'Latitud') !!}</th>
        <th>{!! SortableTrait::link_to_sorting_action('longitud', 'Longitud') !!}</th>
        <th>Acciones</th>
    </tr>
    @foreach($familiasPrograma as $familiaPrograma)
        <tr>
            <td>{{$familiaPrograma->folio}}</td>
            <td>{{$familiaPrograma->direccion}}</td>
            <td>{{$familiaPrograma->latitud}}</td>
            <td>{{$familiaPrograma->longitud}}</td>
            <td>
                {!! link_to_route('familiaprograma.familia.edit','Editar', $familiaPrograma->id,['class' => 'btn btn-warning btn-xs']) !!}
                {!! link_to_route('familiaprograma.familia.edit','Eliminar', $familiaPrograma->id,['class' => 'btn btn-danger btn-xs']) !!}
            </td>
        </tr>
    @endforeach
</table>