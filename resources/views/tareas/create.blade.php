@extends('layouts.principal')
@section('title')
Crear tarea
@stop
@section('page-header')
<h1 class="h3 mb-0 text-gray-800">Crear tarea</h1>
@endsection
@section('content')
<div class="container-fluid">
    <form action="{{ url('tareas')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
        <label for="date">{{'Número'}}</label>
        <input type="text" name="date" id="date"/>
        <br>
        <label for="description">{{'Descripción'}}</label>
        <textarea name="description" id="description" style="resize: none; display:inline-block; vertical-align:middle" rows="3" cols="40"></textarea>
        <br>
        <br>
        <input type="submit" value="Agregar" class="btn btn-info">
        <a href="{{url('tareas')}}" class="btn btn-primary"> Volver</a>
    </form>
</div>
@stop