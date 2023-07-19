<?php

namespace App\Http\Controllers;

use App\Models\pago;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pago = pago::all();

        return view('pago.index',compact('pago'));
       
    }
    public function create(){
        return view('pago.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pago = new pago();
        $pago->idPedido=$request->idPedido;
        $pago->idFormaDePago=$request->idFormaDePago;

        $pago->save();


        return Redirect()->route('pago.index',$pago);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function show(pago $pago)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pago $pago)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function destroy(pago $pago)
    {
        //
    }
}
