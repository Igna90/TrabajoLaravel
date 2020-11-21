@extends('layouts.principal')
@section('title')
Crear resultado por aprendizaje
@stop
@section('page-header')
<h1 class="h3 mb-0 text-gray-800">Crear RRA</h1>
@endsection
@section('content')
<div class="container-fluid">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Formulario de modulo</h3>
            </div>
            <div class="box-body">
                @include('partials.errors')
                <form action="{{ url('resultados') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <label for="number">{{'Número'}}</label>
                    <input type="number" name="number" id="number" value="" />
                    <br />
                    <br />
                    <label for="description">{{'Descripción'}}</label>
                    <textarea name="description" id="description" style="resize: none; display:inline-block; vertical-align:middle" rows="3" cols="40"></textarea>
                    <br />
                    <br />
                    <label for="number">{{'Modulo'}}</label>
                    <select name="module_id" id="module_id">
                        @foreach($modulos as $modulo)
                        <option value="{{$modulo['id']}}">{{$modulo['name']}}</option>
                        @endforeach
                    </select>
                    <br />
                    <br />
            </div>
            <div class="box-footer">
                <input type="submit" value="Crear" class="btn btn-info">
                <a href="{{url('resultados')}}" class="btn btn-primary"> Volver</a>
                </form>
            </div>
        </div>
    </div>
</div>
@stop