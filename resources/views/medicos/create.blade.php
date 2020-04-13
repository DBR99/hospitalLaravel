<form action="{{url('/medicos')}}" method="POST">
    {{csrf_field()}}
    <label for="Nombre">{{'Nombre'}}</label>
    <input type="text" name="Nombre" id="Nombre" value="">
    <br>

    <label for="Apellido">{{'Apellido'}}</label>
    <input type="text" name="Apellido" id="Apellido" value="">
    <br>

    <label for="FechaDeNacimiento">{{'Fecha de nacimiento'}}</label>
    <input type="text" name="FechaDeNacimiento" id="FechaDeNacimiento" value="">
    <br>

    <label for="Especialidad">{{'Especialidad'}}</label>
    <input type="text" name="Especialidad" id="Especialidad" value="">
    <br>

    <label for="Dirección">{{'Dirección'}}</label>
    <input type="text" name="Dirección" id="Direccion" value="">
    <br>

    <label for="correo">{{'correo'}}</label>
    <input type="email" name="correo" id="correo" value="">
    <br>

    <input type="submit" value="Agregar">

    <a href="{{url('medicos')}}">Regresar</a>

</form>