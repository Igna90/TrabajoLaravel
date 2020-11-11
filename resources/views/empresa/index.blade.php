
@extends('layouts.principal')
@section('content')


<table class="table">
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
            <td>Editar | 
                
            <form method="post" action="{{ url('/empresa/' .$empresa->id) }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" onclick="return confirm('¿Está seguro de querer borrar?');" >Borrar</button>

            </form>
            </td>
        </tr>
        
        @endforeach
        <a href="{{ url('/empresa/create') }}">
            Crear</a> |
    </tbody>
</table>
@stop
