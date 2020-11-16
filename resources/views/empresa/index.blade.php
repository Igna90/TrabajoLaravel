
@extends('layouts.principal')
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Empresas</h1>
        <a href="{{ url('/')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Volver</a>
                </div>
<table class="table table-bordered"> 
    <thead>
        <tr>
            <th>Nombre de la empresa</th>
            <th>E-mail</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>

        @foreach($empresas as $empresa)
        <tr>
           
            <td>{{ $empresa->name}} </td>
            <td>{{ $empresa->email}}</td>
            <td>
             <a href="{{ url('/empresa/' .$empresa->id.'/edit') }}" class="btn btn-info btn-icon-split text">
             Editar
             </a>
                
            <form method="post" action="{{ url('/empresa/' .$empresa->id) }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" onclick="return confirm('¿Está seguro de querer borrar?');"class="btn btn-danger btn-icon-split">Borrar</button ></form>
            </td>
        </tr>
        @endforeach
</tbody>
</table>
{{$empresas->links()}}
        <a href="{{ url('/empresa/create') }}" class="btn btn-primary">
        <span class="text">Crear</span>
    </a> 
    </div>
@stop
