@extends('layouts.plantilla')

@section('content')
    
    <h1>Pedido</h1>

<form action="{{ route('order.update', $order) }}" method="POST">

    @csrf
    @method('put')
  <label>
    fecha de orden
    <br>
    <input type="date" name="dateOrder" value="{{$order->dateOrder}}">
</label>
<br> <br>
<label>
  id carrito
    <br>
    

    <select name="idShoppingCart" value="{{$order->idShoppingCart}}">
      @foreach($shoppingCarts as $shoppingCart)
                  <option value="{{ $shoppingCart->id }}">{{ $shoppingCart->id }} {{ $shoppingCart->name }}</option>
              @endforeach
      </select>
</label>

<button type="submit">Enviar formulario</button>
</form>

@endsection