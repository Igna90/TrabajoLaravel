<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\module;

class ModuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['modulos']=module::where('deleted', 0)->paginate(10);
        
        return view('modulo.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modulo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosModulo=request()->except('_token');

        module::insert($datosModulo);

        $datos['modulos']=module::where('deleted', 0)->paginate(10);

        return view('modulo.index',$datos);
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
        $modulo = module::findOrfail($id);

        return view ('modulo.edit', compact('modulo'));
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
        $datosModulo=request()->except(['_token','_method']);
        module::where('id','=',$id)->update($datosModulo);

        $modulo = module::findOrfail($id);

        return view ('modulo.edit', compact('modulo'));
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
        $datos['modulo']=module::where('deleted', 0)->paginate(10);
         return view('modulo.index',$datos);
    }
}
