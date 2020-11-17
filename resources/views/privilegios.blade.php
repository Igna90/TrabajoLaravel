@extends('layouts.principal')
@section('content')
<div class="container-fluid">
    <!-- 404 Error Text -->
    <div class="text-center">
        <div class="error mx-auto" data-text="Permisos">Permisos</div>
        <p class="lead text-gray-800 mb-5">Página no disponible</p>
        <p class="text-gray-500 mb-0">Necesitas más privilegios para acceder a este contenido</p>
        <a href="{{url('/')}}">Vuelve a la página principal</a>
    </div>
</div>
@stop