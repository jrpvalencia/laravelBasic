

@extends('layouts.plantilla')

@section('content')
    
    <h1>Pedido</h1>

<form action="{{ route('pedido.store') }}" method="POST">

    @csrf
  <label>
    concentracionProducto
    <br>
    <input type="number" name="concentracionProducto">
</label>
<br> <br>
<label>
  id carrito
    <br>
    <input type="number" name="idCarrito">
</label>

<button type="submit">Enviar formulario</button>
</form>

@endsection