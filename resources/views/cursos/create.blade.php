@extends('layouts.plantilla')

@section('content')
    
    <h1>Motivo Pqr</h1>

<form action="{{ route('cursos.store') }}" method="POST">

    @csrf
    
<label>
    Motivo:
    <br>
    <input type="text" name="name">
</label>
<br><br>
<label>
    idPersona:
    <br>
    <input type="text" name="descripcion">
</label>

<button type="submit">Enviar formulario</button>
</form>

@endsection