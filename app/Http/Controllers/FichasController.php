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
        $datos['fichas']=worksheet::where('deleted', 0)->paginate(10);
        
        return view('fichas.index',$datos);
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

        worksheet::insert(['date'=>request()->date, 'description'=>request()->description , 'student_id'=> auth()->id()]);

        $datos['fichas']=worksheet::where('deleted', 0)->paginate(10);
        
        return view('fichas.index',$datos);
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
        $datos=request()->except(['_token', '_method']);
        worksheet::where('id','=',$id)->update($datos);

        $datos['fichas']=worksheet::where('deleted', 0)->paginate(10);
        return view('fichas.index',$datos);
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

        $datos['fichas']=worksheet::where('deleted', 0)->paginate(10);
        return view('fichas.index',$datos);
    }
}