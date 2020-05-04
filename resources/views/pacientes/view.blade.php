@extends('layouts.app')

@section('contenido')


<div class="container">
    <div class="row">

        <div class="col-md-9">
            <div class="card">

                <div class="card-header">
                    <div class="d-flex justify-content-between">
                       <div><strong>Paciente </strong></div>
                        <div class="d-flex justify-content-end">
                            <a href="{{route('pacientes.index')}}"><button class="btn btn-warning"><i class="fa fa-arrow-left"></i></button></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                            <strong>Nombre: </strong>
                            <label>{{$paciente->idUsuario}}</label>
                            <br>
                            <strong>Fecha de nacimiento: </strong>
                            <label>{{$paciente->FechaDeNacimiento}}</label>
                            <br>
                            <strong>Dirección: </strong>
                            <label>{{$paciente->Dirección}}</label>
                            <br>
                            <strong>Teléfono: </strong>
                            <label>{{$paciente->telefono}}</label>
                            <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
