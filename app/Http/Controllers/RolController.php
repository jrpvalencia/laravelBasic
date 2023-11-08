<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');

        $response = HTTP::get($url.'roles');
        $data = $response->json();


        return view('roles.index',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');

        $response = Http::post($url. 'rol/store',[
            'name' => $request->name
        ]);

        return redirect()->route('rol.index');
     
  
    }

    public function create()
    {
        return view('roles.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
  /*   public function show(Rol $rol)
    {
        return view('roles.show');
    } */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');


        $response = Http::put($url.'rol/update/'.$request->id,[
            'name' => $request->name
        ]);

        return redirect()->route('rol.index');

    }



    public function edit($idRol){
       
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');

        $response = Http::get($url.'rol/edit/'.$idRol);

        $rol = $response->json();

        return view('roles.edit', compact('rol'));
     }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function destroy($idRol)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');

        $response = Http::delete($url. 'rol/destroy/'. $idRol);

        return redirect()->route('rol.index');

    }
}
