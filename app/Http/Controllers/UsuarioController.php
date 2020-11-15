<?php

namespace App\Http\Controllers;

use App\enterprise;
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
        $datos['usuarios']=User::where('deleted', 0)->paginate(10);

       // $users = enterprise::table('users')->where('votes', 100)->get();
        
        return view('usuario.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresas = enterprise::pluck('name', 'id');
        return view('usuario.create', compact('id', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosUsuario=request()->except('_token');

        User::insert($datosUsuario);

        return view('empresa.index',$datosUsuario);
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

        

        return view ('usuario.edit');
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
        $datosUsuario=request()->except(['_token','_method']);
        User::where('id','=',$id)->update($datosUsuario);

        $usuario = User::findOrfail($id);

        return view ('usuario.edit', compact('usuario'));

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
        $valor -> increment('deleted');
        $datos['usuarios']=User::where('deleted', 0)->paginate(10);
         return view('empresa.index',$datos);
    }
}
