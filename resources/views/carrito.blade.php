@extends('layouts.plantilla')

@section('title','Mi carrito')

@section('head')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link rel="stylesheet" href="{{asset('css/carrito.css')}}">
@endsection()

@section('content')

  @include('layouts.head')

  <section class="cart-section">

    <div class="container">
      <div class="cart-items">
@foreach($shoppingCart as $shoppingCarts)
<?php 
$shoppingCart->idProduct=$pro;
?>
        <div class="cart-item">
          {{-- <img src="{{ $prod->image }}" alt="Producto 1"> --}}
          <div>
            <h4 class="cart-item-title">Producto 1</h4>
            <p>{{ $shoppingCart->price }}</p>
            <button class="btn btn-danger">Eliminar</button>
          </div>
        </div>
@endforeach
        {{-- <div class="cart-item">
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
        </div> --}}
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
@endsection()
</html>