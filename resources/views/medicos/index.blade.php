@extends('layouts.app')


@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <strong>Médicos</strong>
                        <div class="d-flex justify-content-end">
                            <a href="{{route('medicos.create') }}" class="btn btn-success btn-sm">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    @if($message = Session::get('exito'))
                    <div class="alert alert-success">
                        <p>{{$message}}</p>
                    </div>
                    @endif

                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Especialidad</th>
                                    <th>Hospital</th>
                                    <th>Teléfono</th>
                                    <th>Dirección</th>
                                    <th>Ver</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($medicos as $medico)
                                <tr>
                                    <td>{{$medico->idUsuario}}</td>
                                    <td>{{$medico->Especialidad->nombre}}</td>
                                    <td>{{$medico->Hospital->nombre}}</td>
                                    <td>{{$medico -> telefono}}</td>
                                    <td>{{$medico -> direccion}}</td>
                                    <td>
                                        <a href="{{route('medicos.show', $medico->id)}}" class="btn btn-info">
                                            <i class="fa fa-eye light"></i></a>
                                    </td>

                                    <td>
                                        <a href="{{route('medicos.edit', $medico->id)}}" class="btn btn-primary">
                                            <i class="far fa-edit"></i></a>
                                    </td>

                                    <td>
                                        <form action="{{route('medicos.destroy', $medico->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i
                                                    class="far fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
