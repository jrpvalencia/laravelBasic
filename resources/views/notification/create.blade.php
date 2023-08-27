@extends('layouts.plantilla')

@section('content')
    
    <h1>Pago</h1>

<form action="{{ route('notification.store') }}" method="POST">

    @csrf

    <label>
        motivo
        <br>
        <input type="text" name="mensaje">
    </label>
    <br>
  <label>


<button type="submit">Enviar formulario</button>
</form>

@endsection