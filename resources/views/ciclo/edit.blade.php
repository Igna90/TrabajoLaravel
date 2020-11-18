@extends('layouts.principal')
@section('title')
<title>Ciclos</title>
@stop
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Editar ciclo</h1>
        <a href="{{url('ciclo')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Volver</a>
    </div>
    <form action="{{ url('/ciclo/' .$ciclo->id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{method_field('PATCH')}}

    <label for="name">{{'Nombre del ciclo'}}</label>
        <input type="text" name="name" id="name" value="">
        <br />

        <label for="grade">{{'Grado:'}}</label>
        <input type="radio" name="grade" value="1"> 1º Curso
        <input type="radio" name="grade" value="2"> 2º Curso
        <br />

        <label for="date">{{'Año'}}</label>
        <input type="date" name="year" id="year" />
        <br>


        <input type="submit" value="Editar" onclick="return confirm('¿Está seguro de querer editar?');" class="btn btn-primary">
    </form>
</div>
@stop