@extends('layout.plantilla')

@section('content')
<h1>Crear producto</h1>

<form action="{{ route('productosStore') }}" method="POST">

    @csrf
    
<label>
    Nombre:
    
    <br>
    <input type="text" name="nombre">
</label>
<br>
<label>
    descripcion:
    <br>
    <input type="text" name="descripcion">
</label>
<br>
<label>
    imagen:
    <br>
    <input type="text" name="imagen">
</label>
<br>
<label>
    precio:
    <br>
    <input type="number" name="precio">
</label>
<br>
<label>
    idTemporada:
    <br>
    <input type="number" name="idTemporada">
</label>
<br><br>
<button type="submit">Enviar:</button>
</form>

@endsection