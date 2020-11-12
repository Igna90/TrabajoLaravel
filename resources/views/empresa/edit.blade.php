@extends('layouts.principal')
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Editar empresa</h1>
        <a href="{{url('empresa')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Volver</a>
    </div>
    <form action="{{ url('/empresa/' .$empresa->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <label for="name">{{'Nombre de la empresa'}}</label>
        <input type="text" name="name" id="name" value="{{$empresa-> name}}">
        <br />
        <br />
        <label for="email">{{'Email de la empresa'}}</label>
        <input type="text" name="email" id="email" value="{{$empresa-> email}}">
        <br />
        <br />
        <input type="submit" value="Editar">



    </form>
    </div>
    @stop