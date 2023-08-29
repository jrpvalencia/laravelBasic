@extends('layouts.plantilla')

@section('content')
    
    <h1>Devoluciones</h1>

<form action="{{ route('returns.store') }}" method="POST">

    @csrf
  
<label>
    motivo
    <br>
    <input type="text" name="reason">
</label>
<br><br>
<label>
    idPedido
    <br>
    <select name="idOrder">
        @foreach($orders as $order)
                    <option value="{{ $order->id }}">{{ $order->id }} {{ $order->name }}</option>
                @endforeach
        </select>
</label>
<br><br>
<label>
    idPqr
    <br>
    <select name="idPqr">
        @foreach($pqrs as $pqr)
                    <option value="{{ $pqr->id }}">{{ $pqr->id }} {{ $pqr->name }}</option>
                @endforeach
        </select>
</label>

<button type="submit">Enviar formulario</button>
</form>

@endsection