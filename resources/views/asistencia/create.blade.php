@extends('layouts.principal')
@section('title')
Crear Asistencia
@stop
@section('page-header')
<h1 class="h3 mb-0 text-gray-800">Crear asistencia</h1>
@endsection
@section('content')
<div class="container-fluid">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Asistencia dia 1</h3>
            </div>
            <div class="box-body">
                <form action="{{ url('asistencia')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <label for="date1">{{'Fecha'}}</label>
                    <input type="date" name="date1" id="date1" required />
                    <br>
                    <label for="assistance1">{{'Descripción'}}</label>
                    <textarea name="assistance1" id="assistance1" style="resize: none; display:inline-block; vertical-align:middle" rows="3" cols="40" required></textarea>
                    <br>
                    <br>
            </div>
        </div>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Asistencia dia 2</h3>
            </div>
            <div class="box-body">
                <form action="{{ url('asistencia')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <label for="date2">{{'Fecha'}}</label>
                    <input type="date" name="date2" id="date2" required />
                    <br>
                    <label for="assistance2">{{'Descripción'}}</label>
                    <textarea name="assistance2" id="assistance2" style="resize: none; display:inline-block; vertical-align:middle" rows="3" cols="40" required></textarea>
                    <br>
                    <br>
            </div>
        </div>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Asistencia dia 3</h3>
            </div>
            <div class="box-body">
                <form action="{{ url('asistencia')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <label for="date3">{{'Fecha'}}</label>
                    <input type="date" name="date3" id="date3" required />
                    <br>
                    <label for="assistance3">{{'Descripción'}}</label>
                    <textarea name="assistance3" id="assistance3" style="resize: none; display:inline-block; vertical-align:middle" rows="3" cols="40" required></textarea>
                    <br>
                    <br>
            </div>
        </div>
        <input type="submit" value="Agregar" class="btn btn-info">
        <a href="{{url('asistencia')}}" class="btn btn-primary"> Volver</a>
        </form>
    </div>
</div>
@stop