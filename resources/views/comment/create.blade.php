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

<form action="{{ route('comment.store') }}" method="POST">

    @csrf
    
<label>
    <br>
    comment_id:
    <br>
    <input type="number" name="comment_id">
</label>
<br>
<label>
    comment_type:
    <br>
    <input type="text" name="comment_type">
</label>
<br>
<label>
    mensaje:
    <br>
    <input type="text" name="mensaje">
</label>
<br><br>
<label>
    id persona
    <br>
    <select name="idUser">
    @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->id }} {{ $user->name }}</option>
            @endforeach
    </select>
   
</label>

<button type="submit">Enviar formulario</button>
</form>

</body>
</html>
@endsection


