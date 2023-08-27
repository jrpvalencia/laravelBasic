@extends('layouts.plantilla')

@section('content')
<h1>Crear producto</h1>

<form action="{{ route('producto.store') }}" method="POST" enctype="multipart/form-data">

    @csrf

<label>
    Nombre:

    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    descripcion:
    <br>
    <input type="text" name="description">
</label>
<br>
<label>
    imagen:
    <br>
    <input type="file" name="image" /*accept="pdf/*"*/>
</label>
<br>
<label>
    precio:
    <br>
    <input type="number" name="price">
</label>
<br>
<label>
    concentracion:
    <br>
    <input type="number" name="concentration">
</label>
<br>
<label>
    idTemporada:
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

