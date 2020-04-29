@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/medicos/'.$medico->id)}}" method="post">
    {{csrf_field()}}
    {{method_field('PATCH')}}

    @include('medicos.form',['Modo'=>'editar'])

</form>

</div>
@endsection