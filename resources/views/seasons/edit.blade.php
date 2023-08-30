@extends('layouts.plantilla')

@section('content')
<h1>Crear temporada</h1>

<form action="{{ route('season.update', ['season' => $season]) ,$season->id }}}}" method="POST">

   
    @csrf
    @method('put')
<label>
    Nombre:
    
    <br>
    <input type="text" name="name" value="{{$season->name}}">
</label>
<br>
<button type="submit">Enviar:</button>
</form>

@endsection