<?php

namespace App\Http\Controllers;

use App\cycle;
use App\task;
use App\module;

use Illuminate\Http\Request;

class ModulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['modulos']=module::where('deleted', 0)->paginate(10);
        return view('modulos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ciclos = cycle::all()->where('deleted', 0);
        return view('modulos.create', compact('ciclos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosTarea=request()->except('_token');
        module::insert($datosTarea);
        return redirect('modulos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modulo = module::findOrFail($id);
        $ciclos = cycle::all()->where('deleted', 0);
        $cicloedit = cycle::findOrFail($modulo->cycle_id);
        return view('modulos.edit', compact('modulo', 'ciclos', 'cicloedit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos=request()->except(['_token', '_method']);
        module::where('id','=',$id)->update($datos);
        return redirect('modulos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $valor = module::where('id', $id);
        $valor -> increment('deleted');
        return redirect('modulos');
    }
}