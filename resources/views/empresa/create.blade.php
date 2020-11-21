@extends('layouts.principal')
@section('title')
<title>Empresas</title>
@stop
@section('page-header')
@endsection
@section('content')
<div class="container-fluid">
  <div class="col-md-8">
    <div class="box box-primary">

      <div class="box-header with-border">
        <h2>{{ __("Crear una empresa") }}</h2>

      </div>
      <div class="box-body">
        @include('partials.errors')
        <form action="{{ url('empresa')}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <label for="name">{{'Nombre de la empresa'}}</label>
          <input type="text" name="name" id="name" value="">
          <br />
          <br />
          <label for="email">{{'Email de la empresa'}}</label>
          <textarea name="email" id="email" style="resize: none; display:inline-block; vertical-align:middle" rows="3" cols="40"></textarea>
          <br />
          <input type="submit" value="Agregar" class="btn btn-info">
          <a href="{{url('empresa')}}" class="btn btn-primary"> Volver</a>


      </div>
    </div>
  </div>
</div>
</form>
@stop