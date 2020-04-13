<form action="{{url('/medicos/'.$medico->id)}}" method="post">
    {{csrf_field()}}
    {{method_field('PATCH')}}

    <label for="Nombre">{{'Nombre'}}</label>
    <input type="text" name="Nombre" id="Nombre" value="{{$medico->Nombre}}">
    <br>

    <label for="Apellido">{{'Apellido'}}</label>
    <input type="text" name="Apellido" id="Apellido" value="{{$medico->Apellido}}">
    <br>

    <label for="FechaDeNacimiento">{{'Fecha de nacimiento'}}</label>
    <input type="text" name="FechaDeNacimiento" id="FechaDeNacimiento" value="{{$medico->FechaDeNacimiento}}">
    <br>

    <label for="Especialidad">{{'Especialidad'}}</label>
    <input type="text" name="Especialidad" id="Especialidad" value="{{$medico->Especialidad}}">
    <br>

    <label for="Dirección">{{'Dirección'}}</label>
    <input type="text" name="Dirección" id="Dirección" value="{{$medico->Dirección}}">
    <br>

    <label for="correo">{{'correo'}}</label>
    <input type="email" name="correo" id="correo" value="{{$medico->correo}}">
    <br>
    <input type="submit" value="Modificar">

    <a href="{{url('medicos')}}">Regresar</a>
</form>

