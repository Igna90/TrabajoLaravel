@extends('layouts.principal')
@section('title')
<title>Resultados de Evaluacion (RRA)</title>
@stop
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">RRA</h1>
        <a href="{{ url('/')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Volver</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <th>Numero</th>
            <th>Descripción</th>
            <th>Modulo</th>            
        </thead>
        <tbody>
        @foreach($resultados as $resultado)
            <tr>
                <td>{{$resultado-> number}}</td>
                <td>{{$resultado-> description}}</td>
                <td>{{$resultado-> module_id}}</td>
                <td>
                <a href="{{ url('/resultados/'.$resultado->id.'/edit') }}" class="btn btn-info btn-icon-split text">editar</a>
                
                <form method="post" action="{{url('/resultados/' .$resultado->id) }}">
                {{csrf_field()}}
                {{ method_field('DELETE')}}
                <button type="submit" onclick="return confirm('¿Está seguro de querer borrar?');" class="btn btn-danger btn-icon-split">Borrar</button></form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$resultados->links()}}
    <a href="{{ url('/resultados/create') }}" class="btn btn-primary">
        <span class="text">Crear</span>
    </a>
</div>
@stop