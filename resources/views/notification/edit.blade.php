@extends('layouts.plantilla')

@section('content')
    
    <h1>Pago</h1>

<form action="{{ route('notification.update', $notification) }}" method="POST">

    @csrf
    @method('put')

    <label>
        mensaje
        <br>
        <input type="text" name="mensaje"  value="{{$notification->mensaje}}">
    </label>
    <br>
  <label>


<button type="submit">Enviar formulario</button>
</form>

@endsection