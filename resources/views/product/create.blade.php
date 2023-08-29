@extends('layouts.plantilla')

@section('content')
<h1>Crear rol</h1>

<form action="{{ route('product.store') }}" method="POST">
    @csrf

    <label>
        Nombre:
        <br>
        <input type="text" name="name">
    </label>
    <br>
    <label>
        Descripción:
        <br>
        <input type="text" name="description">
    </label>
    <br>
    <label>
        Imagen:
        <br>
        <input type="file" name="image"> 
    </label>
    <br>
    <label>
        Precio:
        <br>
        <input type="tel" name="price">
    </label>
    <br>
    <label>
        Concentración:
        <br>
        <input type="number" name="concentration">
    </label>
    <br>
    <label>
        Temporada:
        <br>
        <select name="idSeason">
            @foreach($seasons as $season)
                <option value="{{ $season->id }}">{{ $season->id }} {{ $season->name }}</option>
            @endforeach
        </select>
    </label>
    <br><br>
<button type="submit">Enviar:</button>
</form>

@endsection