
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Correo</th>
                <th>Foto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $empleados as $empleado )


            <tr class="">
                <td>{{$empleado->id}}</td>
                <td>{{$empleado->Nombre}}</td>
                <td>{{$empleado->ApellidoPaterno}}</td>
                <td>{{$empleado->ApellidoMaterno}}</td>
                <td>{{$empleado->Correo}}</td>
                <td>{{$empleado->Foto}}</td>
                <td><a href="{{url('/empleado/'.$empleado->id.'/edit')}}">editar</a> |
                    <form method="POST" action="{{ url('/empleado/'.$empleado->id ) }}">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" onclick="return confirm('quieres borrar?')" value="Eliminar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

