@extends('layouts.app')

@section('contenido')
<div class="container">
    @if($message = Session::get('exito'))
    <div class="alert alert-danger">
        <p>{{$message}}</p>
    </div>
@endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Usuarios</div>

                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>E-mail</th>
                                <th>Roles</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $usuario)
                            <tr>
                                <td>{{$usuario->name}}</td>
                                <td>{{$usuario->email}}</td>
                                <td>
                                    {{implode(', ',$usuario->roles()->get()->pluck('nombre')->toArray())}}
                                </td>
                                <td>
                                    <a href="{{route('users.edit', $usuario->id)}}"><button
                                            class="btn btn-warning float-left" type="button">Editar</button></a>
                                </td>
                                <td>
                                    <form action="{{route('users.destroy', $usuario)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button style="margin-left:4px" type="submit"
                                            class="btn btn-danger">Eliminar</button>
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
@endsection
