@extends('layouts.principal')
@section('title')
<title>Tarea {{$tarea->id}}</title>
@stop
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Editar tarea</h1>
        <a href="{{url('tareas')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Volver</a>
    </div>
    <form action="{{ url('/tareas/' .$tarea->id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{method_field('PATCH')}}
        <label for="number">{{'Número'}}</label>
        <input type="text" name="number" id="number" value="{{$tarea->number}}"/>
        <br>
        <label for="description">{{'Descripción'}}</label>
        <textarea name="description" id="description" style="resize: none; display:inline-block; vertical-align:middle" rows="3" cols="40">{{$tarea->description}}</textarea>
        <br>
        <input type="submit" value="Editar" onclick="return confirm('¿Está seguro de querer editar?');" class="btn btn-primary">
    </form>
</div>
@stop