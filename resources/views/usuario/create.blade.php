@extends('layouts.principal')
@section('title')

<title>Usuarios</title>
@stop
@section('page-header')
<h1 class="h3 mb-0 text-gray-800">Crear usuario</h1>
@endsection
@section('content')
<div class="container-fluid">
    <form action="{{ url('usuario') }}" method="post">
        {{ csrf_field() }}

        <label for="id">{{'Id del usuario'}}</label>
        <input type="text" name="id" id="id">
        <br />
        <br />

        <label for="name">{{'Nombre del usuario'}}</label>
        <input type="text" name="name" id="name">
        <br />
        <br />
        <label for="firstname">{{'Apellido'}}</label>
        <input type="text" name="firstname" id="firstname">
        <br />
        <br />
        <label for="firstname">{{'Telefono'}}</label>
        <input type="text" name="phone" id="phone">
        <br />
        <br />
        <label for="email">{{'Email del usuario'}}</label>
        <input type="text" name="email" id="email">
        <br />
        <br />
        <label for="email_verified_at">{{'Verificación email'}}</label>
        <input type="text" name="email_verified_at" id="email_verified_at">
        <br />
        <br />
        <label for="password">{{'Contraseña del usuario'}}</label>
        <input type="password" name="password" id="password">
        <br />
        <br />
        <label for="type">{{'Tipo de usuario:'}}</label>
        <input type="radio" name="type" value="Alumno"> Alumno
        <input type="radio" name="type" value="Tutor educativo"> Tutor educativo
        <br />
        <br />


        <label for="">Empresas</label>
        <select name="name" id="inputEmpresa_id">
            @foreach($empresas as $empresa)
            <option value="{{ $empresa['id'] }}">{{ $empresa ['name'] }}</option>
            @endforeach
        </select>

        <br />
        <br />
        <label for="cycle_id">Elige un ciclo para el alumno</label>
        <select name="cycle_id" id="cycle_id">
            <option value="">--Escoja el ciclo--</option>
            @foreach($ciclos as $ciclo)
            <option value="{{ $ciclo['id'] }}">{{ $ciclo ['name'] }}</option>
            @endforeach
        </select>
        <br />
        <br />

        <input type="submit" value="Crear" class="btn btn-info">

        <a href="{{url('usuario')}}" class="btn btn-primary"> Volver</a>

    </form>
</div>
@stop