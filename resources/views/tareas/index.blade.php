@extends('layouts.principal')
@section('content')
<table>
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
            <a href="{{ url('/tareas/' .$tareas->id.'/edit') }}">
            Editar</a> | 
            
            <form method="post" action="{{url('/tareas/' .$tarea->id) }}">
            {{csrf_field()}}
            {{ method_field('DELETE')}}
            <button type="submit" onclick="return confirm('¿Está seguro de querer borrar?');">Borrar</button>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
@stop