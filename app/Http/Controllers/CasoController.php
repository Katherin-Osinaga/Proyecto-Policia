<?php

namespace App\Http\Controllers;

use App\caso;
use App\policia;
use App\delincuente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CasoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = caso::paginate(10);
        return view('caso.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $delincuente = delincuente::all();
        $policia = policia::all();
        return view ('caso.create', compact('delincuente', 'policia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = new caso();
        $datos->nombre          =$request->nombre;
        $datos->descripcion     =$request->descripcion;
        $datos->tipo_caso       =$request->tipo;
        $datos->estado          =$request->estado;
        $datos->id_policia      =$request->policia;
        $datos->id_delincuente  =$request->delincuente;
        $datos->save();
        return redirect('/caso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\caso  $caso
     * @return \Illuminate\Http\Response
     */
    public function show(caso $caso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\caso  $caso
     * @return \Illuminate\Http\Response
     */
    public function edit(caso $caso)
    {
        $policia = policia::all();
        $delincuente = delincuente::all();
        return view('caso.edit', compact('policia', 'delincuente', 'caso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\caso  $caso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, caso $caso)
    {
        $caso->nombre          =$request->nombre;
        $caso->descripcion     =$request->descripcion;
        $caso->tipo_caso       =$request->tipo;
        $caso->estado          =$request->estado;
        $caso->id_policia      =$request->policia;
        $caso->id_delincuente  =$request->delincuente;
        $caso->save();
        return redirect('/caso');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\caso  $caso
     * @return \Illuminate\Http\Response
     */
    public function destroy(caso $caso)
    {
        $caso->delete();
        return redirect('/caso');
    }
}
