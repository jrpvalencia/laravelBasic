@extends('layouts.plantilla')

@section('content')
    
    <h1>Imagen</h1>

<form action="{{ route('image.store') }}" method="POST">

    @csrf
  
<label>
    Url
    <br>
    <input type="text" name="url">
</label>
<label>
    Url
    <br>
    <input type="number" name="images_id">
</label>

<label>
    Url
    <br>
    <input type="text" name="images_type">
</label>


<button type="submit">Enviar formulario</button>
</form>

@endsection