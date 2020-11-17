@extends('layouts.principal')
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Crear modulo</h1>
        <a href="{{url('modulo')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Volver</a>
    </div>
    <form action="{{ url('/modulo')}}" method="post">
        {{ csrf_field() }}

        <label for="name">{{'Nombre del modulo'}}</label>
        <input type="text" name="name" id="name" value="">
        <br />

        <label for="name">{{'id'}}</label>
        <input type="text" name="name" id="name" value="">
        <br />

        <input type="submit" value="Agregar" class="btn btn-primary">

    </form>
    @stop