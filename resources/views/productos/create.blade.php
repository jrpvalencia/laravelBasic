@extends('layouts.plantilla')

@section('content')
<h1>Crear producto</h1>

<form action="{{ route('producto.store') }}" method="POST" enctype="multipart/form-data">

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
    <input type="file" name="imagen" accept="pdf/*">
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