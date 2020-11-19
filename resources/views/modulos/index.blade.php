@extends('layouts.principal')
@section('title')
<title>Modulos</title>
@stop
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Modulos</h1>
        <a href="{{ url('/')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Volver</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <th>Nombre</th>
            <th>Ciclo</th>
        </thead>
        <tbody>
        @foreach($modulos as $modulo)
            <tr>
                <td>{{$modulo-> name}}</td>
                <td>{{$modulo-> cycle_id}}</td>
                <td>
                <a href="{{ url('/modulos/'.$modulo->id.'/edit') }}" class="btn btn-info btn-icon-split text">editar</a>
                
                <form method="post" action="{{url('/modulos/' .$modulo->id) }}">
                {{csrf_field()}}
                {{ method_field('DELETE')}}
                <button type="submit" onclick="return confirm('¿Está seguro de querer borrar?');" class="btn btn-danger btn-icon-split">Borrar</button></form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$modulos->links()}}
    <a href="{{ url('/modulos/create') }}" class="btn btn-primary">
        <span class="text">Crear</span>
    </a>
</div>
@stop