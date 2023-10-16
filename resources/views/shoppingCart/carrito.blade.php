@extends('layouts.plantilla')

@section('title','Mi carrito')

@section('head')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link rel="stylesheet" href="{{asset('css/carrito.css')}}">
@endsection()

@section('content')


  <section class="cart-section">

    <div class="container">
      <div class="cart-items">
@foreach($shoppingCart as $shoppingCarts)
<?php 
// use App\Models\Product;
// $pro=$shoppingCarts->idProduct;
// $product = Product::find($pro);
?>
        <div class="cart-item">
          {{-- <img src="{{ $prod->image }}" alt="Producto 1"> --}}
          <div>
            <h4 class="cart-item-title">Producto 1</h4>
            {{-- <p>{{ $product->price }}</p> --}}
            <button class="btn btn-danger">Eliminar</button>
          </div>
        </div>
@endforeach
        {{-- <div class="cart-item">
          <img src="{{asset('img/producto1.webp')}}" alt="Producto 2">
          <div>
            <h4 class="cart-item-title">Producto 2</h4>
            <p>Precio: $150</p>
            <button class="btn btn-danger">Eliminar</button>
          </div>
        </div>
        <div class="cart-item">
          <img src="{{asset('img/producto1.webp')}}" alt="Producto 3">
          <div>
            <h4 class="cart-item-title">Producto 3</h4>
            <p>Precio: $120</p>
            <button class="btn btn-danger">Eliminar</button>
          </div>
        </div> --}}
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="container">
      <p>Derechos de autor © 2023. Todos los derechos reservados.</p>
    </div>
  </footer>

@endsection()
</html>