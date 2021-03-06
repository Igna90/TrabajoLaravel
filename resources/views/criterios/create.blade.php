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
            </div>
            @include('partials.errors')
            <div class="box-body">
                <form action="{{ url('criterios')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <label for="number">{{'Rra'}}</label>
                    <select name="ra_id" id="inputra_id">
                        @foreach($ras as $ra)
                        <option value="{{ $ra['id'] }}">{{ $ra ['number'] }}</option>
                        @endforeach
                    </select>
                    <br>
                    <label for="number">{{'Tarea'}}</label>
                    <select name="task_id" id="inputask_id">
                        @foreach($tasks as $task)
                        <option value="{{ $task['id'] }}">{{ $task ['number'] }}</option>
                        @endforeach
                    </select>
                    <br>
                    <label for="number">{{'Word'}}</label>
                    <input type="text" name="word" id="word" />
                    <br>
                    <label for="description">{{'Descripción'}}</label>
                    <textarea name="description" id="description" style="resize: none; display:inline-block; vertical-align:middle" rows="3" cols="40"></textarea>
                    <br>
                    <label for="number">{{'Mark'}}</label>
                    <input type="text" name="mark" id="mark" />
                    <br>
                    <input type="submit" value="Editar" class="btn btn-info">
                    <a href="{{url('criterios')}}" class="btn btn-primary"> Volver</a>
                </form>
            </div>
        </div>
    </div>
</div>
@stop