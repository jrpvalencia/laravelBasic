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

                            <form action="{{ route('perfil.Update', $user) }}" method="POST" enctype="multipart/form-data">

                                @csrf
                                @method('put')

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
                                        name="typeDocument"value="{{ $user['user']['typeDocument'] ?? ''}}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Documento</label>
                                    <input type="text" class="form-control"
                                        name="document"value="{{ $user['user']['document']?? '' }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <input type="text" class="form-control mb-1" name="email"
                                        value="{{ $user['user']['email']?? '' }}">
                                    <div class="alert alert-warning mt-3">
                                        Your email is not confirmed. Please check your inbox.<br>
                                        <a href="javascript:void(0)">Resend confirmation</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Telefono</label>
                                    <input type="text" class="form-control" name="phone" value="{{ $user['user']['phone'] ?? ''}}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Contraseña</label>
                                    <input type="text" class="form-control"name="password"
                                        value="{{ $user['user']['password'] ?? '' }}">
                                </div>
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





@endsection()
