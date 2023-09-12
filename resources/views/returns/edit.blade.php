@extends('layouts.plantilla')

@section('content')
    <div class="container">
        <div class="form-content">
            <h1 id="title">Devoluciones</h1>

            <form action="{{ route('returns.update', $returns) }}" method="POST">

                @csrf
                @method('put')
                <div class="input-group">


                    <div class="input-field">
                        <input type="text" name="reason" value="{{ $returns->reason }}">
                    </div>

                    <div class="input-field select-field">
                        <select name="idOrder" value="{{ $returns->idOrder }}" class="styled-select">
                            @foreach ($orders as $order)
                                <option value="{{ $order->id }}">{{ $order->id }} {{ $order->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="input-field select-field">
                        <select name="idPqr" value="{{ $returns->idPqr }}" class="styled-select">
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
