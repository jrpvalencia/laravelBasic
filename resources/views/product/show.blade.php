<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pagina Producto</title>
    <link rel="stylesheet" href="{{ asset('css/detalle.css') }}" />
</head>

<body>
    <header>
        <h1>Logo</h1>
    </header>

    <div class="container-title">{{$product->name}}</div>
    
    <main>
        <div class="container-img">
            <img src="{{ asset('storage/product/' . $product->image) }}" alt="imagen-producto">
        </div>
        <div class="container-info-product">
            <div class="container-price">
                <span>${{ $product->price }}</span>
                <i class="fa-solid fa-angle-right"></i>
            </div>

            <div class="container-details-product">

            </div>

            <div class="container-add-cart">
                <div class="container-quantity">
                    <input type="number" placeholder="1" value="1" min="1" class="input-quantity" />
                    <div class="btn-increment-decrement">
                        <i class="fa-solid fa-chevron-up" id="increment"></i>
                        <i class="fa-solid fa-chevron-down" id="decrement"></i>
                    </div>
                </div>
                <button class="btn-add-to-cart">
                    <i class="fa-solid fa-plus"></i>
                    Añadir al carrito
                </button>
            </div>

            <div class="container-description">
                <div class="title-description">
                    <h4>Descripción</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="text-description">
                    <p>{{ $product->description }}</p>
                </div>
            </div>

           
            <div class="container-social">
                <span>Compartir</span>
                <div class="container-buttons-social">
                    <a href="#"><i class="fa-solid fa-envelope"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                </div>
            </div>
        </div>
    </main>

    <section class="container-related-products">
        <h2>Productos Relacionados</h2>
        <div class="card-list-products">
            <div class="card">
                <div class="card-img">
                    <img src="https://images.unsplash.com/photo-1662376569449-cf6cae79defe?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cGVmdW1lc3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60"
                        alt="producto-1" />
                </div>
                <div class="info-card">
                    <div class="text-product">
                        <h3>Carolina Herrera</h3>
                        <p class="category">Footwear, Sneakers</p>
                    </div>
                    <div class="price">$85.00</div>
                </div>
            </div>
            <div class="card">
                <div class="card-img">
                    <img src="https://images.unsplash.com/photo-1617839400561-d55457a29da2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzN8fHBlcmZ1bWV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                        alt="producto-2" />
                </div>
                <div class="info-card">
                    <div class="text-product">
                        <h3>Dior</h3>
                        <p class="category">Footwear, Sneakers</p>
                    </div>
                    <div class="price">$255.00</div>
                </div>
            </div>
            <div class="card">
                <div class="card-img">
                    <img src="https://images.unsplash.com/photo-1592914610354-fd354ea45e48?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fHBlcmZ1bWV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                        alt="producto-3" />
                </div>
                <div class="info-card">
                    <div class="text-product">
                        <h3>Chanel</h3>
                        <p class="category">Footwear, Sneakers</p>
                    </div>
                    <div class="price">$105.00</div>
                </div>
            </div>
            <div class="card">
                <div class="card-img">
                    <img src="https://images.unsplash.com/photo-1587017539504-67cfbddac569?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjZ8fHBlcmZ1bWV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                        alt="producto-4" />
                </div>
                <div class="info-card">
                    <div class="text-product">
                        <h3>Common Projects Achilles</h3>
                        <p class="category">Footwear, Sneakers</p>
                    </div>
                    <div class="price">$250.00</div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>Footer</p>
    </footer>

    <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/detalle.js') }}"></script>
</body>

</html>
