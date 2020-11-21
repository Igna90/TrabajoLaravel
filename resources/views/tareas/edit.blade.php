@extends('layouts.principal')
@section('title')
Tarea {{$tarea->id}}
@stop
@section('page-header')
<h1 class="h3 mb-0 text-gray-800">Editar tarea</h1>
@endsection
@section('content')
<div class="container-fluid">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Formulario de tarea</h3>
            </div>
            <div class="box-body">
            @include('partials.errors')
                <form action="{{ url('/tareas/' .$tarea->id)}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{method_field('PATCH')}}
                    <label for="number">{{'Número'}}</label>
                    <input type="text" name="number" id="number" value="{{$tarea->number}}" />
                    <br>
                    <label for="description">{{'Descripción'}}</label>
                    <textarea name="description" id="description" style="resize: none; display:inline-block; vertical-align:middle" rows="3" cols="40">{{$tarea->description}}</textarea>
                    <br>
            </div>
            <div class="box-footer">
                <input type="submit" value="Editar" class="btn btn-info">
                <a href="{{url('tareas')}}" class="btn btn-primary"> Volver</a>
                </form>
            </div>
        </div>
    </div>
</div>
@stop