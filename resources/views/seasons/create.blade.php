@extends('layouts.plantilla')

@section('content')
<h1>Crear temporada</h1>

<form action="{{ route('temporadasStore') }}" method="POST">

    @csrf
    
<label>
    Nombre:
    
    <br>
    <input type="text" name="name">
</label>
<br>
<button type="submit">Enviar:</button>
</form>

@endsection