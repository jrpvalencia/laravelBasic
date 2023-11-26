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


                                {{--  <div class="card-body media align-items-center">
                                

                                    <img src="{{ asset('storage/product/' . $user->image) }}"  class="img-perfil" >
                                <div class="media-body ml-4">
                                    <label class="btn btn-outline-primary">
                                        Subir nueva foto
                               

                                        <input type="file" name="image" value="{{ $user->image }}"  class="account-settings-fileinput">
                                    </label> &nbsp;
                                  <button type="button" class="btn btn-default md-btn-flat">Reset</button> 

                                </div>
                                 </div> --}}
                                <hr class="border-light m-0">




                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label">Usuario</label>
                                        <input type="text" class="form-control mb-1" name="email"
                                            value="{{ $user['user']['email'] ?? '' }}">
                                    </div>

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
                                        <label class="form-label">E-mail</label>
                                        <input type="text" class="form-control mb-1" name="email"
                                            value="{{ $user['user']['email'] ?? '' }}">
                                        <div class="alert alert-warning mt-3">
                                            Your email is not confirmed. Please check your inbox.<br>
                                            <a href="javascript:void(0)">Resend confirmation</a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Telefono</label>
                                        <input type="text" class="form-control" name="phone"
                                            value="{{ $user['user']['phone'] ?? '' }}">
                                    </div>



                                    <div class="form-group">
                                        <label class="form-label">Current password</label>
                                        <input type="password" name="current_password"
                                            class="form-control @error('current_password') is-invalid @enderror">
                                            <div id="currentPasswordError" class="invalid-feedback"></div>
                                            <div id="passwordError" class="invalid-feedback"></div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">New password</label>
                                        <input type="password" name="new_password"
                                            class="form-control @error('new_password') is-invalid @enderror">
                                            <div id="currentPasswordError" class="invalid-feedback"></div>
                                            <div id="passwordError" class="invalid-feedback"></div>
                                          
                                    </div>

                                    <div class="form-group">
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

    <!-- En la sección de scripts de tu vista -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- En la sección de scripts de tu vista -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- En la sección de scripts de tu vista -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function () {
        // Manejar el evento de cambio en el campo de contraseña de confirmación
        $('input[name=new_password_confirmation]').on('input', function () {
            // Obtener los valores de las contraseñas
            var newPassword = $('input[name=new_password]').val();
            var newPasswordConfirmation = $(this).val();

            // Verificar la longitud de la nueva contraseña
            var minLength = 8;
            var isLengthValid = newPassword.length >= minLength;

            // Comparar las contraseñas y actualizar el estilo del campo y el mensaje de error
            if (newPassword === newPasswordConfirmation && isLengthValid) {
                $(this).removeClass('is-invalid');
                $(this).addClass('is-valid');
                $('#passwordError').text(''); // Limpiar el mensaje de error
            } else {
                $(this).removeClass('is-valid');
                $(this).addClass('is-invalid');
                $('#passwordError').text('Las contraseñas no coinciden o no cumplen con la longitud mínima.');
            }
        });

        // Manejar el evento de cambio en el campo de nueva contraseña
        $('input[name=new_password]').on('input', function () {
            // Verificar la longitud de la nueva contraseña
            var minLength = 8;
            var isLengthValid = $(this).val().length >= minLength;

            // Actualizar el estilo del campo
            if (isLengthValid) {
                $(this).removeClass('is-invalid');
                $(this).addClass('is-valid');
            } else {
                $(this).removeClass('is-valid');
                $(this).addClass('is-invalid');
            }
        });

        // Manejar el evento de cambio en el campo de contraseña actual
        $('input[name=current_password]').on('input', function () {
            // Verificar la longitud de la contraseña actual
            var minLength = 8;
            var isLengthValid = $(this).val().length >= minLength;

            // Obtener el valor del campo de contraseña actual
            var currentPassword = $(this).val();

            // Validar la contraseña actual solo si es válida en longitud
            if (isLengthValid) {
                // Reemplaza esto con tu lógica real para verificar la contraseña actual en tu backend
                var isCurrentPasswordValid = true;

                if (isCurrentPasswordValid) {
                    $(this).removeClass('is-invalid');
                    $(this).addClass('is-valid');
                    $('#currentPasswordError').text(''); // Limpiar el mensaje de error
                } else {
                    $(this).removeClass('is-valid');
                    $(this).addClass('is-invalid');
                    $('#currentPasswordError').text('La contraseña actual no es válida.');
                }
            } else {
                $(this).removeClass('is-valid');
                $(this).addClass('is-invalid');
                $('#currentPasswordError').text('La contraseña actual no es válida o no cumple con la longitud mínima.');
            }
        });
    });
</script>





@endsection()
