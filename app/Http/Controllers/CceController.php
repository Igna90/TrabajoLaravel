<?php

namespace App\Http\Controllers;

use App\task;
use App\ce;

use Illuminate\Http\Request;

class CceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['criterios']=ce::where('deleted', 0)->paginate(10);
        return view('criterios.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('criterios.create');
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
                'word' => 'required|max:100',
                'description' => 'required|max:500',
                'ra_id' => 'required|max:100',
                'task_id' => 'required|max:100|email',
                'mark' => 'required|max:100|email',
            ],
            [
                'word.required' => __("Por favor el campo criterios del ciclo es requerido"),
                'description.required' => __("Por favor el campo descripción es requerido"),
                'ra_id.required' => __("Por favor el campo de resultado por aprendizaje es requerido"),
                'task_id.required' => __("Por favor el campo tarea es requerido"),
                'mark.required' => __("Por favor el campo de marcado es requerido"),
            ]
        );
        $datosTarea=request()->except('_token');
        ce::insert($datosTarea);
        return redirect('criterios');
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
        $criterio = ce::findOrFail($id);
        return view('criterios.edit', compact('criterio'));
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
                'word' => 'required|max:100',
                'description' => 'required|max:500',
                'ra_id' => 'required|max:100',
                'task_id' => 'required|max:100|',
                'mark' => 'required|max:100|',
            ],
            [
                'word.required' => __("Por favor el campo criterios del ciclo es requerido"),
                'description.required' => __("Por favor el campo descripción es requerido"),
                'ra_id.required' => __("Por favor el campo de resultado por aprendizaje es requerido"),
                'task_id.required' => __("Por favor el campo tarea es requerido"),
                'mark.required' => __("Por favor el campo de marcado es requerido"),
            ]
        );
        $datos=request()->except(['_token', '_method']);
        ce::where('id','=',$id)->update($datos);
        return redirect('criterios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $valor = ce::where('id', $id);
        $valor -> increment('deleted');
        return redirect('criterios');
    }
}