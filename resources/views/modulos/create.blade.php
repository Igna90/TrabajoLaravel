@extends('layouts.principal')
@section('title')
Crear modulo
@stop
@section('page-header')
<h1 class="h3 mb-0 text-gray-800">Crear modulo</h1>
@endsection
@section('content')
<div class="container-fluid">
    <form action="{{ url('modulos')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
        <label for="name">{{'name'}}</label>
        <input type="text" name="name" id="name"/>
        <br>
        <label for="cycle_id">{{'cycle_id'}}</label>
        <input name="cycle_id" id="cycle_id" style="resize: none; display:inline-block; vertical-align:middle" rows="3" cols="40"></input>
        <br>
        <br>
        <input type="submit" value="Agregar" class="btn btn-info">
        <a href="{{url('modulos')}}" class="btn btn-primary"> Volver</a>
    </form>
</div>
@stop