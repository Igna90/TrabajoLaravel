@extends('layouts.principal')
@section('title')
<title>Crear Asistencia</title>
@stop
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Crear la asistencia de esta semana</h1>
        <a href="{{url('asistencia')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Volver</a>
    </div>
    <form action="{{ url('asistencia')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
        <label for="assistance">{{'Asistencia: '}}</label>
        <textarea name="assistance" id="assistance" style="resize: none; display:inline-block; vertical-align:middle" rows="3" cols="40"></textarea>
        <br>
        <input type="submit" value="Agregar" class="btn btn-primary">
    </form>
</div>
@stop