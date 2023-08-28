<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
<!-- Enlace a Bootstrap CSS y Font Awesome -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link rel="stylesheet" href="{{asset('css/inicio.css')}}">
<head>
    

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
              <a class="nav-link" href="{{route('login2')}}"id="">Iniciar sesión</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" id="logoutLink" style="display: none;">Cerrar sesión</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  
    <div class="container-fluid p-0">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('img/inicio3.jpg')}}" alt="Imagen 1">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('img/inicio1.jpg')}}" alt="Imagen 2">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('img/inicio2.jpg')}}" alt="Imagen 3">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>
    </div>
  
    <section class="section">
      <div class="container">
        <h2>Hombre</h2>
        <div class="row">
          <div class="col-md-6">
            <img src="producto1.webp" alt="Ropa para hombre 1">
          </div>
          <div class="col-md-6">
            <img src="producto2.avif" alt="Ropa para hombre 2">
          </div>
        </div>
      </div>
    </section>
  
    <section class="section">
      <div class="container">
        <h2>Mujer</h2>
        <div class="row">
          <div class="col-md-6">
            <img src="ropa-mujer-1.jpg" alt="Ropa para mujer 1">
          </div>
          <div class="col-md-6">
            <img src="ropa-mujer-2.jpg" alt="Ropa para mujer 2">
          </div>
        </div>
      </div>
    </section>
  
    <section class="section">
      <div class="container">
        <h2>Temporadas</h2>
        <div class="row">
          <div class="col-md-3">
            <h4>Primavera</h4>
            <img src="primavera.jpg" alt="Primavera">
          </div>
          <div class="col-md-3">
            <h4>Verano</h4>
            <img src="verano.jpg" alt="Verano">
          </div>
          <div class="col-md-3">
            <h4>Otoño</h4>
            <img src="otono.jpg" alt="Otoño">
          </div>
          <div class="col-md-3">
            <h4>Invierno</h4>
            <img src="invierno.jpg" alt="Invierno">
          </div>
        </div>
      </div>
    </section>
  
    <footer class="footer">
      <div class="container">
        <p>Derechos de autor © 2023. Todos los derechos reservados.</p>
      </div>
    </footer>
  
    <div class="login-status text-center">
      <p id="loginMessage"></p>
    </div>
  
  <!-- Enlaces a los scripts de Bootstrap y Font Awesome -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    // Función para cambiar el estado de inicio de sesión
    function toggleLoginStatus(isLoggedIn) {
      if (isLoggedIn) {
        document.getElementById('loginLink').style.display = 'none';
        document.getElementById('logoutLink').style.display = 'block';
        document.getElementById('loginMessage').textContent = '¡Has iniciado sesión!';
      } else {
        document.getElementById('loginLink').style.display = 'block';
        document.getElementById('logoutLink').style.display = 'none';
        document.getElementById('loginMessage').textContent = 'Por favor, inicia sesión.';
      }
    }
  
    // Evento para cambiar el estado de inicio de sesión al hacer clic en "Cerrar sesión"
    document.getElementById('logoutLink').addEventListener('click', function() {
      toggleLoginStatus(false);
    });
  
    // Evento para cambiar el estado de inicio de sesión al hacer clic en "Iniciar sesión"
    document.getElementById('loginLink').addEventListener('click', function() {
      toggleLoginStatus(true);
    });
  </script>
  </body>
  </html>