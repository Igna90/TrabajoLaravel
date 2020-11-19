@extends('layouts.principal')
@section('title')
<title>Crear RRA</title>
@stop
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Crear RRA</h1>
        <a href="{{url('resultados')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Volver</a>
    </div>
    <form action="{{ url('resultados')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
        <label for="number">{{'Número'}}</label>
        <input type="text" name="number" id="number"/>
        <br>
        <label for="description">{{'Descripción'}}</label>
        <textarea name="description" id="description" style="resize: none; display:inline-block; vertical-align:middle" rows="3" cols="40"></textarea>
        <br>
        <label for="number">{{'Modulo'}}</label>
        <input type="text" name="module_id" id="module_id"/>
        <br>
        <input type="submit" value="Agregar" class="btn btn-primary">
    </form>
</div>
@stop