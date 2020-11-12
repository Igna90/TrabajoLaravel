@extends('layouts.principal')
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tareas</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Volver</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <th>Numero</th>
            <th>Descripción</th>
        </thead>
        <tbody>
        @foreach($tareas as $tarea)
            <tr>
                <td>{{$tarea-> number}}</td>
                <td>{{$tarea-> description}}</td>
                <td>
                <a href="{{ url('/tareas/'.$tarea->id.'/edit') }}" class="btn btn-info btn-icon-split text">editar</a>
                
                <form method="post" action="{{url('/tareas/' .$tarea->id) }}">
                {{csrf_field()}}
                {{ method_field('DELETE')}}
                <button type="submit" onclick="return confirm('¿Está seguro de querer borrar?');" class="btn btn-danger btn-icon-split">Borrar</button></form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ url('/tareas/create') }}" class="btn btn-primary btn-icon-split">
        <span class="text">Crear</span>
    </a>
</div>
@stop