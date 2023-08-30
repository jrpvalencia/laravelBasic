@extends('layouts.plantilla')

@section('content')
<h1>Crear rol</h1>

<form action="{{ route('rol.update', ['rol' => $rol]) ,$rol->id }}}}" method="POST">

    @csrf
    @method('put')
    
<label>
    Nombre:
    
    <br>
    <input type="text" name="name" value="{{$rol->name}}">
</label>
<br>
<button type="submit">Enviar</button>
</form>

@endsection