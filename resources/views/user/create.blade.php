@extends('layouts.plantilla')

@section('content')
    
    <h1>Pedido</h1>

<form action="{{ route('user.store') }}" method="POST">

    @csrf
  <label>
    Nombre
    <br>
    <input type="text" name="name">
</label>
<br> <br>
<label>
    Apellido
    <br>
    <input type="text" name="lastName">
</label>
<br> <br>
<label>
Tipo de documeto
    <br>
    <input type="text" name="typeDocument">
</label>
<br> <br>
<label>
    documeto
        <br>
        <input type="tel" name="document">
    </label>
    <br> <br>
    <label>
        Telefono
            <br>
            <input type="tel" name="phone">
        </label>
        <br> <br>
        
    <label>
        Rol
        <br>
    <select name="idRol">
      @foreach($rol as $rols)
                  <option value="{{ $rols->id }}">{{ $rols->id }} {{ $rols->name }}</option>
              @endforeach
      </select>
</label>
<br>

<label>
    email
        <br>
        <input type="email" name="email">
    </label>
    <br> <br>
    <label>
        contraseña
            <br>
            <input type="password" name="password">
        </label>
        <br> <br>

<button type="submit">Enviar formulario</button>
</form>

@endsection