<?php

namespace App\Http\Controllers;

use App\Models\devolucion;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DevolucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devolucion = devolucion::all();

        return view('devoluciones.index',compact('devolucion'));
    }

    public function create(){
        return view('devoluciones.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $devolucion = new devolucion();
        $devolucion->motivo=$request->motivo;
        $devolucion->idPedido=$request->idPedido;
        $devolucion->idPqr=$request->idPqr;

        $devolucion->save();


        return Redirect()->route('devoluciones.index',$devolucion);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\devolucion  $devolucion
     * @return \Illuminate\Http\Response
     */
    public function show(devolucion $devolucion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\devolucion  $devolucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, devolucion $devolucion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\devolucion  $devolucion
     * @return \Illuminate\Http\Response
     */
    public function destroy(devolucion $devolucion)
    {
        //
    }
}
