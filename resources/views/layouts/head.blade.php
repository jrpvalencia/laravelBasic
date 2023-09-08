<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('img/ejlogo.jpg')}}" alt="Logo de la empresa" width="30" height="30" class="d-inline-block align-top">
                InventSmell
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('inicio')}}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Productos</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="">Temporadas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contactanos')}}">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('carrito')}}" ><i class="fas fa-shopping-cart"></i> Carrito</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}"id="">Iniciar sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="logoutLink" style="display: none;">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>