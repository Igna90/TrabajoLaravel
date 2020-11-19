@extends('layouts.principal')
@section('title')
Crear ficha
@stop
@section('page-header')
<h1 class="h3 mb-0 text-gray-800">Crear ficha</h1>
@endsection
@section('content')
<div class="container-fluid">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Formulario de ficha</h3>
            </div>
            <div class="box-body">
                <form action="{{ url('fichas')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <label for="date">{{'Fecha'}}</label>
                    <input type="date" name="date" id="date" required />
                    <br>
                    <label for="description">{{'Descripción'}}</label>
                    <textarea name="description" id="description" style="resize: none; display:inline-block; vertical-align:middle" rows="3" cols="40" required></textarea>
                    <br>
                    <br>
            </div>
            <div class="box-footer">
                <input type="submit" value="Agregar" class="btn btn-info">
                <a href="{{url('fichas')}}" class="btn btn-primary"> Volver</a>
                </form>
            </div>
        </div>
    </div>
</div>
@stop