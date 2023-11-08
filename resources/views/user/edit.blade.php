@extends('layouts.formulario')
@section('content')
    <div class="container">
        <h1 class="mt-4">Usuario</h1>

        <form action="{{ route('user.update') }}" method="POST">
            @csrf

            <div class="mb-3">
                <input type="hidden" name="id" value="{{ $user['id'] }}">

                <div class="mb-3">
                    <label for="Nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" name="name" value="{{ $user['name'] }}">
                </div>

                <div class="mb-3">
                    <label for "Apellido" class="form-label">Apellido:</label>
                    <input type="text" class="form-control" name="lastName" value="{{ $user['lastName'] }}">
                </div>

                <div class="mb-3">
                    <label for="Nombre" class="form-label">Tipo de documento:</label>
                    <input type="text" class="form-control" name="typeDocument" value="{{ $user['typeDocument'] }}">
                </div>

                <div class="mb-3">
                    <label for="Nombre" class="form-label">Documento:</label>
                    <input type="tel" class="form-control" name="document" value="{{ $user['document'] }}">
                </div>

                <div class="mb-3">
                    <label for="Nombre" class="form-label">Teléfono:</label>
                    <input type="tel" class="form-control" name="phone" value="{{ $user['phone'] }}">
                </div>
              

                <div class="input-field select-field">
                    <label for="idRol" class="form-label">Rol:</label>
                    <select name="idRol" class="form-control">
                        @foreach ($roles as $rol)
                            <option value="{{ $rol['id'] }}" {{ $idRol == $rol['id'] ? 'selected' : '' }}>
                                {{ $rol['name'] }}
                            </option>
                        @endforeach
                    </select>
                </div>
                

                <div class="mb-3">
                    <label for="Nombre" class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" value="{{ $user['email'] }}">
                </div>

                <div class="mb-3">
                    <label for="Nombre" class="form-label">Contraseña:</label>
                    <input type="password" class="form-control" name="password" value="">
                </div>

                <div class="btn-field">
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
