@extends('layouts.app')

@section('contenido')


<div class="container">
    <div class="row">

        <div class="col-md-9">
            <div class="card">

                <div class="card-header">
                    <div class="d-flex justify-content-between">
                       <div><strong>Datos del hospital:</strong>
                        <label> {{ $hospital-> nombre}}</label></div>
                        <div class="d-flex justify-content-end">
                            <a href="{{route('hospital.index')}}"><button class="btn btn-warning"><i class="fa fa-arrow-left"></i></button></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                            <strong>Nombre: </strong>
                            <label>{{$hospital->nombre}}</label>
                            <br>
                            <strong>Dirección: </strong>
                            <label>{{$hospital->direccion}}</label>
                            <br>
                            <strong>Teléfono: </strong>
                            <label>{{$hospital->telefono}}</label>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
