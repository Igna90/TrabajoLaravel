@extends('layouts.principal')
@section('title')
<title>Resultados por aprendizaje</title>
@stop
@section('page-header')
<h1 class="h3 mb-0 text-gray-800">Crear RRA</h1>
@endsection
@section('content')
<div class="container-fluid">
    <form action="{{ url('resultados') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="number">{{'Número'}}</label>
        <input type="text" name="number" id="number" value=""/>
        <br />
        <br />
        <label for="description">{{'Descripción'}}</label>
        <textarea name="description" id="description" style="resize: none; display:inline-block; vertical-align:middle" rows="3" cols="40"></textarea>
        <br />
        <br />
        <label for="number">{{'Modulo'}}</label>
        <input type="text" name="module_id" id="module_id" value=""/>
        <br />
        <br />
        <input type="submit" value="Crear" class="btn btn-info">
        <a href="{{url('resultados')}}" class="btn btn-primary"> Volver</a>
    </form>
</div>
@stop