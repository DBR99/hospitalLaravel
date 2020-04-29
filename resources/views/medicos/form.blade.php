<label for="Nombre">{{'Nombre'}}</label>
    <input type="text" name="Nombre" id="Nombre" value="{{isset($medico->Nombre)?$medico->Nombre:''}}">
    <br>

    <label for="Apellido">{{'Apellido'}}</label>
    <input type="text" name="Apellido" id="Apellido"  value="{{isset($medico->Apellido)?$medico->Apellido:''}}">
    <br>

    <label for="FechaDeNacimiento">{{'Fecha de nacimiento'}}</label>
    <input type="text" name="FechaDeNacimiento" id="FechaDeNacimiento"  value="{{isset($medico->FechaDeNacimiento)?$medico->FechaDeNacimiento:''}}">
    <br>

    <label for="Especialidad">{{'Especialidad'}}</label>
    <input type="text" name="Especialidad" id="Especialidad"  value="{{isset($medico->Especialidad)?$medico->Especialidad:''}}">
    <br>

    <label for="Dirección">{{'Dirección'}}</label>
    <input type="text" name="Dirección" id="Direccion"  value="{{isset($medico->Dirección)?$medico->Dirección:''}}">
    <br>

    <label for="correo">{{'correo'}}</label>
    <input type="email" name="correo" id="correo"  value="{{isset($medico->correo)?$medico->correo:''}}">
    <br>

    <input type="submit" value="{{$Modo == 'crear' ? 'Agregar' : 'Modificar'}}">

