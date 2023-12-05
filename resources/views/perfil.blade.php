@extends('layouts.plantilla')

@section('title', 'Contacto - Perfumería')

@section('head')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link
        href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Libre+Baskerville&family=Quicksand:wght@300&display=swap"
        rel="stylesheet">

@endsection()

@section('content')



    <head>

        <title>CodingDung | Profile Template</title>
        <link rel="stylesheet" href="{{ asset('css/perfil.css') }}">
        <link
            href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Libre+Baskerville&family=Quicksand:wght@300&display=swap"
            rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>


    <div class="container light-style flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-4" id="titulos">
            Cuenta de usuario
        </h4>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general">General</a>

                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">


                        <div class="tab-pane fade active show" id="account-general">

                            <form action="{{ route('perfil.Update') }}" method="POST" enctype="multipart/form-data">

                                @csrf

                        
                                <div class="card-body media align-items-center">
                                
                                    @if (isset($user['user']['image']))
                                    <img src="{{ $user['user']['image'] }}" class="img-perfil" alt="Imagen de Perfil">
                                @endif
                                
                                
                                <div class="media-body ml-4">
                                    <label class="btn btn-outline-primary">
                                        Subir nueva foto
                               

                                        <input type="file" name="image" class="account-settings-fileinput">
                                    </label> 
                                  

                                </div>
                                 </div> 
                                <hr class="border-light m-0">





                                    <div class="form-group">
                                        <label class="form-label">Nombre</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $user['user']['name'] ?? '' }}">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Apellido</label>
                                        <input type="text" class="form-control" name="lastName"
                                            value="{{ $user['user']['lastName'] ?? '' }}">
                                    </div>



                                    <div class="form-group">
                                        <label class="form-label">Tipo de documento</label>
                                        <input type="text" class="form-control"
                                            name="typeDocument"value="{{ $user['user']['typeDocument'] ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Documento</label>
                                        <input type="text" class="form-control"
                                            name="document"value="{{ $user['user']['document'] ?? '' }}">
                                    </div>
                                
                                    <div class="form-group">
                                        <label class="form-label">Telefono</label>
                                        <input type="text" class="form-control" name="phone"
                                            value="{{ $user['user']['phone'] ?? '' }}">
                                    </div>
                                    <!-- Agregar un interruptor (switch) en tu formulario -->
                                    <div class="switch-button">
                                        <!-- Checkbox -->
                                        <input type="checkbox" name="activar_validacion" id="activar_validacion"
                                            class="switch-button__checkbox">
                                        <!-- Etiqueta del botón -->
                                        <label for="activar_validacion" class="switch-button__label"></label>
                                        <!-- Texto descriptivo -->
                                        <span>Activar Actualizacion de contraseña</span>
                                    </div>

                                    <!-- Campos de contraseña -->
                                    <div class="form-group" id="currentPasswordSection">
                                        <label class="form-label">Current password</label>
                                        <input type="password" name="current_password"
                                            class="form-control @error('current_password') is-invalid @enderror">
                                        <div id="currentPasswordError" class="invalid-feedback"></div>
                                        <div id="passwordError" class="invalid-feedback"></div>
                                    </div>

                                    <div class="form-group" id="newPasswordSection">
                                        <label class="form-label">New password</label>
                                        <input type="password" name="new_password"
                                            class="form-control @error('new_password') is-invalid @enderror">
                                        <div id="currentPasswordError" class="invalid-feedback"></div>
                                        <div id="passwordError" class="invalid-feedback"></div>
                                    </div>

                                    <div class="form-group" id="repeatPasswordSection">
                                        <label class="form-label">Repeat new password</label>
                                        <input type="password" name="new_password_confirmation"
                                            class="form-control @error('new_password_confirmation') is-invalid @enderror">
                                        <div id="currentPasswordError" class="invalid-feedback"></div>
                                        <div id="passwordError" class="invalid-feedback"></div>
                                    </div>
                                    

                                </div>


                                <div class="center-container">
                                    <button class="btn btn-primary" type="submit">Guardar</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="text-right mt-3">
            {{--  <button type="button" class="btn btn-primary">Save changes</button>&nbsp; --}}
            <button type="button" class="btn btn-default">Cancel</button>
        </div>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"></script>
    <!-- En la sección de scripts de tu vista -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



    <!-- Agregar el script para manejar el interruptor y la validación de contraseña -->
    <script>
        $(document).ready(function() {
            // ...

            // Ocultar y deshabilitar los campos de contraseña al cargar la página
            $('#currentPasswordSection, #newPasswordSection, #repeatPasswordSection').hide().find(':input').prop(
                'disabled', true);

            // Agregar un evento al interruptor para mostrar u ocultar y habilitar o deshabilitar los campos de contraseña
            $('#activar_validacion').change(function() {
                isValidationActive = $(this).is(':checked');

                // Mostrar u ocultar y habilitar o deshabilitar los campos de contraseña según el estado del interruptor
                if (isValidationActive) {
                    $('#currentPasswordSection, #newPasswordSection, #repeatPasswordSection').show().find(
                        ':input').prop('disabled', false);
                } else {
                    $('#currentPasswordSection, #newPasswordSection, #repeatPasswordSection').hide().find(
                        ':input').prop('disabled', true);
                    // Limpiar los estilos y mensajes de error cuando se ocultan los campos
                    clearValidationStyles();
                }
            });

            // Variable para controlar si el usuario está cambiando la contraseña
            var isChangingPassword = false;

            // Variable para activar o desactivar la validación
            var isValidationActive = false;

            // Agregar un evento al interruptor para activar o desactivar la validación de contraseña
            $('#activar_validacion').change(function() {
                isValidationActive = $(this).is(':checked');

                // Limpiar los estilos y mensajes de error cuando se cambia el interruptor
                clearValidationStyles();
            });

            // Agregar un evento al formulario para indicar que se está cambiando la contraseña
            $('form').submit(function() {
                isChangingPassword = false;

                // Limpiar los estilos y mensajes de error cuando se envía el formulario
                clearValidationStyles();
            });

            // Manejar el evento de clic en cualquier campo de contraseña
            $('input[name=new_password], input[name=new_password_confirmation], input[name=current_password]').on(
                'click',
                function() {
                    // Verificar si el interruptor está activado
                    if (isValidationActive) {
                        // El usuario está cambiando la contraseña
                        isChangingPassword = true;
                    } else {
                        // El usuario no quiere cambiar la contraseña, limpiar los estilos y mensajes de error
                        clearValidationStyles();
                    }
                });

            // Manejar el evento de cambio en el campo de contraseña de confirmación
            $('input[name=new_password_confirmation]').on('input', function() {
                // Verificar si el usuario está cambiando la contraseña y si la validación está activa
                if (isChangingPassword && isValidationActive) {
                    validatePasswords();
                }
            });

            // Manejar el evento de cambio en cualquier campo de contraseña
            $('input[name=new_password], input[name=new_password_confirmation], input[name=current_password]').on(
                'input',
                function() {
                    // Verificar si el usuario está cambiando la contraseña y si la validación está activa
                    if (isChangingPassword && isValidationActive) {
                        // Validar las contraseñas solo si la nueva contraseña tiene una longitud válida
                        if ($('input[name=new_password]').val().length >= 8) {
                            validatePasswords();
                        }
                    }
                });

            // Función para validar las contraseñas
            function validatePasswords() {
                var newPassword = $('input[name=new_password]').val();
                var newPasswordConfirmation = $('input[name=new_password_confirmation]').val();

                // Verificar la longitud de la nueva contraseña
                var minLength = 8;
                var isLengthValid = newPassword.length >= minLength;

                // Comparar las contraseñas y actualizar el estilo del campo y el mensaje de error
                if (newPassword === newPasswordConfirmation && isLengthValid) {
                    $('input[name=new_password_confirmation]').removeClass('is-invalid');
                    $('input[name=new_password_confirmation]').addClass('is-valid');
                    $('#passwordError').text(''); // Limpiar el mensaje de error
                } else {
                    $('input[name=new_password_confirmation]').removeClass('is-valid');
                    $('input[name=new_password_confirmation]').addClass('is-invalid');
                    $('#passwordError').text('Las contraseñas no coinciden o no cumplen con la longitud mínima.');
                }
            }

            // Función para limpiar los estilos y mensajes de error
            function clearValidationStyles() {
                $('input[name=new_password_confirmation]').removeClass('is-invalid is-valid');
                $('#passwordError').text('');
            }
        });
    </script>






@endsection()
