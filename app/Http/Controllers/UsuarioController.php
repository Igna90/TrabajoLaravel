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
        $this->validate(
            request(),
            [
                'name' => 'required|max:100',
                'firstname' => 'required|max:500',
                'phone' => 'required|max:100',
                'email' => 'required|max:100|email',
                'email_verified_at' => 'required|max:100|email',
                'password' => 'required|max:100',
                'type' => 'required|max:100',
            ],
            [
                'name.required' => __("Por favor el campo nombre del ciclo es requerido"),
                'firstname.required' => __("Por favor el campo de grado es requerido"),
                'phone.required' => __("Por favor el campo de año es requerido"),
                'email.required' => __("Por favor el campo nombre del ciclo es requerido"),
                'email_verified_at.required' => __("Por favor el campo de grado es requerido"),
                'password.required' => __("Por favor el campo de año es requerido"),
                'type.required' => __("Por favor el campo nombre del ciclo es requerido"),
            ]
        );
        $datosUsuario = request()->except('_token');
        User::insert(['password'=>bcrypt(request()->password)]);
        User::insert($datosUsuario);
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
        $this->validate(
            request(),
            [
                'name' => 'required|max:100',
                'firstname' => 'required|max:500',
                'phone' => 'required|max:100',
                'email' => 'required|max:100|email',
                'email_verified_at' => 'required|max:100|email',
                'password' => 'required|max:100',
                'type' => 'required|max:100',
            ],
            [
                'name.required' => __("Por favor el campo nombre del ciclo es requerido"),
                'firstname.required' => __("Por favor el campo de grado es requerido"),
                'phone.required' => __("Por favor el campo de año es requerido"),
                'email.required' => __("Por favor el campo nombre del ciclo es requerido"),
                'email_verified_at.required' => __("Por favor el campo de grado es requerido"),
                'password.required' => __("Por favor el campo de año es requerido"),
                'type.required' => __("Por favor el campo nombre del ciclo es requerido"),
            ]
        );
        $datosUsuario = request()->except(['_token', '_method']);
        User::where('id', '=', $id)->update($datosUsuario);
        return redirect('usuario');
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
        return redirect('usuario');
    }
}