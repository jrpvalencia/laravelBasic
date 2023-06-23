@extends('layouts.plantilla')

@section('content')
    
    <h1>Carrito de compra</h1>

<form action="{{ route('carritoDeCompra.store') }}" method="POST">

    @csrf
    
<label>
    id compra agrega
    <br>
    <input type="number" name="idCompraAgrega">
</label>
<br><br>
<label>
    cantidad de producto
    <br>
    <input type="number" name="cantidadProducto">
    
</label>

<button type="submit">Enviar formulario</button>
</form>

@endsection