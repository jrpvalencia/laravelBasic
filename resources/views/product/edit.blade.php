@extends('layouts.plantilla')

@section('content')

    <div class="container">
        
            <h1 class="mt-4">Productos<i class="fas fa-box-open"></i></h1>

            <form action="{{ route('product.update') }}" method="POST" enctype="multipart/form-data">

                @csrf
              
                <div class="mb-3">

                    <input type="hidden" name="id" value="{{ $product['id'] }}">

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre del Producto:</label>
                        <input type="text"  class="form-control" name="name" value="{{ $product['name'] }}">
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción <i class="fas fa-info-circle"></i>:</label>
                        
                        <input type="text" name="description" value="{{ $product['description'] }}">
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Imagen:</label>
                        <input type="file" name="image" value="{{ $product['image'] }}">
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Precio:</label>

                        <input type="tel" name="price" value="{{ $product['price'] }}">
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Concentracion:</label>

                        <input type="number" name="concentration" value="{{ $product['concentration'] }}">
                    </div>

                    <div class="input-field select-field">
                        <label for="idRol" class="form-label">Rol:</label>
                        <select name="idSeason" class="form-control">
                            @foreach ($temporadas as $seasons)
                                <option value="{{ $seasons['id'] }}" {{ $idSeason == $seasons['id'] ? 'selected' : '' }}>
                                    {{ $seasons['name'] }}
                                </option>
                            @endforeach
                        </select>
                        
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-warning">Editar Producto</button>
                    </div>
                </div>
            </form>
        
    </div>
@endsection
