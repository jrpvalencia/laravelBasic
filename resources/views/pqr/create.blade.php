@extends('layouts.plantilla')

@section('content')
    <div class="container">
        <div class="form-content">
            <h1 id="title">Pqr</h1>

            <form action="{{ route('pqr.store') }}" method="POST">

                @csrf
                <div class="input-group">


                    <div class="input-field">
                        <input type="text" name="reason" placeholder="Motivo">
                    </div>

                    <div class="input-field select-field">
                        <select name="idUser" class="styled-select">
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->id }} {{ $user->name }}</option>
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
