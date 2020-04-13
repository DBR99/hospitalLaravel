<a href="{{url('medicos/create')}}">Agregar médico</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha de nacimiento</th>
            <th>Especialidad</th>
            <th>Dirección</th>
            <th>Correo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($medicos as $medico)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$medico->Nombre}}</td>
            <td>{{$medico->Apellido}}</td>
            <td>{{$medico->FechaDeNacimiento}}</td>
            <td>{{$medico->Especialidad}}</td>
            <td>{{$medico->Dirección}}</td>
            <td>{{$medico->correo}}</td>
            <td>
                <a href="{{ url('/medicos/'.$medico->id.'/edit')}}">
                    Editar
                </a>         

                |
                <form method="post" action="{{url('/medicos/'.$medico->id)}}" >
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button type="submit" onclick="return confirm('¿Deseas Borrar el registro?');">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{url('/')}}">Regresar</a>

