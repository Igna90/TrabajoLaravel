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


        // $request->validate([
        //     'name' => 'required',
        //     'last_name' => 'required',
        //     'username'=> 'required',
        //     'rol'=> 'required',
        //     'status' => 'required',
        //     'email'=> 'required|unique:users',
        //     'password'=> 'required',
        // ]);
    
        // $user = new App\User();
        // $user->name = $request->name;
        // $user->last_name = $request->last_name;
        // $user->username = $request->username;
        // $user->rol = $request->rol;
        // $user->status = $request->status;
        // $user->email = $request->email;
        // $user->password = bcrypt($request->password); // Se encripta la contraseña usando la función bcrypt().
        // $user->save(); // Se guarda el registro en la base de datos.
    
        // return redirect()->route('users.index')
        //                  ->with('success','User created successfully.');
    // }
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