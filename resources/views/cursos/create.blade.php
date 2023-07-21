@extends('layouts.plantilla')

@section('content')
    
    <h1>Motivo Pqr</h1>

<form action="{{ route('cursos.store') }}" method="POST" enctype="multipart/form-data">

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

<label>
    Adjuntar archivo PDF
    <br>
    <input type="file" name="urlPdf" accept="pdf/*">
</label>

<button type="submit">Enviar formulario</button>
</form>

@endsection