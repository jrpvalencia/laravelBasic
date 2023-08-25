@extends('layouts.plantilla')

@section('content')
<h1>Crear rol</h1>

<form action="{{ route('rolesStore') }}" method="POST">

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