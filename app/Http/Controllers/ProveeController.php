<?php

namespace App\Http\Controllers;

use App\Models\provee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProveeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prove = provee::all();

        return view('provee.index', compact('prove'));
    }
    public function create(){
        return view('provee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prove = new provee();
        $prove->idPersona=$request->idPersona;
        $prove->idProducto=$request->idProducto;
        $prove->fechaEntrega=$request->fechaEntrega;

        $prove->save();

        return Redirect()->route('provee.index',$prove);



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\provee  $provee
     * @return \Illuminate\Http\Response
     */
    public function show(provee $provee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\provee  $provee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, provee $provee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\provee  $provee
     * @return \Illuminate\Http\Response
     */
    public function destroy(provee $provee)
    {
        //
    }
}
