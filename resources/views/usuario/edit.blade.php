@extends('layouts.principal')
@section('title')
<title>Usuarios</title>
@stop
@section('page-header')
<h1 class="h3 mb-0 text-gray-800">Editar usuario</h1>
@endsection
@section('content')
<div class="container-fluid">
    <form action="{{ url('/usuario/' .$usuario->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <label for="name">{{'Nombre'}}</label>
        <input type="text" name="name" id="name" value="{{$usuario->name}}"/>
        <br />
        <br /> 
        <label for="firstname">{{'Apellido'}}</label>
        <input type="text" name="firstname" id="firstname" value="{{$usuario->firstname}}"/>
        <br />
        <br />
        <label for="phone">{{'Telefono'}}</label>
        <input type="text" name="phone" id="phone" value="{{$usuario->phone}}"/>
        <br />
        <br />
        <label for="email">{{'Email del usuario'}}</label>
        <input type="text" name="email" id="email" value="{{$usuario->email}}"/>
        <br />
        <br />
        <label for="email_verified_at">{{'Verificación email'}}</label>
        <input type="text" name="email_verified_at" id="email_verified_at" value="{{$usuario->email_verified_at}}"/>
        <br />
        <br />
        <label for="password">{{'Contraseña del usuario'}}</label>
        <input type="password" name="password" id="password" value="{{$usuario->password}}"/>
        <br />
        <br />
        <label for="type">{{'Tipo de usuario:'}}</label>
        <input type="radio" name="type" value="al"> Alumno
        <input type="radio" name="type" value="te">Tutor educativo
        <br />
        <br />


        <label for="enterprise_id">Empresas</label>
        <select name="enterprise_id" id="inputEmpresa_id">
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

        <input type="submit" value="Editar" class="btn btn-info">

        <a href="{{url('usuario')}}" class="btn btn-primary"> Volver</a>

    </form>
</div>
@stop