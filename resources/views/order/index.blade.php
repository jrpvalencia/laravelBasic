@extends('layouts.plantilla')

    @section('title','Contacto - Perfumería')
    
    @section('head')
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    
@endsection()

@section('content')
<link rel="stylesheet" href="{{ asset('css/carrito.css') }}">

<div class="container3">
<div class="container">
    <div class="cart-items1">


    <h2>Detalles del Carrito de Compras</h2>

    <ul>
      
        <li>Cantidad de Producto: {{ $data['shopping_cart']['product_quantity'] }}</li>
        <li>Tipo de Pago: {{ $data['type_pay']['name'] }}</li>
        <li>Nombre del Producto: {{ $data['shopping_cart']['product']['name'] }}</li>
        <li>Descripción: {{ $data['shopping_cart']['product']['description'] }}</li>

    </ul>

    <h2>Detalles del Usuario</h2>

    <ul>
       
        <li>Nombre: {{ $data['shopping_cart']['user']['name'] }}</li>
        <li>Apellido: {{ $data['shopping_cart']['user']['lastName'] }}</li>
       
    </ul>


    <ul>
       
        <h2>Total del Carrito: ${{ $totalCarrito }}</h2>
       
    </ul>

</div>
</div>
</div>




<style>
  
    h1, h2 {
        border-bottom: 2px solid #333;
        padding-bottom: 5px;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    li {
        margin-bottom: 10px;
    }

    
</style>
@endsection()