@extends('layouts.plantilla')

@section('content')
    <div class="container">
        <div class="form-content">
            <h1 id="title">Pago</h1>

            <form action="{{ route('pay.update', $pay) }}" method="POST">

                @csrf
                @method('put')
                <div class="input-group">

                    <div class="input-field select-field">
                        <select name="idOrder" value="{{ $pay->idOrder }}" class="styled-select">
                            @foreach ($orders as $order)
                                <option value="{{ $order->id }}">{{ $order->id }} {{ $order->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="input-field select-field">
                        <select name="idTypePay" value="{{ $pay->idTypePay }}" class="styled-select">
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
        </div>
    </div>
@endsection
