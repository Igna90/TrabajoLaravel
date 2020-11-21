@extends('layouts.principal')
@section('title')
<title>Criterios de Evaluacion (CCE)</title>
@stop
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">CCE</h1>
        <a href="{{ url('/')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Volver</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <th>Rra</th>
            <th>Tarea</th>
            <th>Word</th>                        
            <th>Descripción</th>
            <th>Mark</th>
        </thead>
        <tbody>
        @foreach($criterios as $criterio)
            <tr>
                <td>{{$criterio-> ra_id}}</td>
                <td>{{$criterio-> task_id}}</td>
                <td>{{$criterio-> word}}</td>
                <td>{{$criterio-> description}}</td>
                <td>{{$criterio-> mark}}</td>
                <td>
                <a href="{{ url('/criterios/'.$criterio->id.'/edit') }}" class="btn btn-info btn-icon-split text">editar</a>
                
                <form method="post" action="{{url('/criterios/' .$criterio->id) }}">
                {{csrf_field()}}
                {{ method_field('DELETE')}}
                <button type="submit" onclick="return confirm('¿Está seguro de querer borrar?');" class="btn btn-danger btn-icon-split">Borrar</button></form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$criterios->links()}}
    <a href="{{ url('/criterios/create') }}" class="btn btn-primary">
        <span class="text">Crear</span>
    </a>
</div>
@stop