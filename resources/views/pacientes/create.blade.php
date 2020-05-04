@extends('layouts.app')

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-9">
            <div class="card">

                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <strong>Nuevo paciente</strong>
                        <div class="d-flex justify-content-end">
                            <a href="{{ url('/pacientes') }}"><button class="btn btn-warning"><i
                                        class="fa fa-arrow-left"></i></button></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div>
                        @if($message = Session::get('mensaje'))
                        <div class="alert alert-success">
                            <p>{{$message}}</p>
                        </div>
                        @endif

                    </div>

                    <form action="{{route('pacientes.store')}} " method="post">
                        @csrf


                        <label>Usuario:</label>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <select name="idUsuario" class="form-control">
                                    <label>Usuario: </label>
                                    <option value="">Selecciona el usuario</option>
                                    @foreach ($usuarios as $usuario)
                                    <option value="{{$usuario['id']}}">{{$usuario['name']}}
                                        @endforeach</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Fecha de nacimiento:</label>
                                <input type="text" class="form-control" name="FechaDeNacimiento" placeholder="dd/mm/yy">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Teléfono:</label>
                                <input type="number" class="form-control" name="telefono" placeholder="316 2777 677">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Dirección:</label>
                                <input type="text" class="form-control" name="Dirección"
                                    placeholder="carrera # calle # barrio A">
                            </div>
                        </div>


                        <div class="form-row">
                            <div style="margin-left: 5px">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Crear</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
