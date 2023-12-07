@extends('layouts.plantilla')

@section('title','Formas de Pago')
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/pago.css')}}">
@endsection()

@section('content')
    <div class="container1">
        <h1>Formas de Pago</h1>
        
        <form action="{{ route('order.store') }}" method="POST">

            @csrf
            <input type="hidden" name="idShoppingCart" value="{{ $idCarrito }}">
            <input type="hidden" name="totalCarrito" value="{{ $totalCarrito }}">
            <div class="metodo-pago">
                <div class="icono"><i class="fas fa-credit-card"></i></div>
                {{ $formattedData[1]['name'] }}
                <p>Paga con tu tarjeta de crédito Visa, MasterCard, o American Express.</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="metodo_pago" id="tarjeta" value="{{ $formattedData[1]['id'] }}" required>
                    <label class="form-check-label" for="tarjeta">
                        Seleccionar Tarjeta de Crédito
                    </label>
                </div>
            </div>

            <div class="metodo-pago">
                <div class="icono"><i class="fas fa-money-bill-wave"></i></div>
                {{ $formattedData[2]['name'] }}
                <p>Paga en efectivo al momento de la entrega o en la tienda física.</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="metodo_pago" id="efectivo" value="{{ $formattedData[2]['id'] }}" required>
                    <label class="form-check-label" for="efectivo">
                        Seleccionar Efectivo
                    </label>
                </div>
            </div>

            <div class="metodo-pago">
                <div class="icono"><i class="fas fa-paypal"></i></div>
                {{ $formattedData[3]['name'] }}
                <p>Paga de forma segura a través de tu cuenta PayPal.</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="metodo_pago" id="paypal" value="{{ $formattedData[3]['id'] }}" required>
                    <label class="form-check-label" for="paypal">
                        Seleccionar PayPal
                    </label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Continuar con el Pago</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
@endsection()
