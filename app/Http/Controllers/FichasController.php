<?php

namespace App\Http\Controllers;

use App\worksheet;
use Illuminate\Http\Request;

class FichasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fichas=worksheet::where('deleted', 0)->paginate(10);
        $fichasAl = worksheet::where('deleted', 0)->where('student_id', auth()->id())->paginate(10);
        return view('fichas.index',compact('fichas', 'fichasAl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fichas.create');
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
                'date' => 'required|max:100|date',
                'description' => 'required|max:500',
            ],
            [
                'date.required' => __("Por favor el campo Fecha es requerido"),
                'description.required' => __("Por favor el campo descripcion es requerido"),
            ]
        );
        worksheet::insert(['date'=>request()->date, 'description'=>request()->description , 'student_id'=> auth()->id()]);
        return redirect('fichas');
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
        $ficha = worksheet::findOrFail($id);

        return view('fichas.edit', compact('ficha'));
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
                'date' => 'required|max:100|date',
                'description' => 'required|max:500',
            ],
            [
                'date.required' => __("Por favor el campo Fecha es requerido"),
                'description.required' => __("Por favor el campo descripcion es requerido"),
            ]
        );
        $datos=request()->except(['_token', '_method']);
        worksheet::where('id','=',$id)->update($datos);
        return redirect('fichas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $valor = worksheet::where('id', $id);
        $valor -> increment('deleted');
        return redirect('fichas');
    }
}