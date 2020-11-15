
@extends('layouts.principal')
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Usuarios</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Volver</a>
                </div>
<table class="table table-bordered"> 
    <thead>
        <tr>
            <th>Id del usuario</th>
            <th>Nombre del usuario</th>
            <th>Primer apellido</th>
            <th>Telefono</th>
            <th>email</th>
            <th>Verificación email</th>
            <th>Contraseña</th>
            <th>Tipo de usuario</th>
            <th>Empresa</th>
            <th>Ciclo</th>
            <th>Registro de borrado</th>

        </tr>
    </thead>

    <tbody>

        @foreach($usuarios as $usuario)
        <tr>
           
            <td>{{ $usuario->id}} </td>
            <td>{{ $usuario->name}}</td>
            <td>{{ $usuario->firstname}} </td>
            <td>{{ $usuario->phone}}</td>
            <td>{{ $usuario->email}} </td>
            <td>{{ $usuario->email_verified_at}}</td>
            <td>{{ $usuario->password}}</td>
            <td>{{ $usuario->type}} </td>
            <td>{{ $usuario->enterprise_id}}</td>
            <td>{{ $usuario->cycle_id}} </td>
            <td>{{ $usuario->deleted}}</td>
            
            




            <td>
             <a href="{{ url('/usuario/' .$usuario->id.'/edit') }}" class="btn btn-info btn-icon-split text">
             Editar
             </a>
                
            <form method="post" action="{{ url('/usuario/' .$usuario->id) }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" onclick="return confirm('¿Está seguro de querer borrar?');"class="btn btn-danger btn-icon-split">Borrar</button ></form>
            </td>
        </tr>
        @endforeach
</tbody>
</table>
{{$usuarios->links()}}
        <a href="{{ url('/usuario/create') }}" class="btn btn-primary">
        <span class="text">Crear</span>
    </a> 
    </div>
@stop
