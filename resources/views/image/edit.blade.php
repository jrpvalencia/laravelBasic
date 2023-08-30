@extends('layouts.plantilla')

@section('content')
    
    <h1>Imagen</h1>

    <form action="{{ route('image.update', ['images_id' => $image->images_id, 'images_type' => $image->images_type]) }}" method="POST">

        @csrf
        @method('put')
      
        <label>
            Url
            <br>
            <input type="text" name="url" value="{{ $image->url }}">
        </label>
        <br>
        <label>
            imagenid
            <br>
            <input type="number" name="images_id" value="{{ $image->images_id }}">
        </label>
        <br>
        <label>
            Tipo de imagen
            <br>
            <input type="text" name="images_type" value="{{ $image->images_type }}">
        </label>
        <br><br>
        <button type="submit">Enviar formulario</button>
    </form>

@endsection

