@extends('layouts.formulario')

@section('content')
    <div class="container">
        <div class="form-content">
            <h1 id="title">Pago</h1>

            <form action="{{ route('pay.store') }}" method="POST">

                @csrf
                <div class="input-group">

                    <div class="input-field select-field">
                        <select name="idOrder" class="styled-select">
                            @foreach ($orders as $order)
                                <option value="{{ $order->id }}">{{ $order->id }} {{ $order->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="input-field select-field">
                        <select name="idTypePay" class="styled-select">
                            @foreach ($typePays as $typePay)
                                <option value="{{ $typePay->id }}">{{ $typePay->id }} {{ $typePay->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="btn-field">
                        <button id="singUp" type="submit">Enviar</button>
                    </div>
                </div>
            </form>
            </dir>
        </div>
    @endsection
