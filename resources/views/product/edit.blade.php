@extends('layouts.plantilla')

@section('content')
<h1>Crear rol</h1>

<form action="{{ route('product.update', $product) }}" method="POST" >
    @csrf
    @method('put')

    <label>
        Nombre:
        <br>
        <input type="text" name="name"  value="{{$product->name}}">
    </label>
    <br>
    <label>
        Descripción:
        <br>
        <input type="text" name="description" value="{{$product->description}}">
    </label>
    <br>
    <label>
        Imagen:
        <br>
        <input type="file" name="image" value="{{$product->image}}"> 
    </label>
    <br>
    <label>
        Precio:
        <br>
        <input type="tel" name="price" value="{{$product->price}}">
    </label>
    <br>
    <label>
        Concentración:
        <br>
        <input type="number" name="concentration" value="{{$product->concentration}}">
    </label>
    <br>
    <label>
        Temporada:
        <br>
        <select name="idSeason" value="{{$product->idSeason}}">
            @foreach($seasons as $season)
                <option value="{{ $season->id }}">{{ $season->id }} {{ $season->name }}</option>
            @endforeach
        </select>
    </label>
    <br><br>
<button type="submit">Enviar:</button>
</form>

@endsection