<table class="table table-striped">
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>E-mail</th>
        <th>Rol</th>
        <th>Acciones</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->full_name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->type}}</td>
            <td>
                {!! link_to_route('admin.users.edit','Editar', $user->id,['class' => 'btn btn-warning btn-xs']) !!}
                {!! link_to_route('admin.users.edit','Eliminar', $user->id,['class' => 'btn btn-danger btn-xs']) !!}
            </td>
        </tr>
    @endforeach
</table>