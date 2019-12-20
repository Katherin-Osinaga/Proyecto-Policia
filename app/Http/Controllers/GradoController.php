<?php

namespace App\Http\Controllers;

use App\grado;
use Illuminate\Http\Request;

class GradoController extends Controller
{
    /* *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grado.create');
    }

    /*
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = new grado();
        $datos->nombre_grado=$request->grado;
        $datos->save();
        return redirect('/policia');
    }

    /*
     * Display the specified resource.
     *
     * @param  \App\grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function show(grado $grado)
    {
        //
    }

    /*
     * Show the form for editing the specified resource.
     *
     * @param  \App\grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function edit(grado $grado)
    {
        //
    }

    /*
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, grado $grado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function destroy(grado $grado)
    {
        //
    }
}