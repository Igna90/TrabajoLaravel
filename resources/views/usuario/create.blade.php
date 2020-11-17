@extends('layouts.principal')
@section('title')
<title>Usuarios</title>
@stop
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Crear usuario</h1>
        <a href="{{url('usuario')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Volver</a>
    </div>
    <form action="{{ url('/usuario')}}" method="post">
        {{ csrf_field() }}

        <label for="id">{{'Id del usuario'}}</label>
        <input type="text" name="id" id="id" value="">
        <br />
        <br />

        <label for="name">{{'Nombre del usuario'}}</label>
        <input type="text" name="name" id="name" value="">
        <br />
        <br />
        <label for="firstname">{{'Apellido'}}</label>
        <input type="text" name="firstname" id="firstname" value="">
        <br />
        <br />
        <label for="phone">{{'Telefono'}}</label>
        <input type="text" name="phone" id="phone" value="">
        <br />
        <br />
        <label for="email">{{'Email del usuario'}}</label>
        <input type="text" name="email" id="email" value="">
        <br />
        <br />
        <label for="email_verified_at">{{'Verificación email'}}</label>
        <input type="text" name="email_verified_at" id="email_verified_at" value="">
        <br />
        <br />
        <label for="password">{{'Contraseña del usuario'}}</label>
        <input type="password" name="password" id="password" value="">
        <br />
        <br />
        <label for="type">{{'Tipo de usuario:'}}</label>
        <input type="radio" name="type" value="Alumno"> Alumno
        <input type="radio" name="type" value="Tutor educativo"> Tutor educativo
        <br />
        <br />
        
            <label for="enterprise_id">Elige una empresa para el alumno</label>
            <select name="enterprise_id" id="enterprise_id" >
                <option value="">--Escoja la empresa--</option>
                @foreach($empresas as $empresa)
                <option value="{{ $empresa['id'] }}">{{ $empresa ['name'] }}</option>
                @endforeach
            </select>
            <br />
            <br />
            <label for="cycle_id">Elige un ciclo para el alumno</label>
            <select name="cycle_id" id="cycle_id" >
                <option value="">--Escoja el ciclo--</option>
                @foreach($ciclos as $ciclo)
                <option value="{{ $ciclo['id'] }}">{{ $ciclo ['name'] }}</option>
                @endforeach
            </select>
            <br />
            <br />
            
            <input type="submit" value="Crear" class="btn btn-primary">




    </form>
    @stop