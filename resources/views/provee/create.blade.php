@extends('layouts.plantilla')

@section('content')
<h1>Crear prove</h1>

<form action="{{ route('provee.store') }}" method="POST">

    @csrf

<label>
    id persona

    <br>
    <input type="number" name="idPersona">
</label>
<br>
<label>
    id producto
    <br>
    <input type="number" name="idProducto">
</label>
<br>
<label>
    fecha entrega
    <br>
    <input type="date" name="fechaEntrega">
</label>

<button type="submit">Enviar:</button>
</form>

@endsection
