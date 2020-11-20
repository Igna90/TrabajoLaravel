@extends('layouts.principal')
@section('title')
Modulos {{$modulo->id}}
@stop
@section('page-header')
<h1 class="h3 mb-0 text-gray-800">Editar Modulo</h1>
@endsection
@section('content')
<div class="container-fluid">
    <form action="{{ url('/modulos/' .$modulo->id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{method_field('PATCH')}}
    <label for="text">{{'name'}}</label>
        <input type="text" name="name" id="name" value="{{$modulo->name}}"/>
        <br>
        <label for="text">{{'Ciclo: '}}</label>
        <select name="cycle_id" id="cycle_id">
            <option value="{{ $cicloedit['id'] }}">{{ $cicloedit ['name'] }}</option>
            @foreach($ciclos as $ciclo)
            <option value="{{ $ciclo['id'] }}">{{ $ciclo ['name'] }}</option>
            @endforeach
        </select>
        <br>
        <br>
        <input type="submit" value="Editar" class="btn btn-info">
        <a href="{{url('modulos')}}" class="btn btn-primary"> Volver</a>
    </form>
</div>
@stop