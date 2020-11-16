<?php

namespace App\Http\Controllers;

use App\cycle;
use Illuminate\Http\Request;

class CicloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['ciclos']=cycle::where('deleted', 0)->paginate(10);
        
        return view('ciclo.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ciclo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosCiclo=request()->except('_token');

        cycle::insert($datosCiclo);

        $datos['ciclos']=cycle::where('deleted', 0)->paginate(10);

    
         return view('ciclo.index',$datos);

        
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
        $ciclo = cycle::findOrfail($id);

        return view ('ciclo.edit', compact('ciclo'));
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
        $datosCiclo=request()->except(['_token','_method']);
        cycle::where('id','=',$id)->update($datosCiclo);

        $ciclo = cycle::findOrfail($id);

        return view ('ciclo.edit', compact('ciclo'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $valor = cycle::where('id', $id);
        $valor -> increment('deleted');
        $datos['ciclos']=cycle::where('deleted', 0)->paginate(10);
         return view('ciclo.index',$datos);
    }
}
