@extends('layouts.plantilla')

@section('content')
    <div class="container">
        
            <h1 class="mt-4">Temporada</h1>

            <form action="{{ route('temporadasStore') }}" method="POST">

                @csrf
                <div class="mb-3">


                    <div class="input-field">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" name="name" >
                    </div>

                    <div class="btn-field">
                        <button type="submit" class="btn btn-primary">Enviar:</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
