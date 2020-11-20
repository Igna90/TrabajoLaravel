<?php

namespace App\Http\Controllers;

use App\assistance;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asistencias=assistance::where('deleted', 0)->paginate(10);
        $asistenciasAl=assistance::where('deleted', 0)->where('student_id', auth()->id())->paginate(10);

        return view('asistencia.index', compact('asistencias', 'asistenciasAl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('asistencia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        assistance::insert(['date'=>request()->date1, 'assistance'=>request()->assistance1 , 'student_id'=> auth()->id()]);
        assistance::insert(['date'=>request()->date2, 'assistance'=>request()->assistance2 , 'student_id'=> auth()->id()]);
        assistance::insert(['date'=>request()->date3, 'assistance'=>request()->assistance3 , 'student_id'=> auth()->id()]);
        $asistencias=assistance::where('deleted', 0)->paginate(10);
        $asistenciasAl=assistance::where('deleted', 0)->where('student_id', auth()->id())->paginate(10);

        return view('asistencia.index', compact('asistencias', 'asistenciasAl'));
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
        $asistencia = assistance::findOrFail($id);

        return view('asistencia.edit', compact('asistencia'));
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
        assistance::where('id','=',$id)->update($datos);

        $asistencias=assistance::where('deleted', 0)->paginate(10);
        $asistenciasAl=assistance::where('deleted', 0)->where('student_id', auth()->id())->paginate(10);

        return view('asistencia.index', compact('asistencias', 'asistenciasAl'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        assistance::where('id','=',$id)->update('deleted', 1);
        return back();
    }
}