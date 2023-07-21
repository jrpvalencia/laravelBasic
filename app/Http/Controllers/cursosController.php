<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\curso;
use Illuminate\Http\Request;

class cursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curso = curso :: all();

        return view('cursos.index', compact('curso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curso = new curso();
      $curso->name=$request->name;
        $curso->descripcion=$request->descripcion;
      

        $curso->save();



        $file=$request->file("urlPdf");
       $nombreArchivo = "pdf_".time().".".$file->guessExtension();
       $request->file('urlPdf')->storeAs('public/imagenes',$nombreArchivo);
       $curso->urlPdf = $nombreArchivo;
       $curso->save();
      
      
       return Redirect()->route('cursos.index',$curso); 
       

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
