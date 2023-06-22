<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Crear producto</h1>

<form action="{{ route('productosStore') }}" method="POST">

    @csrf
    
<label>
    Nombre:
    <br>
    <input type="text" name="nombre">
</label>
<br>
<label>
    descripcion:
    <br>
    <input type="text" name="descripcion">
</label>
<br>
<label>
    imagen:
    <br>
    <input type="text" name="imagen">
</label>
<br>
<label>
    precio:
    <br>
    <input type="number" name="precio">
</label>
<br>
<label>
    idTemporada:
    <br>
    <input type="number" name="idTemporada">
</label>
<br><br>
<button type="submit">Enviar:</button>
</form>



</body>
</html>