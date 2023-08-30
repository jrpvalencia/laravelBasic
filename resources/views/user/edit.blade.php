@extends('layouts.plantilla')

@section('content')
    
    <h1>Pedido</h1>

<form action="{{ route('user.update', $user) }}" method="POST">

    @csrf
    @method('put')
  <label>
    Nombre
    <br>
    <input type="text" name="name"  value="{{$user->name}}">
</label>
<br> <br>
<label>
    Apellido
    <br>
    <input type="text" name="lastName"  value="{{$user->lastName}}">
</label>
<br> <br>
<label>
Tipo de documeto
    <br>
    <input type="text" name="typeDocument"value="{{$user->typeDocument}}">
</label>
<br> <br>
<label>
    documeto
        <br>
        <input type="tel" name="document"value="{{$user->document}}">
    </label>
    <br> <br>
    <label>
        Telefono
            <br>
            <input type="tel" name="phone"value="{{$user->phone}}">
        </label>
        <br> <br>
        
    <label>
        Rol
        <br>
    <select name="idRol" value="{{$user->idRol}}">
      @foreach($rol as $rols)
                  <option value="{{ $rols->id }}">{{ $rols->id }} {{ $rols->name }}</option>
              @endforeach
      </select>
</label>
<br>

<label>
    email
        <br>
        <input type="email" name="email"value="{{$user->email}}">
    </label>
    <br> <br>
    <label>
        contraseña
            <br>
            <input type="password" name="password"value="{{$user->password}}">
        </label>
        <br> <br>

<button type="submit">Enviar formulario</button>
</form>

@endsection