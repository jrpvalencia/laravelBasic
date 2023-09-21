@extends('layouts.formulario')

@section('content')
    <div class="container">
        <div class="form-content">
            <h1 class="mt-4">Productos<i class="fas fa-box-open"></i></h1>

            <form action="{{ route('product.update', $product) }}" method="POST">
                @csrf
                @method('put')
                <div class="input-group">


                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre del Producto:</label>
                        <input type="text"  class="form-control" name="name" value="{{ $product->name }}">
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción <i class="fas fa-info-circle"></i>:</label>
                        
                        <input type="text" name="description" value="{{ $product->description }}">
                    </div>

                    <div class="mb-3">
                        <input type="file" name="image" value="{{ $product->image }}">
                    </div>

                    <div class="mb-3">
                        <input type="tel" name="price" value="{{ $product->price }}">
                    </div>

                    <div class="mb-3">
                        <input type="number" name="concentration" value="{{ $product->concentration }}">
                    </div>

                    <div class="mb-3">
                        <select name="idSeason" value="{{ $product->idSeason }}" class="styled-select">
                            @foreach ($seasons as $season)
                                <option value="{{ $season->id }}">{{ $season->id }} {{ $season->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <button id="singUp" type="submit">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
