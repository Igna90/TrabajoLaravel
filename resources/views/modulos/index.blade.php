@extends('layouts.principal')
@section('title')
Módulos
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
<h1 class="h3 mb-0 text-gray-800">Módulos</h1>
@endsection
@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box" style="border:1px solid #d2d6de;">
      <div class="box-header" style="background-color:#f5f5f5;border-bottom:1px solid #d2d6de;">
        @LoggedTEyAD()
        <a class="btn btn-info" href="{{ url('/modulos/create') }}" title="Add Item">
          <i class="fa fa-plus" style="vertical-align:middle"></i>
        </a>
        @endLoggedTEyAD()
      </div>
      <div class="box-body table-responsive no-padding">
        <table id="tbl" class="table data-tables table-striped table-hover" cellspacing="0" width="100%">
          @LoggedTE()
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th></th>
              <th class="actions"></th>
            </tr>
          </tfoot>
          <tbody>
            @forelse($modulos as $modulo)
            @if($modulo->cycle_id===auth()->user()->cycle_id)

            <tr>
              <td>{{$modulo-> name}}</td>
              <td class="actions">
                <ul class="list-inline" style="margin-bottom:0px;">
                  <li><a href="{{ url('/modulos/'.$modulo->id.'/edit') }}" title="" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a></li>
                  <li>
                    <form method="post" action="{{url('/modulos/' .$modulo->id) }}">
                      {{csrf_field()}}
                      {{ method_field('DELETE')}}
                      <button class="btn btn-danger btn-xs" type="submit" onclick="return confirm('¿Está seguro de querer borrar?');" class="btn btn-danger btn-icon-split"><i class="fa fa-trash"></i></button></form>
                  </li>
                </ul>
              </td>
            </tr>
          </tbody>
          @endif
          @empty
          @endforelse
          @endLoggedTE()
          @LoggedAD()
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Ciclo</th>
              <th>Acciones</th>
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
            @forelse($modulos as $modulo)

            <tr>
              <td>{{$modulo-> name}}</td>
              <td>{{$modulo->find($modulo->id)->Cycles->name}}</td>
              <td class="actions">
                <ul class="list-inline" style="margin-bottom:0px;">
                  <li><a href="{{ url('/modulos/'.$modulo->id.'/edit') }}" title="" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a></li>
                  <li>
                    <form method="post" action="{{url('/modulos/' .$modulo->id) }}">
                      {{csrf_field()}}
                      {{ method_field('DELETE')}}
                      <button class="btn btn-danger btn-xs" type="submit" onclick="return confirm('¿Está seguro de querer borrar?');" class="btn btn-danger btn-icon-split"><i class="fa fa-trash"></i></button></form>
                  </li>
                </ul>
              </td>
            </tr>
          </tbody>
          @empty
          @endforelse
          @endLoggedAD()
        </table>
        {{$modulos->links()}}
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
    renderBoolColumn('#tbl', 'bool');
  })(jQuery);
</script>
@stop