<?php

namespace App\Http\Controllers;

use App\task;
use App\ra;

use Illuminate\Http\Request;

class RraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['resultados']=ra::where('deleted', 0)->paginate(10);
        
        return view('resultados.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resultados.create');
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

        ra::insert($datosTarea);

        $datos['resultados']=ra::where('deleted', 0)->paginate(10);
        
        return view('resultados.index',$datos);
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
        $resultado = ra::findOrFail($id);

        return view('resultados.edit', compact('resultado'));
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
        ra::where('id','=',$id)->update($datos);
        $datos['resultados']=ra::where('deleted', 0)->paginate(10);
        
        return view('resultados.index',$datos);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $valor = ra::where('id', $id);
        $valor -> increment('deleted');
        $datos['resultados']=ra::where('deleted', 0)->paginate(10);
        return view('resultados.index',$datos);
    }
}