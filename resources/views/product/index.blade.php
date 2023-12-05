@extends('layouts.plantilla')

    @section('title','Contacto - Perfumería')
    
    @section('head')
   
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
@endsection()
    
@section('content')

    <main class="table">
        <section class="table__header">
            <h1>Registros</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
            
            </div>
            <a href="{{ route('product.create') }}">
                <p class="add-button">Agregar </p>
            </a>

        
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th class="icon-arrow"> Id </th>
                        <th class="icon-arrow"> Nombre</th>
                        <th class="icon-arrow"> Descripcion</th>
                        <th class="icon-arrow"> Imagen </th>
                        <th class="icon-arrow"> Precio</th>
                        <th class="icon-arrow"> Concentracion </th>
                        <th class="icon-arrow"> Temporada</th>
                        <th class="icon-arrow"> Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $products)
                        <tr>
                            <td>{{ $products['id'] }} </td>
                            <td>{{ $products['name'] }}</td>
                            <td>{{ $products['description'] }}</td>
                             <td>
                        <img src="{{$products['image'] }}" alt="Imagen del Producto">
                    </td> 

                            <td>{{ $products['price'] }}</td>
                            <td>{{ $products['concentration'] }}</td>

                            <td>{{ $products['temporada']['name'] }}</td>

                            <td>
                                <div class="button-group">
                                    <a class="delete-button" href="{{ route('product.destroy', $products['id']) }}">x </a>
                                  
                                <a href="{{ route('product.edit', $products['id']) }}" class="edit-button"><i class='bx bxs-edit-alt'></i></a>
                                
                               
                                </div>
                            </td>


                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>
@endsection()
{{-- <img src="http://localhost/laravelBasic/storage/app/public/product/1693764410.jpeg" alt=""> --}}
{{-- php artisan storage:link --}}
{{--  <p>URL de la imagen: {{ asset('storage/product/' . $products->image) }}</p> --}}
{{-- <img src="http://localhost/laravelBasic/storage/app/public/product/{{ $products->image }}" alt="Imagen de producto"> --}}
