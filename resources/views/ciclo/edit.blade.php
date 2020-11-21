@extends('layouts.principal')
@section('title')
<title>Ciclos</title>
@stop
@section('content')
<div class="container-fluid">
    <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3>Editar ciclo</h3>
            </div>
            <div class="box-body">
                @include('partials.errors')
                <form action="{{ url('/ciclo/' .$ciclo->id)}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{method_field('PATCH')}}

                    <label for="name">{{'Nombre del ciclo'}}</label>
                    <input type="text" name="name" id="name" value="{{$ciclo-> name}}">
                    <br />

                    <label for="grade">{{'Grado:'}}</label>
                    <input type="radio" name="grade" value="1º"> 1º Curso
                    <input type="radio" name="grade" value="2º"> 2º Curso
                    <br />

                    <label for="date">{{'Año'}}</label>
                    <input type="date" name="year" id="year" value="{{$ciclo-> year}}">
                    <br />
                    <br />
                    <input type="submit" value="Editar" class="btn btn-info">
                    <a href="{{url('empresa')}}" class="btn btn-primary"> Volver</a>
                </form>
            </div>
        </div>
    </div>
</div>
@stop