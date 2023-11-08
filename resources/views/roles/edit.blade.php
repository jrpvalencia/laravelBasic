@extends('layouts.formulario')

@section('content')
    <div class="container">
        <div class="form-content">
            <h1 class="mt-4">Rol</h1>

            <form action="{{ route('rol.update')}}" method="POST">

                @csrf
             
                <div class="mb-3">

                    <input type="hidden" name="id" value="{{ $rol['id']}}">
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Nombre:</label>
                        <input type="text" name="name" value="{{ $rol['name'] }}">
                    </div>

                    <div class="btn-field">
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
