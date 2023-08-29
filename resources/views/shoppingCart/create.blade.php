@extends('layouts.plantilla')

@section('content')
    
    <h1>Carrito de compra</h1>

<form action="{{ route('shoppingCart.store') }}" method="POST">

    @csrf
    
<label>
    id persona
    <br>
    <select name="idUser">
    @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->id }} {{ $user->name }}</option>
            @endforeach
    </select>
   
</label>
<br>
<label>
    id producto
    <br>
    <select name="idProduct">
    @foreach($products as $product)
                <option value="{{ $product->id }}">{{ $product->id }} {{ $product->name }}</option>
            @endforeach
    </select>
</label>
<br><br>
<label>
    cantidad de producto
    <br>
    <input type="number" name="product_quantity">
    
</label>

<button type="submit">Enviar formulario</button>
</form>

@endsection