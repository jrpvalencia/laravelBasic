<?php

namespace App\Http\Controllers;

use App\Models\formaDePago;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormaDePagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formaDePago = formaDePago::all();

        return view('formaDePago.index',compact('formaDePago'));
    }

    public function create(){
        return view('formaDePago.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formaDePago = new formaDePago();
        $formaDePago->nombre=$request->nombre;
        $formaDePago->save();


        return Redirect()->route('formaDePago.index',$formaDePago);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\formaDePago  $formaDePago
     * @return \Illuminate\Http\Response
     */
    public function show(formaDePago $formaDePago)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\formaDePago  $formaDePago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, formaDePago $formaDePago)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\formaDePago  $formaDePago
     * @return \Illuminate\Http\Response
     */
    public function destroy(formaDePago $formaDePago)
    {
        //
    }
}
