@extends('layouts.plantilla')



<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="shortcut icon" href="IMG/LOGO.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <style>
       *
        {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
    background-image: url('IMG/perfume2.jpg');
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    font-family: 'Quicksand', sans-serif;
}

.contenedor {
    background-color: rgba(138, 95, 120, 0.9);
    border-radius: 10px;
    padding: 2rem;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    max-width: 1000px;
    width: 90%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.imagen {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    overflow: hidden;
}

.imagen img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.detalles {
    flex: 1;
    padding: 0 2rem;
    color: rgb(22, 20, 20);
}


.contenedor {
            background-color: rgba(138, 95, 120, 0.9);
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 90%;
            text-align: left;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .titulo {
            color: #201e20;
            font-size: 30px;
            margin-bottom: 20px;
        }

        .producto {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        .detalles {
            width: 100%;
        }

        .detalles h2 {
            color: #121213;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .detalles p {
            margin-bottom: 10px;
            line-height: 1.5;
            font-weight: 300;
        }

        .detalles .precio {
            color: #1F2937;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .cantidad {
            margin: 10px 0;
        }

        .imagenes {
            max-width: 100%;
            height: auto;
            max-height: 300px;
            margin: 10px 0;
            float: right;
        }

        .boton-detalles {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            width: 100%;
        }

        .detalle-boton {
            position: relative;
            font-size: 16px;
            padding: 0.8em 2em;
            font-weight: 500;
            background: #1F2937;
            color: white;
            border: none;
            overflow: hidden;
            border-radius: 0.6em;
            cursor: pointer;
        }

        .detalle-label {
            z-index: 1;
            position: relative;
        }

        .detalle-transition {
            transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
            transition-duration: 500ms;
            background: #ad5389;
            background: -webkit-linear-gradient(to right, #3c1053, #ad5389);
            background: linear-gradient(to right, #3c1053, #ad5389);
            border-radius: 9999px;
            width: 0;
            height: 0;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .detalle-boton:hover .detalle-transition {
            width: 12em;
            height: 12em;
        }

        .detalle-boton:active {
            transform: scale(0.97);
        }
        
    </style>

<body>
    <div class="contenedor">
        <h1 class="titulo">Detalle de Producto</h1>
        <div class="producto">
            
            <div class="detalles">
                <h2>Boss Bottled, de Hugo Boss</h2>
                <figure class="imagen">
            <img src="{{asset('img/perfume4.jpg')}}" class="imagenes">
        </figure>

                <p class="descripcion">
                    "Boss embotellado", anuncia el nombre y eslogan de esta fragancia desde
                     su creación en 1998. Se trata de un perfume todoterreno: para hombres seguros de
                      sí mismos y con espíritu deportivo tanto para el día como para salir de noche.
                       Unida a la imagen del actor Chris Hemsworth, es atemporal y urbanita, idónea para 
                       cualquier estación del año en la ciudad. 
                </p>
                <h2>Precio</h2>
                <p class="precio">$99.99</p>
                <div class="cantidad">
                    <label for="cantidad">Cantidad:</label>
                    <input type="number" id="cantidad" name="cantidad" value="1" min="1">
                </div>
                <div class="boton-detalles">
                    <button class="detalle-boton">
                        <span class="detalle-label">Agregar al Carrito</span>
                        <div class="detalle-transition"></div>
                    </button>
            </div>
        </div>
    </div>
</body>
</html>