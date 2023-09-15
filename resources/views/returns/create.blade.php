@extends('layouts.formulario')

@section('content')
    <div class="container">
        <div class="form-content">
            <h1 id="title">Devoluciones</h1>

            <form action="{{ route('returns.store') }}" method="POST">

                @csrf
                <div class="input-group">


                    <div class="input-field">
                        <input type="text" name="reason" placeholder="motivo">
                    </div>

                    <div class="input-field select-field">
                        <select name="idOrder" class="styled-select">
                            @foreach ($orders as $order)
                                <option value="{{ $order->id }}">{{ $order->id }} {{ $order->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="input-field select-field">
                        <select name="idPqr" class="styled-select">
                            @foreach ($pqrs as $pqr)
                                <option value="{{ $pqr->id }}">{{ $pqr->id }} {{ $pqr->name }}</option>
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
