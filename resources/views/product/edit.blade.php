@extends('layouts.formulario')

@section('content')
    <div class="container">
        <div class="form-content">
            <h1 id="title">Productos</h1>

            <form action="{{ route('product.update', $product) }}" method="POST">
                @csrf
                @method('put')
                <div class="input-group">


                    <div class="input-field">
                        <input type="text" name="name" value="{{ $product->name }}">
                    </div>

                    <div class="input-field">
                        <input type="text" name="description" value="{{ $product->description }}">
                    </div>

                    <div class="input-field">
                        <input type="file" name="image" value="{{ $product->image }}">
                    </div>

                    <div class="input-field">
                        <input type="tel" name="price" value="{{ $product->price }}">
                    </div>

                    <div class="input-field">
                        <input type="number" name="concentration" value="{{ $product->concentration }}">
                    </div>

                    <div class="input-field select-field">
                        <select name="idSeason" value="{{ $product->idSeason }}" class="styled-select">
                            @foreach ($seasons as $season)
                                <option value="{{ $season->id }}">{{ $season->id }} {{ $season->name }}</option>
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
