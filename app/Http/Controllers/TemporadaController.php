<?php

namespace App\Http\Controllers;

use App\Models\temporada;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemporadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $temporada = temporada::all();

        return view('temporadas.index', compact('temporada'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('temporadas.create');

    }
    public function store(Request $request)
    {
        //

        $temp = new temporada();
        $temp->nombre=$request->nombre;
        $temp -> save();

        return Redirect()->route('temporadas.index',$temp);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\temporada  $temporada
     * @return \Illuminate\Http\Response
     */
    public function show(temporada $temporada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\temporada  $temporada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, temporada $temporada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\temporada  $temporada
     * @return \Illuminate\Http\Response
     */
    public function destroy(temporada $temporada)
    {
        //
    }
}
