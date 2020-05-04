@extends('layouts.app')

@section('contenido')


<div class="container">
    <div class="row">

        <div class="col-md-9">
            <div class="card">

                <div class="card-header">
                    <div class="d-flex justify-content-between">
                       <div><strong>Médico </strong></div>
                        <div class="d-flex justify-content-end">
                            <a href="{{route('medicos.index')}}"><button class="btn btn-warning"><i class="fa fa-arrow-left"></i></button></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                            <strong>Nombre: </strong>
                            <label>{{$medico->idUsuario}}</label>
                            <br>
                            <strong>Hospital: </strong>
                            <label>{{$medico->Hospital->nombre}}</label>
                            <br>
                            <strong>Especialidad: </strong>
                            <label>{{$medico->Especialidad->nombre}}</label>
                            <br>
                            <strong>Dirección: </strong>
                            <label>{{$medico->direccion}}</label>
                            <br>
                            <strong>Teléfono: </strong>
                            <label>{{$medico->telefono}}</label>
                            <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
