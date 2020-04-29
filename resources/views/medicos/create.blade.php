@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/medicos')}}" method="POST">
    {{csrf_field()}}
@include('medicos.form',['Modo'=>'crear'])

</form>
</div>
@endsection