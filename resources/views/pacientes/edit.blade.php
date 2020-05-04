@extends('layouts.app')
@section('contenido')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                           <div><strong>Editar paciente:</strong>
                            <label> {{ $paciente-> idUsuario}}</label></div>
                            <div class="d-flex justify-content-end">
                                <a href="{{route('pacientes.index')}}"><button class="btn btn-warning"><i class="fa fa-arrow-left"></i></button></a>
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

                        <form action="{{route('pacientes.update', $paciente->id)}} " method="post">
                            @csrf
                            @method('PUT')


                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Fecha de nacimiento:</label>
                                    <input type="text" class="form-control" name="FechaDeNacimiento"  value="{{$paciente->FechaDeNacimiento}}">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Teléfono:</label>
                                    <input type="number" class="form-control" name="telefono"  value="{{$paciente->telefono}}">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Dirección:</label>
                                    <input type="text" class="form-control" name="Dirección"
                                         value="{{$paciente->Dirección}}">
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
