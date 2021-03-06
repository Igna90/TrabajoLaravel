@extends('layouts.principal')
@section('title')
Editar usuarios
@stop
@section('page-header')
<h1 class="h3 mb-0 text-gray-800">Edición de usuarios</h1>
@endsection
@section('content')
<div class="container-fluid">
    <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3>Editar usuario</h3>
            </div>
            <div class="box-body">
            @include('partials.errors')
                <form action="{{ url('/usuario/' .$usuario->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <label for="name">{{'Nombre'}}</label>
                    <input type="text" name="name" id="name" value="{{$usuario->name}}" />
                    <br />
                    <br />
                    <label for="firstname">{{'Apellido'}}</label>
                    <input type="text" name="firstname" id="firstname" value="{{$usuario->firstname}}" />
                    <br />
                    <br />
                    <label for="phone">{{'Telefono'}}</label>
                    <input type="number" name="phone" id="phone" value="{{$usuario->phone}}" />
                    <br />
                    <br />
                    <label for="email">{{'Email del usuario'}}</label>
                    <input type="text" name="email" id="email" value="{{$usuario->email}}" />
                    <br />
                    <br />
                    <label for="email_verified_at">{{'Verificación email'}}</label>
                    <input type="text" name="email_verified_at" id="email_verified_at" value="{{$usuario->email_verified_at}}" />
                    <br />
                    <br />
                    <label for="password">{{'Contraseña del usuario'}}</label>
                    <input type="password" name="password" id="password" value="{{$usuario->password}}" />
                    <br />
                    <br />
                    <label for="type">{{'Tipo de usuario:'}}</label>
                    <input type="radio" name="type" value="al" {{ ($usuario->type=="al")? "checked" : "" }}> Alumno</input>
                    <input type="radio" name="type" value="te" {{ ($usuario->type=="te")? "checked" : "" }}>Tutor educativo</input>
                    <input type="radio" name="type" value="te" {{ ($usuario->type=="ad")? "checked" : "" }} disabled>Administrador</input>
                    <input type="radio" name="type" value="te" {{ ($usuario->type=="tl")? "checked" : "" }} disabled>Tutor laboral</input>
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
        </div>
    </div>
</div>
@stop