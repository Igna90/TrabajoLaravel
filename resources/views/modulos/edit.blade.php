@extends('layouts.principal')
@section('title')
<title>Modulos {{$modulo->id}}</title>
@stop
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Editar modulos {{$modulo->created_at->format("W")}}</h1>
        <a href="{{url('/')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Volver</a>
    </div>
    <form action="{{ url('/modulos/' .$modulo->id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{method_field('PATCH')}}
        <label for="text">{{'name'}}</label>
        <input type="text" name="name" id="name" value="{{$modulo->name}}"/>
        <br>
        <label for="description">{{'cycle_id'}}</label>
        <textarea name="cycle_id" id="cycle_id" style="resize: none; display:inline-block; vertical-align:middle" rows="3" cols="40">{{$modulo->cycle_id}}</textarea>
        <br>
        <input type="submit" value="Editar" onclick="return confirm('¿Está seguro de querer editar?');" class="btn btn-primary">
    </form>
</div>
@stop