@extends('layouts.principal')
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Crear ciclo</h1>
        <a href="{{url('ciclo')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Volver</a>
    </div>
    <form action="{{ url('/ciclo')}}" method="post">
        {{ csrf_field() }}

        <label for="name">{{'Nombre del ciclo'}}</label>
        <input type="text" name="name" id="name" value="">
        <br />

        <label for="grade">{{'Grado:'}}</label>
        <input type="radio" name="grade" value="1"> 1º Curso
        <input type="radio" name="grade" value="2"> 2º Curso
        <br />

        <label for="date">{{'Año'}}</label>
        <input type="number" name="year" id="year" max="2021"  min="1910"/>
        <br>

        <input type="submit" value="Agregar" class="btn btn-primary">

    </form>
    @stop