@extends('layouts.formulario')

@section('content')
    <div class="container">
        <div class="form-content">
            <h1 id="title">Pedido</h1>

            <form action="{{ route('order.store') }}" method="POST">

                @csrf
                <div class="input-group">

                    <div class="input-field">
                        <input type="date" name="dateOrder" placeholder="fecha de orden">
                    </div>

                    <div class="input-field select-field">
                        <select name="idShoppingCart" class="styled-select">
                            @foreach ($shoppingCarts as $shoppingCart)
                                <option value="{{ $shoppingCart->id }}">{{ $shoppingCart->id }} {{ $shoppingCart->name }}
                                </option>
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
