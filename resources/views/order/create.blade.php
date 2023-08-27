@extends('layouts.plantilla')

@section('content')
    
    <h1>Pedido</h1>

<form action="{{ route('order.store') }}" method="POST">

    @csrf
  <label>
    fecha de orden
    <br>
    <input type="date" name="dateOrder">
</label>
<br> <br>
<label>
  id carrito
    <br>
    

    <select name="idShoppingCart">
      @foreach($shoppingCarts as $shoppingCart)
                  <option value="{{ $shoppingCart->id }}">{{ $shoppingCart->id }} {{ $shoppingCart->name }}</option>
              @endforeach
      </select>
</label>

<button type="submit">Enviar formulario</button>
</form>

@endsection