@extends('layouts.principal')
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Editar usuarios</h1>
        <a href="{{url('usuario')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Volver</a>
    </div>
    <form action="{{ url('/usuario/' .$usuario->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <label for="id">{{'Id del usuario'}}</label>
        <input type="text" name="id" id="id" value="{{$usuario-> id}}">
        <br />
        <br />

        <label for="name">{{'Nombre del usuario'}}</label>
        <input type="text" name="name" id="name" value="{{$usuario-> name}}">
        <br />
        <br />
        <label for="firstname">{{'Apellido'}}</label>
        <input type="text" name="firstname" id="firstname" value="{{$usuario-> phone}}">
        <br />
        <br />
        <label for="email">{{'Email del usuario'}}</label>
        <input type="text" name="email" id="email" value="{{$usuario-> email}}">
        <br />
        <br />
        <label for="email_verified_at">{{'Verificación email'}}</label>
        <input type="text" name="email_verified_at" id="email_verified_at" value="{{$usuario-> email_verified_at}}">
        <br />
        <br />
        <label for="password">{{'Contraseña del usuario'}}</label>
        <input type="text" name="password" id="password" value="{{$usuario-> password}}">
        <br />
        <br />
        <label for="tyoe">{{'Tipo de usuario:'}}</label>
        <input type="radio" name="tyoe" value="Alumno"> Alumno
        <input type="radio" name="tyoe" value="Tutor educativo"> Tutor educativo
        <br />
        <br />
        <select id="enterprise_id" name="enterprise_id"></select>
        <div class="form-group">
            
        
        <h2>Select</h2>
            <select name="empresas" size="5">
     @foreach($datosempresas as $empresa)
        <option value="{{ $empresa->id}}"  >{{ $empresa->name}}</option>
     @endforeach
     
    </select>

        <input type="submit" value="Editar">



    </form>
</div>
@stop