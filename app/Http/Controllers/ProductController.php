<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Season;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();

      
        
        return view('product.index', compact('product'));
    

        
    }


    public function catalogo()
    {
        $product = Product::all();
        foreach ($product as $products) {
            if ($products->image) {
                $products->image = asset('storage/product/' . $products->image);
            }
        }
        return view('catalogo.index', compact('product'));
    
    }






    public function create()
    {
       
        $seasons = Season::all();
        return view('product.create',['seasons'=> $seasons]);

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
       $product->image = $request->image;
        $product->price = $request->price;
        $product->concentration = $request->concentration;
        $product->idSeason = $request->idSeason;


        if ($request->hasFile('image')) {
            // Generar un nombre de archivo único basado en la marca de tiempo y la extensión original
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
        
            // Almacenar la imagen en la carpeta 'public/product'
            $request->file('image')->storeAs('public/product', $imageName);
        
            // Asignar el nombre del archivo al atributo 'image' del modelo de producto
            $product->image = $imageName; // Almacena solo el nombre del archivo
        }
        
        

        

        $product -> save();

        return redirect()->route('product.index',$product);

        
    }
  
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
  
     public function show($id)
     {
         // Obtener el producto con el ID proporcionado
         $product = Product::find($id);
 
         if (!$product) {
             // Manejar el caso en que el producto no se encuentre
             abort(404);
         }
 
         return view('product.show', compact('product'));
     }
    
      
/*         return view('product.show', ['product' => $product]); */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
     
        $product->name = $request->name;
        $product->description = $request->description;
        $product->image = $request->image;
        $product->price = $request->price;
        $product->concentration = $request->concentration;
        $product->idSeason = $request->idSeason;

        
    if ($request->hasFile('image')) {
        // Eliminar la imagen actual (opcional) si lo deseas
        Storage::delete('public/' . $product->image);

        // Guardar la nueva imagen
        $imagePath = $request->file('image')->store('product', 'public');
        $product->image = $imagePath;
    }
    

    $product->save();

    return redirect()->route('product.index')->with('success', 'Producto actualizado correctamente');
        
    }

    public function edit(Product $product){

        $seasons = Season::all();

        return view('product.edit', compact('product', 'seasons'));

       
     }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return back()->with('succes','Registro eliminado correctamente');
    }
}

  //INSERTAR PDF
       /*  $img= $request->file("imagen");
        $nombreArchivo= "pdf_".time().".".$img->guessExtension();
        $request-> file("imagen")->storeAs('public/imagenes', $nombreArchivo);
        $producto -> imagen = $nombreArchivo;

        $producto->precio= $request->precio;
        $producto->idTemporada = $request->idTemporada; */
