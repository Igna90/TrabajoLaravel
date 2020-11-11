@extends('layouts.principal')
@section('content')
<form action="{{ url('tareas' .$tarea->id)}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{method_field('PATCH')}}
    <label for="number">{{'Número'}}</label>
    <input type="text" name="number" id="number" value="{{$tarea->number}}"/>
    <br>
    <label for="description">{{'Descripción'}}</label>
    <textarea name="description" id="description" style="resize: none; display:inline-block; vertical-align:middle" rows="3" cols="40">{{$tarea->description}}</textarea>
    <br>
    <input type="submit" value="Editar">
</form>
@stop