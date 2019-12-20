<?php

namespace App\Http\Controllers;

use App\grado;
use App\policia;
use Illuminate\Http\Request;

class PoliciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $polis = policia::paginate(10);
        return view('policia.index', compact('polis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos = grado::all();
        return view('policia.create', compact('datos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = new policia();
        $datos->nombre = $request->nombre;
        $datos->ap_paterno = $request->paterno;
        $datos->ap_materno = $request->materno;
        $datos->direccion = $request->direccion;
        $datos->telefono = $request->telefono;
        $datos->id_grado = $request->grado;
        $datos->save();
        return redirect('/policia');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\policia  $policia
     * @return \Illuminate\Http\Response
     */
    public function show(policia $policia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\policia  $policia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos = grado::all();
        $policia = policia::findOrfail($id);        
        return view('policia.edit', compact('policia','datos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\policia  $policia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {        
        $policia = policia::findOrfail($id);        
        $policia->nombre = $request->nombre;
        $policia->ap_paterno = $request->paterno;
        $policia->ap_materno = $request->materno;
        $policia->direccion = $request->direccion;
        $policia->telefono = $request->telefono;
        $policia->id_grado = $request->grado;
        $policia->save();
        return redirect('/policia');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\policia  $policia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $policia = policia::findOrfail($id);
        $policia->delete();
        return redirect('/policia');
    }
}
