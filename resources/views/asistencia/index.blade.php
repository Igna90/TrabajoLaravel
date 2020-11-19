@extends('layouts.principal')
@section('title')
Asistencias
@stop
@section('css')
  <style>
  table.table .actions {
      width: 100px;
      text-align: center;
  }
  </style>
@stop
@section('page-header')
<h1 class="h3 mb-0 text-gray-800">Asistencias</h1>
@endsection
@section('content')
<div class="row">
	<div class="col-xs-12">
      <div class="box" style="border:1px solid #d2d6de;" >
	    <div class="box-header" style="background-color:#f5f5f5;border-bottom:1px solid #d2d6de;">
        @LoggedAL()
          <a class="btn btn-info" href="{{ url('/asistencia/create') }}" title="Add Item">
            <i class="fa fa-plus" style="vertical-align:middle" ></i>
          </a>
          @endLoggedAL()
	    </div>
        <div class="box-body table-responsive no-padding">
	        <table id="tbl" class="table data-tables table-striped table-hover" cellspacing="0" width="100%">
            @LoggedAD()
            <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Asistencia</th>
                        <th>student_id</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th class="actions"></th>
                    </tr>
                </tfoot>
                <tbody>
                @forelse($asistencias as $asistencia)
                    <tr>
                        <td>{{$asistencia-> date}}</td>
                        <td>{{$asistencia-> assistance}}</td>
                        <td>{{$asistencia-> student_id}}</td>
                        <td class="actions">
                            <ul class="list-inline" style="margin-bottom:0px;">
                            <li><a href="{{ url('/asistencia/'.$asistencia->id.'/edit') }}" title="" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a></li>
                                  <li>
                                  <form method="post" action="{{url('/asistencia/' .$asistencia->id) }}">
                                    {{csrf_field()}}
                                    {{ method_field('DELETE')}}
                                      <button class="btn btn-danger btn-xs" type="submit" onclick="return confirm('¿Está seguro de querer borrar?');" class="btn btn-danger btn-icon-split"><i class="fa fa-trash"></i></button></form>
                                  </li>
                            </ul>
                        </td>
                    </tr>
                    @empty
                    No hay asistencias disponibles
                    @endforelse
            @endLoggedAD()
            @LoggedAL()
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Asistencia</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th></th>
                        <th></th>
                        <th class="actions"></th>
                    </tr>
                </tfoot>
                <tbody>
                @forelse($asistenciasAL as $asistencial)
                    <tr>
                        <td>{{$asistencial-> date}}</td>
                        <td>{{$asistencial-> assistance}}</td>
                        <td class="actions">
                            <ul class="list-inline" style="margin-bottom:0px;">
                            <li><a href="{{ url('/asistencia/'.$asistencia->id.'/edit') }}" title="" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a></li>
                                  <li>
                                  <form method="post" action="{{url('/asistencia/' .$asistencia->id) }}">
                                    {{csrf_field()}}
                                    {{ method_field('DELETE')}}
                                      <button class="btn btn-danger btn-xs" type="submit" onclick="return confirm('¿Está seguro de querer borrar?');" class="btn btn-danger btn-icon-split"><i class="fa fa-trash"></i></button></form>
                                  </li>
                            </ul>
                        </td>
                    </tr>
                    @empty
            No hay asistencias disponibles
            @endforelse
            @endLoggedAL()
                </tbody>
            </table>
	      </div>
        </div>
        </div>
    </div>
</div>
@stop

@section('js')
  <script>
    (function($) {

      var table = $('.data-tables').DataTable({
        "columnDefs": [{
           "targets": 'no-sort',
           "orderable": false,
         }],
      });
      //replace bool column to checkbox
      renderBoolColumn('#tbl','bool');
    })(jQuery);
  </script>
@stop







<div class="container-fluid">
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