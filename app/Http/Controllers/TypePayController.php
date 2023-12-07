<?php

namespace App\Http\Controllers;

use App\Models\TypePay;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class TypePayController extends Controller
{
    public function show($idCarrito, $totalCarrito)
    {
    

        
        $url = env('URL_SERVER_API');
        
        $response = Http::get($url . 'formaDePagos');
        $data = $response->json();
        
        // Cambiar los índices para que comiencen desde 1
        $formattedData = [];
        foreach ($data as $index => $item) {
            $formattedData[$index + 1] = $item;
        }
    
        return view('formadepago', compact('formattedData', 'idCarrito', 'totalCarrito'));
    }
    
    
    

 
    public function create()
    {
        return view('typePay.create');

    }
    public function store(Request $request)
    {
        

        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');

        $response = Http::post($url.'formaDePago/store',[

            'name' => $request->name

        ]);
       

        return Redirect()->route('typePay.index'); 
    }

  
    public function update(Request $request)
    {

        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');

        $response = Http::put($url.'formaDePago/update/'.$request->id,[

            'name' => $request->name

        ]);

        return redirect()->route('typePay.index');
    }
    
    public function edit($typePay){
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');

        $response = Http::get($url.'formaDePago/edit/'.$typePay);
        $typePay = $response->json();
    
      
        return view('typePay.edit', compact('typePay'));
    }
    

  
    public function destroy($typePay)
    {


     
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');

        $response = Http::delete($url .'temporada/destroy/' . $typePay);


        
        return redirect()->route('typePay.index'); 
    }
}
