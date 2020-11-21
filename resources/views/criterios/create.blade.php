@extends('layouts.principal')
@section('title')
@stop
@section('page-header')
@endsection
@section('content')
<div class="container-fluid">
    <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h2>{{ __("Crear criterios") }}</h2>
                <hr />
            </div>
            @include('partials.errors')
            <div class="box-body">
                <form action="{{ url('criterios')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
    <label for="number">{{'Rra'}}</label>
        <input type="text" name="ra_id" id="ra_id"/>
        <br>
        <label for="number">{{'Tarea'}}</label>
        <input type="text" name="task_id" id="task_id"/>
        <br>
        <label for="number">{{'Word'}}</label>
        <input type="text" name="word" id="word"/>
        <br>
        <label for="description">{{'Descripción'}}</label>
        <textarea name="description" id="description" style="resize: none; display:inline-block; vertical-align:middle" rows="3" cols="40"></textarea>
        <br>
        <label for="number">{{'Mask'}}</label>
        <input type="text" name="mark" id="mark"/>
        <br>
        <input type="submit" value="Agregar" class="btn btn-primary">
    </form>
</div>
@stop