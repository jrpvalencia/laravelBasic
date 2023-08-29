@extends('layouts.plantilla')

@section('content')
    
    <h1>Pago</h1>

<form action="{{ route('notificationOrder.store') }}" method="POST">

    @csrf

    <label>
        motivo
        <br>
        <input type="text" name="mensaje">
    </label>
    <br>
  <label>
    id pedido
    <br>
    <select name="idOrder">
        @foreach($orders as $order)
                    <option value="{{ $order->id }}">{{ $order->id }} {{ $order->name }}</option>
                @endforeach
        </select>
</label>
<br> <br>


<button type="submit">Enviar formulario</button>
</form>

@endsection