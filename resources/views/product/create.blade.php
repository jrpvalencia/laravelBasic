@extends('layouts.plantilla')


@section('content')
    <div class="container">
        <div class="form-content">
            <h1 id="title">Productos</h1>

            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group">




                    <div class="input-field" id="nameId">
                        <input type="text" name="name" placeholder="name">
                    </div>

                    <div class="input-field">


                        <input type="text" name="description" placeholder="Descripción">


                    </div>


                    <div class="input-field">


                        <input type="file" name="image" placeholder="Imagen">

                    </div>

                    <div class="input-field">

                        <input type="tel" name="price" placeholder="Precio">

                    </div>

                    <div class="input-field">


                        <input type="number" name="concentration" placeholder="Concentración">

                    </div>

                    <div class="input-field">

                        <select name="idSeason" >
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
