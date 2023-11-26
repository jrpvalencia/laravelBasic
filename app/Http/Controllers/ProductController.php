<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');

        $response =  Http::get($url.'productos');

        $data = $response->json();

        return view('product.index', compact('data'));

    }

    public function catalogo()
    {

        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');

        $response =  Http::get($url.'productos');

        $data = $response->json();

        return view('catalogo.index', compact('data'));

    }

    public function create()
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');
        
        // Obtener productos desde la API
        $responseProductos = Http::get($url . 'productos');
        $productos = $responseProductos->json();
        
        // Obtener temporadas desde la API
        $responseTemporadas = Http::get($url . 'temporadas');
        
        // Verificar si la respuesta es exitosa y obtener los datos
        $temporadas = $responseTemporadas->successful() ? $responseTemporadas->json() : null;
        
        return view('product.create', ['productos' => $productos, 'temporadas' => $temporadas]);
    }
    
    


    public function store(Request $request)
    {
        try {
            $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');
    
            // Verificar si se ha cargado una imagen en la solicitud
            if ($request->hasFile('image')) {
                // Adjuntar la imagen a la solicitud
                $response = Http::attach(
                    'image', 
                    $request->file('image')->get(), 
                    $request->file('image')->getClientOriginalName()
                )->post($url.'producto/store', [
                    'name' => $request->name,
                    'description' => $request->description,
                    'price' => $request->price,
                    'image' => $request->image,
                    'concentration' => $request->concentration,
                    'idSeason' => $request->idSeason,
                ]);
            } else {
                // Si no hay imagen, enviar la solicitud sin adjuntar archivos
                $response = Http::post($url.'producto/store', [
                    'name' => $request->name,
                    'description' => $request->description,
                    'price' => $request->price,
                    'concentration' => $request->concentration,
                    'idSeason' => $request->idSeason,
                ]);
            }
    
            // Verificar si la solicitud fue exitosa
            if ($response->successful()) {
                // La solicitud fue exitosa
                return redirect()->route('product.index');
            } else {
                // La solicitud no fue exitosa, manejar el error
                return view('error')->with('error', 'Error al almacenar el producto en la API.');
            }
        } catch (\Exception $e) {
            // Capturar cualquier excepción
            return view('error')->with('error', 'Error al realizar la solicitud a la API.');
        }
    }
    
    




    public function show($id)
    {

       
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');

        $response =  Http::get($url.'producto/show/'.$id);

        $product = $response->json();

        return view('product.show', compact('product'));
    }

   
    public function update(Request $request, )
    {

           
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');
        try {
                  // Verificar si se ha cargado una imagen en la solicitud
                  if ($request->hasFile('image')) {
                    // Adjuntar la imagen a la solicitud
                    $response = Http::attach(
                        'image', 
                        $request->file('image')->get(), 
                        $request->file('image')->getClientOriginalName()
                    )->post($url. 'producto/update/'. $request->id,[
                        'name' => $request->name,
                        'description' => $request->description,
                        'price' => $request->price,
                        'image' => $request->image,
                        'concentration' => $request->concentration,
                        'idSeason' => $request->idSeason,
                    ]);
                } else {
                    // Si no hay imagen, enviar la solicitud sin adjuntar archivos
                    $response = Http::post($url.'producto/update/'. $request->id, [
                        'name' => $request->name,
                        'description' => $request->description,
                        'price' => $request->price,
                        'concentration' => $request->concentration,
                        'idSeason' => $request->idSeason,
                    ]);
                }
        
    
            // Verificar si la solicitud fue exitosa
            if ($response->successful()) {
                // La solicitud fue exitosa, puedes redirigir o mostrar un mensaje
                return redirect()->route('product.index')->with('success', 'Producto actualizado correctamente');
            } else {
                // La solicitud no fue exitosa, manejar el error
                return redirect()->back()->withErrors(['error' => 'Error al actualizar el producto en la API.']);
            }
        } catch (\Exception $e) {
            // Manejar excepciones aquí, por ejemplo, problemas con la imagen
            return redirect()->back()->withErrors(['error' => 'Error en la actualización del producto.']);
        }
    }
    
    
    


    public function edit($idProduct)
    {

        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');

        $response = Http::get($url . 'producto/edit/' . $idProduct);

        

        if ($response->successful()) {
            $product = $response->json();
       
            // Obtener todos los season disponibles
            $seasonResponse = Http::get($url . 'temporadas');
            $temporadas = $seasonResponse->json();

            $idSeason = $product['idSeason']; // Establecer el season actual del usuario

            return view('product.edit', compact('product', 'temporadas', 'idSeason'));
        } else {
            // Manejo de error si la solicitud a la API no tiene éxito
            return redirect()->back()->with('error', 'No se pudo obtener los datos del usuario');
        } 
    }

    public function destroy($idProduct)
    {

        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');
        $response = Http::delete($url . 'producto/destroy/' . $idProduct);

        return redirect()->route('product.index');
    }





    

/*     public function primavera()
    {
        $productosPrimavera = Product::where('idSeason', 1)->get();
    
      
    
        return view('product.primavera', ['productosPrimavera' => $productosPrimavera]);
    }
    
    public function verano()
    {
        $productosVerano = Product::where('idSeason', 2)->get(); 
    
      
    
        return view('product.verano', ['productosVerano' => $productosVerano]);
    }
    public function otoño()
    {
        $productosOtoño = Product::where('idSeason', 3)->get(); 
    
      
    
        return view('product.otoño', ['productosOtoño' => $productosOtoño]);
    }
    public function invierno()
    {
        $productosInvierno = Product::where('idSeason', 4)->get(); 
    
      
    
        return view('product.invierno', ['productosInvierno' => $productosInvierno]);
    } */
     
}






































  //INSERTAR PDF
       /*  $img= $request->file("imagen");
        $nombreArchivo= "pdf_".time().".".$img->guessExtension();
        $request-> file("imagen")->storeAs('public/imagenes', $nombreArchivo);
        $producto -> imagen = $nombreArchivo;

        $producto->precio= $request->precio;
        $producto->idTemporada = $request->idTemporada; */
