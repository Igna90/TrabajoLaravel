@extends('layouts.principal')
@section('title')
Ficha {{$asistencia->id}}
@stop
@section('page-header')
<h1 class="h3 mb-0 text-gray-800">Editar asistencia</h1>
@endsection
@section('content')
<div class="container-fluid">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Formulario de Asistencia</h3>
            </div>
            <div class="box-body">
                <form action="{{ url('/asistencia/' .$asistencia->id)}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{method_field('PATCH')}}
                    <label for="date">{{'Fecha'}}</label>
                    <input type="date" name="date" id="date" value="{{$asistencia->date}}" />
                    <br>
                    <label for="assistance">{{'Asistencia'}}</label>
                    <textarea name="assistance" id="assistance" style="resize: none; display:inline-block; vertical-align:middle" rows="3" cols="40">{{$asistencia->assistance}}</textarea>
                    <br>
                    <br>
            </div>
            <div class="box-footer">
                <input type="submit" value="Editar" onclick="return confirm('¿Está seguro de querer editar?');" class="btn btn-info">
                <a href="{{url('asistencia')}}" class="btn btn-primary"> Volver</a>
                </form>
            </div>
        </div>
    </div>
</div>
@stop