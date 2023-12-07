@extends('layouts.plantilla')

    @section('title','Contacto - Perfumería')
    
    @section('head')
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/carrito.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    
@endsection()

@section('content')

    <section class="cart-section">
        <div class="btnCarrito">
            <a href="{{ route('catalogo.index') }}"><button class="btn btn-dark">Continuar Comprando</button></a>
        </div>

        
        <div class="container">
            <div class="cart-items">
                <?php $totalCarrito = 0; ?>
                @forelse($data as $shoppingCartItem)
                    <div class="cart-item">
                        <img src="{{ $shoppingCartItem['product']['image'] }}" class="img-producto">
                        <div>
                            <h4 class="nombre">{{ $shoppingCartItem['product']['name'] }}</h4>
                            <p class="nombre">Precio del producto: $ {{ $shoppingCartItem['product']['price'] }}</p>
                            <p class="nombre">cantidad de productos: {{ $shoppingCartItem['product_quantity'] }}</p>

                            <?php
                            $valor1 = intval($shoppingCartItem['product']['price']);
                            $valor2 = intval($shoppingCartItem['product_quantity']);
                            $precioProducto = $valor1 * $valor2;
                            $totalCarrito += $precioProducto;
                            ?>

                            <p class="nombre">valor de la compra $ {{ $precioProducto }}</p>

                            <a class="btn btn-danger" href="{{ route('shoppingCart.destroy', $shoppingCartItem['id']) }}">Eliminar </a>
                        </div>
                    </div>


                    
                @empty
                    <p>No hay productos en el carrito.</p>
                @endforelse
              
                <h2 class="total">Total del carrito: ${{ $totalCarrito }}</h2>

                
            </div>
        </div>
        @if(count($data) > 0) <!-- Verifica si el array $data tiene elementos -->
        
        <div class="btnCarrito">
            <a href="{{ route('typePay.show', ['idCarrito' => $shoppingCartItem['id'], 'totalCarrito' => $totalCarrito]) }}">
                <button class="btn btn-dark">Finalizar Compra</button>
            </a>
        </div>
    @endif
        
        

        
    </section>
@endsection
