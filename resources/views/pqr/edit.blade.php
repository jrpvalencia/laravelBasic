@extends('layouts.plantilla')

@section('content')
    <div class="container">
        <div class="form-content">
            <h1 id="title">Pqr</h1>

            <form action="{{ route('pqr.update', $pqr) }}" method="POST">

                @csrf
                @method('put')
                <div class="input-group">

                    <div class="input-field">
                        <input type="text" name="reason" value="{{ $pqr->reason }}">
                    </div>

                    <div class="input-field select-field">
                        <select name="idUser" value="{{ $pqr->idUser }}" class="styled-select">
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

            <div></div>

        </div>
    @endsection
