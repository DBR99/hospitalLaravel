@extends('layouts.app')

@section('contenido')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">

                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <strong>Nuevo hospital</strong>
                            <div class="d-flex justify-content-end">
                                <a href="{{ url('/hospital') }}"><button class="btn btn-warning"><i class="fa fa-arrow-left"></i></button></a>
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

                        <form action="{{route('hospital.store')}} " method="post">
                             @csrf

                             <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Nombre:</label>
                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Dirección:</label>
                                    <input type="text" class="form-control" name="direccion" placeholder="carrera # calle # barrio A">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Teléfono:</label>
                                    <input type="number" class="form-control" name="telefono" placeholder="316 2777 677">
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

