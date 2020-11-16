@extends('layouts.principal')
@section('title')
<title>Asistencias</title>
@stop
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Asistencias de seguimiento </h1>
        <a href="{{url('/')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Volver</a>
    </div>
    @if({{ $asistencias->last()->created_at->format("W") }} === {{ date('W')}})
        <a href="{{ url('/asistencia/create') }}" class="btn btn-primary">
            <span class="text">Crear asistencia esta semana</span>
        </a>
    @endif
    <table class="table table-bordered">
        <thead>
            <th>Fecha</th>
            <th>Asistencia</th>
        </thead>
        <tbody>
        @foreach($asistencias as $asistencia)
            <tr>
                <td>{{$asistencia-> date}}</td>
                <td>{{$asistencia-> assistance}}</td>
                <td>
                <a href="{{ url('/asistencias/'.$asistencia->id.'/edit') }}" class="btn btn-info btn-icon-split text">editar</a>
                
                <form method="post" action="{{url('/asistencias/' .$asistencia->id) }}">
                {{csrf_field()}}
                {{ method_field('DELETE')}}
                <button type="submit" onclick="return confirm('¿Está seguro de querer borrar?');" class="btn btn-danger btn-icon-split">Borrar</button></form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    
    
</div>
@stop