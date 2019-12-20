<?php

namespace App\Http\Controllers;

use App\historial;
use App\delincuente;
use Illuminate\Http\Request;

class HistorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = historial::paginate(10);
        return view('historial.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos = delincuente::all();
        return view('historial.create', compact('datos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $datos = new historial();
        $datos->historial       =$request->historial;
        $datos->sentencia       =$request->sentencia;
        $datos->id_delincuente  =$request->delincuente;
        $datos->save();
        return redirect('/historial');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function show(historial $historial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function edit(historial $historial)
    {
        return view('historial.edit', compact('historial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, historial $historial)
    {                
        $historial->historial       =$request->historial;
        $historial->sentencia       =$request->sentencia;
        $historial->id_delincuente  =$request->delincuente;
        $historial->save();
        return redirect('/historial');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function destroy(historial $historial)
    {
        $historial->delete();
        return redirect('/historial');        
    }
}
