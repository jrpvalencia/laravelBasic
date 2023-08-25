@extends('layouts.plantilla')

@section('content')
    
    <h1>forma de pago</h1>

<form action="{{ route('typePay.store') }}" method="POST">

    @csrf
  
<label>
    nombre
    <br>
    <input type="text" name="name">
</label>

<button type="submit">Enviar formulario</button>
</form>

@endsection