@extends('layouts.plantilla')

@section('content')
    
    <h1>Compra agrega</h1>

<form action="{{ route('compraAgrega.store') }}" method="POST">

    @csrf
    
<label>
    id persona
    <br>
    <input type="number" name="idPersona">
</label>
<br><br>
<label>
    id Producto
    <br>
    <input type="number" name="idProducto">
</label>

<button type="submit">Enviar formulario</button>
</form>

@endsection