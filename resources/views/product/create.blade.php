@extends('layouts.plantilla')

    @section('title','Contacto - Perfumería')
    
    @section('head')
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Libre+Baskerville&family=Quicksand:wght@300&display=swap"
        rel="stylesheet">



@endsection()

@section('content')


    <div class="container">
        
            <h1 class="mt-4">Crear Producto<i class="fas fa-box-open"></i></h1>

            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
               


                    <div class="mb-3" >
                        <label for="nombre" class="form-label">Nombre del Producto:</label>
                        <input type="text" class="form-control" name="name" placeholder="name" required>
                    </div>
                    

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción </i>:</label>
                        {{-- <input type="text" name="description" placeholder="Descripción"> --}}
                        <textarea class="form-control" id="descripcion" name="description" rows="4" required></textarea>
                    </div>


                 <div class="input-field">
                        <label for="archivo" class="form-label">Subir Archivo <i class="fas fa-upload"></i>:</label>
                        <input type="file"  name="image" placeholder="Imagen" required>
                        <label class="custom-file-label" for="archivo">Selecciona un archivo</label>
                    </div> 

                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio </i>:</label>
                        <input type="tel" class="form-control" name="price" placeholder="Precio"  step="0.01" required>
                    </div>

                    <div class="mb-3">
                        <label for="concentracion" class="form-label">Concentración:</label>
                        <input type="number" class="form-control" name="concentration" placeholder="Concentración" required>
                    </div>

                    
                     <div class="mb-3">
                        <label for="archivo" class="form-label" ></label>
                        <select name="idSeason" class="form-control" >
                            @foreach ($temporadas as $seasons)
                                <option value="{{ $seasons['id']}}">{{ $seasons['name'] }}</option>
                            @endforeach
                        </select>
                    </div> 
                        

                        <button type="submit" class="btn btn-primary">Crear Producto </i></button>

                    
                </div>


            </form>


        </div>

    </div>
    @endsection()

