@extends('layouts.principal')
@section('title')
<title>Empresas</title>
@stop
@section('page-header')
<h1 class="h3 mb-0 text-gray-800">Editar empresa</h1>
@endsection
@section('content')
<div class="container-fluid">
    <form action="{{ url('/empresa/' .$empresa->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{method_field('PATCH')}}
        <label for="name">{{'Nombre de la empresa'}}</label>
        <input type="text" name="name" id="name" value="{{$empresa-> name}}">
        <br />
        <br />
        <label for="email">{{'Email de la empresa'}}</label>
        <input type="text" name="email" id="email" value="{{$empresa-> email}}">
        <br />
        <br />
        <input type="submit" value="Editar" class="btn btn-info">
        <a href="{{url('empresa')}}" class="btn btn-primary"> Volver</a>

    </form>
</div>
@stop