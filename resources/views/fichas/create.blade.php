@extends('layouts.principal')
@section('title')
Crear ficha
@stop
@section('page-header')
<h1 class="h3 mb-0 text-gray-800">Crear ficha</h1>
@endsection
@section('content')
<div class="container-fluid">
    <form action="{{ url('fichas')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
        <label for="date">{{'Fecha'}}</label>
        <input type="date" name="date" id="date"/>
        <br>
        <label for="description">{{'Descripción'}}</label>
        <textarea name="description" id="description" style="resize: none; display:inline-block; vertical-align:middle" rows="3" cols="40"></textarea>
        <br>
        <br>
        <input type="submit" value="Agregar" class="btn btn-info">
        <a href="{{url('fichas')}}" class="btn btn-primary"> Volver</a>
    </form>
</div>
@stop