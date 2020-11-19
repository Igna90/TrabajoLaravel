@extends('layouts.principal')
@section('title')
Crear Asistencia
@stop
@section('page-header')
<h1 class="h3 mb-0 text-gray-800">Crear asistencia</h1>
@endsection
@section('content')
<div class="container-fluid">
    <form action="{{ url('asistencia')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
        <label for="assistance">{{'Asistencia: '}}</label>
        <textarea name="assistance" id="assistance" style="resize: none; display:inline-block; vertical-align:middle" rows="3" cols="40"></textarea>
        <br>
        <br>
        <input type="submit" value="Agregar" class="btn btn-info">
        <a href="{{url('asistencia')}}" class="btn btn-primary"> Volver</a>
    </form>
</div>
@stop