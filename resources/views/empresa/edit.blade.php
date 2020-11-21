@extends('layouts.principal')
@section('title')
Editar empresa
@stop
@section('page-header')
@endsection
@section('content')
<div class="container-fluid">
    <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3>{{ __("Editar una empresa") }}</h3>
            </div>
            @include('partials.errors')
            <div class="box-body">
                <form action="{{ url('/empresa/' .$empresa->id)}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{method_field('PATCH')}}
                    <label for="name">{{'Nombre de la empresa'}}</label>
                    <input type="text" name="name" id="name" value="{{$empresa-> name}}">
                    <br />
                    <br />
                    <label for="email">{{'Email de la empresa'}}</label>
                    <input type="email" name="email" id="email" value="{{$empresa-> email}}">
                    <br />
                    <br />
                    <input type="submit" value="Editar" class="btn btn-info">
                    <a href="{{url('empresa')}}" class="btn btn-primary"> Volver</a>
                </form>
            </div>
        </div>
    </div>
</div>
@stop