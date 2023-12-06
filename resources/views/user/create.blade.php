@extends('layouts.plantilla')


@section('head')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registro</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="{{asset('css/login2.css')}}">

@endsection()
@section('content')

<div class="body">
    <div class="container login-container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <img src="{{asset('img/logo.jpeg')}}" alt="Logo de Perfumería" class="perfume-image">
                <h2 class="mb-4">Crear cuenta</h2>
                <form action="{{ route('register') }}" method="POST">
                 @csrf

                <div class="mb-3">
                    <label for="Nombre" class="form-label"></label>
                    <input type="text"  class="form-control" name="name" placeholder="Nombre">
                </div>

                <div class="mb-3">
                    <label for="Nombre" class="form-label"></label>
                    <input type="text" class="form-control" name="lastName" placeholder="Apellido">
                </div>

                <div class="mb-3">
                    <label for="Nombre" class="form-label"></label>
                    <input type="text" class="form-control" name="typeDocument" placeholder="Tipo de documeto">
                </div>

                <div class="mb-3">
                    <label for="Nombre" class="form-label"></label>
                    <input type="tel" class="form-control" name="document" placeholder="documeto">
                </div>

                <div class="mb-3">
                    <label for="Nombre" class="form-label"></label>
                    <input type="tel" class="form-control" name="phone" placeholder="Telefono">
                </div>

                <div class="mb-3">
                    <label for="archivo" class="form-label"></label>
                    <select name="idRol" class="form-control">
                        @foreach ($roles as $role)
                            <option value="{{ $role['id'] }}">{{ $role['name'] }}</option>
                        @endforeach
                    </select>
                </div>

               
                <div class="input-container">
                    <label for="Nombre" class="form-label"></label>
                    <input type="email" class="form-control" name="email" placeholder="email">
                </div>
                <br>

                <div class="input-container">
                    <label for="Nombre" class="form-label"></label>
                    <input type="password" class="form-control" name="password" placeholder="contraseña">
                </div>

                <br>

                <div class="">
                    <button type="submit" class="btn btn-primary btn-lg btn-block btn-login">Registrarte</button>
                </div>
                
                <div class="social-buttons mt-4">
                    <span class="social-button">
                        <i class="fab fa-facebook-f social-icon"></i>
                    </span>
                    <span class="social-button">
                        <i class="fab fa-google social-icon"></i>
                    </span>
                    <span class="social-button">
                        <i class="fab fa-twitter social-icon"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

@endsection()
<!-- Asegúrate de incluir jQuery antes de estos scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        // Validar que el campo de teléfono solo contenga números
        $('input[name="phone"]').on('input', function () {
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
        });

        // Validar que el campo de documento solo contenga números
        $('input[name="document"]').on('input', function () {
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
        });

        // Validar el campo de contraseña
        $('input[name="password"]').on('input', function () {
            const password = $(this).val();
            const passwordError = $('#passwordError');

            if (password.length >= 8) {
                passwordError.text('');
                $(this).removeClass('is-invalid');
            } else {
                passwordError.text('La contraseña debe tener al menos 7 caracteres.');
                $(this).addClass('is-invalid');
            }
        });
    });
</script>
