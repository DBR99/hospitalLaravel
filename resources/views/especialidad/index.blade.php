@extends('layouts.app')


@section('contenido')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <strong>Especialidades médicas</strong>
                            <div class="d-flex justify-content-end">
                                <a href="{{route('especialidad.create') }}" class="btn btn-success btn-sm">
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
                                        <th>Nro.</th>
                                        <th>Nombre</th>
                                        <th>ver</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($especialidades as $especialidad)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$especialidad->nombre}}</td>
                                    <td>
                                        <a href="{{route('especialidad.show', $especialidad->id)}}" class="btn btn-info">
                                            <i class="fa fa-eye light"></i></a>
                                    </td>
                                    <td>
                                       <a href="{{route('especialidad.edit', $especialidad->id)}}" class="btn btn-primary">
                                            <i class="far fa-edit"></i></a>
                                    </td>
                                    <td>
                                        <form action="{{route('especialidad.destroy', $especialidad->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
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




