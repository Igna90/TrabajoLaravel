<?php

namespace App\Http\Controllers;

use App\enterprise;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['empresas']=enterprise::where('deleted', 0)->paginate(10);
        
        return view('empresa.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosEmpresa=request()->except('_token');

        enterprise::insert($datosEmpresa);

        $datos['empresas']=enterprise::where('deleted', 0)->paginate(10);

        return view('empresa.index',$datos);
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
        $empresa = enterprise::findOrfail($id);

        return view ('empresa.edit', compact('empresa'));
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
        $datosEmpresa=request()->except(['_token','_method']);
        enterprise::where('id','=',$id)->update($datosEmpresa);

       
        $datosEmpresa['empresas']=enterprise::where('deleted', 0)->paginate(10);
        return view ('empresa.index', $datosEmpresa);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $valor = enterprise::where('id', $id);
        $valor -> increment('deleted');
        $datos['empresas']=enterprise::where('deleted', 0)->paginate(10);
         return view('empresa.index',$datos);
    }
}
