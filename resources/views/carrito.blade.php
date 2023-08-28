<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi carrito</title>
<!-- Enlace a Bootstrap CSS y Font Awesome -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link rel="stylesheet" href="{{asset('css/carrito.css')}}">

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{asset('img/ejlogo.jpg')}}" alt="Logo de la empresa" width="40" height="40" class="d-inline-block align-top">
        InventSmell
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Temporadas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> Carrito</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" id="loginLink">Iniciar sesión</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" id="logoutLink" style="display: none;">Cerrar sesión</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="cart-section">
    <div class="container">
      <div class="cart-items">
        <div class="cart-item">
          <img src="{{asset('img/producto1.webp')}}" alt="Producto 1">
          <div>
            <h4 class="cart-item-title">Producto 1</h4>
            <p>Precio: $100</p>
            <button class="btn btn-danger">Eliminar</button>
          </div>
        </div>
        <div class="cart-item">
          <img src="{{asset('img/producto1.webp')}}" alt="Producto 2">
          <div>
            <h4 class="cart-item-title">Producto 2</h4>
            <p>Precio: $150</p>
            <button class="btn btn-danger">Eliminar</button>
          </div>
        </div>
        <div class="cart-item">
          <img src="{{asset('img/producto1.webp')}}" alt="Producto 3">
          <div>
            <h4 class="cart-item-title">Producto 3</h4>
            <p>Precio: $120</p>
            <button class="btn btn-danger">Eliminar</button>
          </div>
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