<?php

namespace App\Http\Controllers;


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
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');


        $response = Http::get($url.'temporadas');
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
        

        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');

        $response = Http::post($url.'temporada/store',[

            'name' => $request->name

        ]);
       

        return Redirect()->route('seasons.index'); 
    }

  
    public function update(Request $request)
    {

        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');

        $response = Http::put($url.'temporada/update/'.$request->id,[

            'name' => $request->name

        ]);

        return redirect()->route('seasons.index');
    }
    
    public function edit($idSeason){
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');

        $response = Http::get($url.'temporada/edit/'.$idSeason);
        $season = $response->json();
    
      
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


     
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');

        $response = Http::delete($url .'temporada/destroy/' . $idSeason);


        
        return redirect()->route('seasons.index'); 
    }
    public function productTemporada($seasonId)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');
        $response = Http::get($url.'producto/temporada/'.$seasonId);
        $product = $response->json();
    
        // Determinar el nombre de la vista según la temporada
        $viewName = '';
    
        switch ($seasonId) {
            case 1:
                $viewName = 'product.primavera';
                break;
            case 2:
                $viewName = 'product.verano';
                break;
            case 3:
                $viewName = 'product.otoño';
                break;
            case 4:
                $viewName = 'product.invierno';
                break;
        
        }
    
        return view($viewName, compact('product'));
    }
    
    

    
}
