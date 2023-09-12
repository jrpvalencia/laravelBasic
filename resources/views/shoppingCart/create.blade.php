@extends('layouts.plantilla')

@section('content')
    <div class="container">
        <div class="form-content">
            <h1 id="title">Carrito de compra</h1>

            <form action="{{ route('shoppingCart.store') }}" method="POST">

                @csrf
                <div class="input-group">



                    <div class="input-field select-field">
                        <select name="idUser" class="styled-select">
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->id }} {{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="input-field select-field">
                        <select name="idProduct" class="styled-select">
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}">{{ $product->id }} {{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="input-field">
                        <input type="number" name="product_quantity">
                    </div>


                    <div class="btn-field">
                        <button id="singUp" type="submit">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
