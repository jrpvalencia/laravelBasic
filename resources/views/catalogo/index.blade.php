<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/catalogo.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Catalogo</title>
</head>
<body>
  
    <div class="columnas">
        @php
        $cardClasses = ['card1', 'card2'];
        $currentCardIndex = 0;
        @endphp

        @foreach ($product as $products)
        <div class="conte">
            <div class="card {{ $cardClasses[$currentCardIndex] }}">
                <img src="https://www.blanda-beauty.com/cdn/shop/products/Box_opening_7_ce8bc2d5-6611-4ca9-b51d-ec515885dc8c.jpg?v=1638788186"
                    alt="" srcset="">
            </div>
            <div class="informacion">
                <h1>{{$products->name}}</h1>
                <p class="fecha">{{$products->description}}</p>
            </div>
            <div class="precio">
                <div class="box-precio">
                    <span class="precio1"><strike>{{$products->price}}</strike></span>
                    <span class="precio2"><b>{{$products->price}}</b></span>
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

</body>
</html>
