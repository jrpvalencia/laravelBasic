<?php

namespace App\Http\Controllers;

use App\Models\Season;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SeasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::get($url.'/temporada');
        $data = $response->json();


        return view('seasons.index', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('seasons.create');

    }
    public function store(Request $request)
    {
        //

        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::post($url.'/temporadas2',[

            'name' => $request->name

        ]);
       

        return Redirect()->route('seasons.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Season  $season
     * @return \Illuminate\Http\Response
     */
    public function show(Season $season)
    {
        return view('seasons.show');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Season  $season
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::put($url.'/temporadas/'.$request->id,[

            'name' => $request->name

        ]);

        return redirect()->route('seasons.index');
    }
    
    public function edit($idSeason){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url.'/temporadas/'.$idSeason);
        $season = $response->json();
    
        // Utiliza dd para imprimir los datos antes de pasarlos a la vista
        
    
        return view('seasons.edit', compact('season'));
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Season  $season
     * @return \Illuminate\Http\Response
     */
    public function destroy($idSeason)
    {

     
         $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::delete($url .'/temporada/'.$idSeason); // Convertir el objeto a un array
        return redirect()->route('seasons.index'); 
    }
    
}
