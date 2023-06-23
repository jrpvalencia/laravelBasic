<?php

namespace App\Http\Controllers;

use App\Models\pqr;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PqrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pqr = pqr::all();


        return view('pqr.index',compact('pqr'));
    }
    public function create()
    {
        return view('pqr.create');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pqr = new pqr();
        $pqr->motivoPqr = $request->motivoPqr;
        $pqr->idPersona = $request->idPersona;
     

        $pqr->save();

        return Redirect()->route('pqr.index',$pqr);
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pqr  $pqr
     * @return \Illuminate\Http\Response
     */
    public function show(pqr $pqr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pqr  $pqr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pqr $pqr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pqr  $pqr
     * @return \Illuminate\Http\Response
     */
    public function destroy(pqr $pqr)
    {
        //
    }
}
