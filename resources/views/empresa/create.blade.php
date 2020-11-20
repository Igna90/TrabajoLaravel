@extends('layouts.principal')
@section('title')
<title>Empresas</title>
@stop
@section('page-header')
@endsection
@section('content')
<div class="container-fluid">
<<<<<<< Updated upstream
<form action="{{ url('empresa')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <label for="name">{{'Nombre de la empresa'}}</label>
    <input type="text" name="name" id="name" value="">
    <br />
    <br />
    <label for="email">{{'Email de la empresa'}}</label>
    <input type="email"  name="email" id="email" style="resize: none; display:inline-block; vertical-align:middle" rows="3" cols="40"></input>
    <br />
    <input type="submit" value="Agregar" class="btn btn-primary">
=======
  <div class="col-md-8">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3>Crear empresa</h3>
      </div>
>>>>>>> Stashed changes

      <form action="{{ url('empresa')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="name">{{'Nombre de la empresa'}}</label>
        <input type="text" name="name" id="name" value="">
        <br />
        <br />
        <label for="email">{{'Email de la empresa'}}</label>
        <textarea name="email" id="email" style="resize: none; display:inline-block; vertical-align:middle" rows="3" cols="40"></textarea>
        <br />
        <input type="submit" value="Agregar" class="btn btn-primary">



    </div>
    </form>
    @stop