<?php

namespace App\Http\Controllers;

use App\delincuente;
use Illuminate\Http\Request;

class DelincuenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = delincuente::paginate(10);
        return view('delincuente.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('delincuente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {            
        $delincuente = new delincuente();
        $delincuente->nombre        =$request->nombre;
        $delincuente->ap_paterno    =$request->ap_paterno;
        $delincuente->ap_materno    =$request->ap_materno;
        $delincuente->direccion     =$request->direccion;
        $delincuente->save();                
        return redirect('/delincuente');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\delincuente  $delincuente
     * @return \Illuminate\Http\Response
     */
    public function show(delincuente $delincuente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\delincuente  $delincuente
     * @return \Illuminate\Http\Response
     */
    public function edit(delincuente $delincuente)
    {
        return view('delincuente.edit',compact('delincuente'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\delincuente  $delincuente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, delincuente $delincuente)
    {
        $delincuente->nombre        =$request->nombre;
        $delincuente->ap_paterno    =$request->paterno;
        $delincuente->ap_materno    =$request->materno;
        $delincuente->direccion     =$request->direccion;
        $delincuente->save(); 
        return redirect('/delincuente');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\delincuente  $delincuente
     * @return \Illuminate\Http\Response
     */
    public function destroy(delincuente $delincuente)
    {
        $delincuente->delete();
        return redirect('/delincuente');
    }
}
