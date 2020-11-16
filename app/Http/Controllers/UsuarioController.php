<?php

namespace App\Http\Controllers;

use App\enterprise;
use App\cycle;
use App\User;
use Illuminate\Http\Request;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datos['usuarios'] = User::where('deleted', 0)->paginate(10);
        //$datos2['empresas'] = enterprise::where('deleted', 0)->paginate(10);
       // $datos3['ciclos'] = cycle::where('deleted', 0)->paginate(10);

        return view('usuario.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $empresas = enterprise::all()->where('deleted', 0);

        $ciclos = cycle::all()->where('deleted', 0);
        return view('usuario.create', compact('empresas', 'ciclos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosUsuario = request()->except('_token');

        User::insert($datosUsuario);

        $datos['usuario'] = User::where('deleted', 0)->paginate(10);

        $datos['usuarios'] = User::where('deleted', 0)->paginate(10);

        return view('usuario.index', $datos);
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
        $usuario = User::findOrfail($id);
        $empresas = enterprise::all()->where('deleted', 0);
        $ciclos = cycle::all()->where('deleted', 0);
        return view('usuario.edit', compact('empresas', 'ciclos', 'usuario'));

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
        $datosUsuario = request()->except(['_token', '_method']);
        User::where('id', '=', $id)->update($datosUsuario);

        $datos['usuarios']=User::where('deleted', 0)->paginate(10);
        return view('usuario.index', $datos);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $valor = User::where('id', $id);
        $valor->increment('deleted');
        $datos['usuarios'] = User::where('deleted', 0)->paginate(10);
        return view('usuario.index', $datos);
    }
}
