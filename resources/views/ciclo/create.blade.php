@extends('layouts.principal')
@section('title')
<title>Ciclos</title>
@stop
@section('page-header')
@endsection
@section('content')
<div class="container-fluid">
    <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3>Crear ciclo</h3>
            </div>
    <form action="{{ url('ciclo')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="name">{{'Nombre del ciclo'}}</label>
        <input type="text" name="name" id="name">
        <br />

        <label for="grade">{{'Grado:'}}</label>
        <input type="radio" name="grade" value="1º"> 1º Curso
        <input type="radio" name="grade" value="2º"> 2º Curso
        <br />

        <label for="date">{{'Año'}}</label>
        <input type="date" name="year" id="year">
        <br />
        <br />
        <input type="submit" value="Crear" class="btn btn-info">
        <a href="{{url('ciclo')}}" class="btn btn-primary"> Volver</a>
    </form>
</div>
@stop