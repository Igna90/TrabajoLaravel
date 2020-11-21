@extends('layouts.principal')
@section('title')
Módulo {{$modulo->id}}
@stop
@section('page-header')
<h1 class="h3 mb-0 text-gray-800">Editar Módulo</h1>
@endsection
@section('content')
<div class="container-fluid">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Formulario de Módulo</h3>
            </div>
            <div class="box-body">
                <form action="{{ url('/modulos/' .$modulo->id)}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{method_field('PATCH')}}
                    <label for="text">{{'Nombre del módulo'}}</label>
                    <input type="text" name="name" id="name" value="{{$modulo->name}}" />
                    <br>
                    <label for="text">{{'Ciclo '}}</label>
                    <select name="cycle_id" id="cycle_id">
                        <option value="{{ $cicloedit['id'] }}">{{ $cicloedit ['name'] }}</option>
                        @foreach($ciclos as $ciclo)
                        <option value="{{ $ciclo['id'] }}">{{ $ciclo ['name'] }}</option>
                        @endforeach
                    </select>
            </div>
            <div class="box-footer">
                <input type="submit" value="Editar" class="btn btn-info">
                <a href="{{url('modulos')}}" class="btn btn-primary"> Volver</a>
                </form>
            </div>
        </div>
    </div>
</div>
@stop