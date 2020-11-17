
@extends('layouts.principal')
@section('title')
<title>Ciclos</title>
@stop
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ciclos</h1>
        <a href="{{ url('/')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Volver</a>
                </div>
<table class="table table-bordered"> 
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Grado</th>
            <th>Año</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>

        @forelse($ciclos as $ciclo)
        <tr>
           
            <td>{{ $ciclo->name}} </td>
            <td>{{ $ciclo->grade}}</td>
            <td>{{ $ciclo->year}}</td>
            <td>
            <a href="{{ url('/ciclo/' .$ciclo->id.'/edit') }}" class="btn btn-info btn-icon-split" role="button">
             Editar
             </a>
                
            <form method="post" action="{{ url('/ciclo/' .$ciclo->id) }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" onclick="return confirm('¿Está seguro de querer borrar?');"class="btn btn-danger btn-icon-split" role="button">Borrar</button ></form>
            </td>
        </tr>

        @empty
            No hay usuarios disponibles
        @endforelse
</tbody>
</table>

{{$ciclos->links()}}
        <a href="{{ url('/ciclo/create') }}" class="btn btn-primary">
        <span class="text">Crear</span>
    </a> 
    </div>
@stop
