@extends('layouts.formulario')

@section('content')
    <div class="container">
        <div class="form-content">
            <h1 id="title">Temporada</h1>

            <form action="{{ route('temporadasStore') }}" method="POST">

                @csrf
                <div class="input-group">


                    <div class="input-field">
                        <input type="text" name="name" placeholder="nombre">
                    </div>

                    <div class="btn-field">
                        <button id="singUp" type="submit">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
