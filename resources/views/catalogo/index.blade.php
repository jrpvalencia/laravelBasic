<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi carrito</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="{{asset('css/catalogo.css')}}">

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('IMG/logo.jpeg') }}" alt="Logo de la empresa" width="40" height="40" class="d-inline-block align-top">
        InventSmell
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('home')}}">Inicio</a>
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

</body>
</html>

    
<body>
  

  <section class="cart-section">


    <div class="columnas">
        @php
        $cardClasses = ['card1', 'card2'];
        $currentCardIndex = 0;
        @endphp

        @foreach ($product as $products)
        <div class="conte">
            <div class="card {{ $cardClasses[$currentCardIndex] }}">
              

                   <img src="{{ $products->image }}" alt="Imagen"> 

            </div>
            <div class="informacion">
                <h1>{{$products->name}}</h1>
                <p class="fecha">{{$products->description}}</p>
            </div>
            <div class="precio">
                <div class="box-precio">
                    {{-- <span class="precio1"><strike>{{$products->price}}</strike></span> --}}
                   <span class="precio2"><b>${{$products->price}}</b></span>
                </div>
                <i class='bx bxs-cart' id="shoping"></i>
            </div>
        </div>

        @php
        // Alterna entre las dos clases de cartas
        $currentCardIndex = 1 - $currentCardIndex;
        @endphp

        @endforeach
    </div>


   
  </section>


</body>
</html>




