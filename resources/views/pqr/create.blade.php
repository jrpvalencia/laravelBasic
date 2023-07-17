@extends('layouts.plantilla')

@section('content')
    


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Motivo Pqr</h1>

<form action="{{ route('pqr.store') }}" method="POST">

    @csrf
    
<label>
    Motivo:
    <br>
    <input type="text" name="motivoPqr">
</label>
<br><br>
<label>
    idPersona:
    <br>
    <input type="text" name="idPersona">
</label>

<button type="submit">Enviar formulario</button>
</form>



</body>
</html>
@endsection





