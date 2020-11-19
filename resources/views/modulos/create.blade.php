@extends('layouts.principal')
@section('title')
Crear modulo
@stop
@section('page-header')
<h1 class="h3 mb-0 text-gray-800">Crear modulo</h1>
@endsection
@section('content')
<div class="container-fluid">
    <form action="{{ url('modulos')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
        <label for="name">{{'name'}}</label>
        <input type="text" name="name" id="name"/>
        <br>
        <label for="cycle_id">Elige un ciclo para el alumno</label>
        <select name="cycle_id" id="cycle_id">
            <option value="">--Escoja el ciclo--</option>
            @foreach($ciclos as $ciclo)
            <option value="{{ $ciclo['id'] }}">{{ $ciclo ['name'] }}</option>
            @endforeach
        </select>
        <br>
        <br>
        <input type="submit" value="Agregar" class="btn btn-info">
        <a href="{{url('modulos')}}" class="btn btn-primary"> Volver</a>
    </form>
</div>
@stop