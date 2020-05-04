@extends('layouts.app')
@section('contenido')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                           <div><strong>Editar medico:</strong>
                            <label> {{ $medico-> idUsuario}}</label></div>
                            <div class="d-flex justify-content-end">
                                <a href="{{route('medicos.index')}}"><button class="btn btn-warning"><i class="fa fa-arrow-left"></i></button></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">


                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form action="{{route('medicos.update', $medico->id)}} " method="post">
                            @csrf
                            @method('PUT')

                            <label>Especialidad:</label>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <select name="idEspecialidad" class="form-control">
                                        <label>Especialidad: </label>
                                        <option value="">Selecciona la especialidad</option>
                                        @foreach ($especialidades as $especialidad)
                                        <option value="{{$especialidad['id']}}">{{$especialidad['nombre']}}
                                            @endforeach</option>
                                    </select>
                                </div>
                            </div>

                            <label>Hospital: </label>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <select name="idHospital" class="form-control">
                                        <option value="">Selecciona el hospital</option>
                                        @foreach ($hospitales as $hospital)
                                        <option value="{{$hospital['id']}}">{{$hospital['nombre']}}
                                            @endforeach</option>
                                    </select>
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
                                    <input type="text" class="form-control" name="direccion"
                                        placeholder="carrera # calle # barrio A">
                                </div>
                            </div>

                            <div class="form-row">
                                <div style="margin-left: 5px">
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
