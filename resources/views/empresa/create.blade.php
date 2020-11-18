@extends('layouts.principal')
@section('title')
<title>Empresas</title>
@stop
@section('page-header')
<h1 class="h3 mb-0 text-gray-800">Crear empresa</h1>
@endsection
@section('content')
<div class="container-fluid">
<form action="{{ url('empresa')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <label for="name">{{'Nombre de la empresa'}}</label>
    <input type="text" name="name" id="name" value="">
    <br />
    <br />
    <label for="email">{{'Email de la empresa'}}</label>
    <textarea  name="email" id="email" style="resize: none; display:inline-block; vertical-align:middle" rows="3" cols="40"></textarea>
    <br />
    <input type="submit" value="Agregar" class="btn btn-primary">

   

</div>
</form>
@stop