@extends('layouts.plantilla')

@section('content')
    
    <h1>Devoluciones</h1>

<form action="{{ route('devolucion.store') }}" method="POST">

    @csrf
  
<label>
    motivo
    <br>
    <input type="text" name="motivo">
</label>
<br><br>
<label>
    idPedido
    <br>
    <input type="number" name="idPedido">
</label>
<br><br>
<label>
    idPqr
    <br>
    <input type="number" name="idPqr">
</label>

<button type="submit">Enviar formulario</button>
</form>

@endsection