@extends('layouts.plantilla')
@section('content')
    <div class="container">

        <h1 class="mt-4"> Usuario </h1>
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="mb-3">


                <div class="mb-3">
                    <label for="Nombre" class="form-label">Nombre:</label>
                    <input type="text"  class="form-control" name="name" placeholder="Nombre">
                </div>

                <div class="mb-3">
                    <label for="Nombre" class="form-label">Apellido:</label>
                    <input type="text" class="form-control" name="lastName" placeholder="Apellido">
                </div>

                <div class="mb-3">
                    <label for="Nombre" class="form-label">Tipo de documeto:</label>
                    <input type="text" class="form-control" name="typeDocument" placeholder="Tipo de documeto">
                </div>

                <div class="mb-3">
                    <label for="Nombre" class="form-label">Documeto:</label>
                    <input type="tel" class="form-control" name="document" placeholder="documeto">
                </div>

                <div class="mb-3">
                    <label for="Nombre" class="form-label">Telefono:</label>
                    <input type="tel" class="form-control" name="phone" placeholder="Telefono">
                </div>

                <div class="input-field select-field">
                    <label for="archivo" class="form-label">Rol:</label>
                    <select name="idRol" class="form-control">
                        @foreach ($rol as $rols)
                            <option value="{{ $rols->id }}">{{ $rols->name }}</option>
                        @endforeach
                    </select>
                </div>

<br>
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="email">
                </div>

                <div class="mb-3">
                    <label for="Nombre" class="form-label">contraseña:</label>
                    <input type="password" class="form-control" name="password" placeholder="contraseña">
                </div>
                <div class="btn-field">
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
