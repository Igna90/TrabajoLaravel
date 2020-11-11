@extends('layouts.principal')
@section('content')
<form action="{{ url('tareas')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
    <label for="number">{{'Número'}}</label>
    <input type="text" name="number" id="number"/>
    <br>
    <label for="description">{{'Descripción'}}</label>
    <textarea name="description" id="description" style="resize: none; display:inline-block; vertical-align:middle" rows="3" cols="40"></textarea>
    <br>
    <input type="submit" value="Agregar">
</form>
@stop