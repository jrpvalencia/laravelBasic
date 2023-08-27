@extends('layouts.plantilla')

@section('content')
    
    <h1>forma de pago</h1>

<form action="{{ route('typePay.update', ['typePay' => $typePay]) ,$typePay->id }}" method="POST">


    @csrf
    @method('put')
  
<label>
    nombre
    <br>
    <input type="text" name="name" value="{{$typePay->name}}">
</label>

<button type="submit">Actualizar</button>
</form>

@endsection