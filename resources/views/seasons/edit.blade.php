@extends('layouts.plantilla')

@section('content')
    <div class="container">
        <div class="form-content">
            <h1 id="title">Temporada</h1>

            <form action="{{ route('season.update', ['season' => $season->id]) }}" method="POST">


                @csrf
                @method('put')
                <div class="input-group">


                    <div class="input-field">
                        <input type="text" name="name" value="{{ $season->name }}">
                    </div>

                    <div class="btn-field">
                        <button id="singUp" type="submit">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
