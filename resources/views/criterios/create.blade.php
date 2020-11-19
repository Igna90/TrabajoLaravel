@extends('layouts.principal')
@section('title')
<title>Crear CCE</title>
@stop
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Crear CCE</h1>
        <a href="{{url('criterios')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Volver</a>
    </div>
    <form action="{{ url('criterios')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <label for="number">{{'Rra'}}</label>
        <input type="text" name="ra_id" id="ra_id"/>
        <br>
        <label for="number">{{'Tarea'}}</label>
        <input type="text" name="task_id" id="task_id"/>
        <br>
        <label for="number">{{'Word'}}</label>
        <input type="text" name="word" id="word"/>
        <br>
        <label for="description">{{'Descripción'}}</label>
        <textarea name="description" id="description" style="resize: none; display:inline-block; vertical-align:middle" rows="3" cols="40"></textarea>
        <br>
        <label for="number">{{'Mask'}}</label>
        <input type="text" name="mark" id="mark"/>
        <br>
        <input type="submit" value="Agregar" class="btn btn-primary">
    </form>
</div>
@stop