@extends('layouts.plantilla')

@section('title','Catalogo')

@section('head')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="{{asset('css/catalogo.css')}}">
@endsection()

@section('content')

  @include('layouts.head')
  <section class="cart-section">
    <div class="columnas">
        @php
        $cardClasses = ['card1', 'card2'];
        $currentCardIndex = 0;
        @endphp

        @foreach ($product as $products)
        <div class="conte">
            <a href="{{ route('product.show', ['id' => $products->id]) }}" class="card {{ $cardClasses[$currentCardIndex] }}" data-card-index="{{ $products->id }}">
                <img src="{{ $products->image }}" alt="Imagen">
            </a>
            <div class="informacion">
                <h1>{{$products->name}}</h1>
                <p class="fecha">{{$products->description}}</p>
            </div>
            <div class="precio">
                <div class="box-precio">
                    {{-- <span class="precio1"><strike>{{$products->price}}</strike></span> --}}
                    <span class="precio2"><b>${{$products->price}}</b></span>
                </div>
                <i class='bx bxs-cart' id="shoping" ></i>
            </div>
        </div>

        @php
        // Alterna entre las dos clases de cartas
        $currentCardIndex = 1 - $currentCardIndex;
        @endphp

        @endforeach
    </div>
</section>
@endsection()


