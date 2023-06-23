@extends('layouts.plantilla')

@section('content')
    
    <h1>Pago</h1>

<form action="{{ route('pago.store') }}" method="POST">

    @csrf
  <label>
    id pedido
    <br>
    <input type="number" name="idPedido">
</label>
<br> <br>
<label>
    forma de pago id
    <br>
    <input type="number" name="idFormaDePago">
</label>

<button type="submit">Enviar formulario</button>
</form>

@endsection