@extends('layouts.plantilla')

@section('content')
    
    <h1>Pago</h1>

<form action="{{ route('pay.update', $pay) }}" method="POST">

    @csrf
    @method('put')
  <label>
    id pedido
    <br>
    <select name="idOrder" value="{{$pay->idOrder}}">
        @foreach($orders as $order)
                    <option value="{{ $order->id }}">{{ $order->id }} {{ $order->name }}</option>
                @endforeach
        </select>
</label>
<br> <br>
<label>
    forma de pago id
    <br>
    <select name="idTypePay" value="{{$pay->idTypePay}}">
        @foreach($typePays as $typePay)
                    <option value="{{ $typePay->id }}">{{ $typePay->id }} {{ $typePay->name }}</option>
                @endforeach
        </select>
</label>

<button type="submit">Enviar formulario</button>
</form>

@endsection