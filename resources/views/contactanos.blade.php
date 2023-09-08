@extends('layouts.plantilla')

@section('title','Contactanos')

@section('head')
    <link rel="shortcut icon" href="IMG/LOGO.png" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/contactanos.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Libre+Baskerville&family=Quicksand:wght@300&display=swap" rel="stylesheet">
@endsection()
@section('content')

    <div class="contenerdor">
        <h1 class="titulo1">Contactanos</h1>
        <div class="formulario">
            <div class="texto">
                <h3> contacto</h3>
                <form action="">
                    <p>
                        
                        <label for="text">Nombre</label>
                        <input type="text" placeholder="Escriba su nombre" size="30" maxlength="30" name="nombre" id="nombre">

                    </p>
                    <p>
                        <label for="email">Email</label>
                        <input type="email" placeholder="Escriba su correo" size="50" maxlength="50" name="email" id="email">
                    </p>
                    <p>
                        <label>Telefono</label>
                        <input type="tel" name="telefono">

                    </p>
                    <p>
                        <label>Asunto</label>
                        <input type="text" name="Asunto">
                    
                    </p>
                    <p class="mensajes">
                        <label>Mensaje</label>
                        <textarea name="Mensaje" rows="3"></textarea>
                    </p>
                   
                </form>
                 <button><span class="transition">
                </span><span class="gradient"></span>
                <span class="label">Enviar</span><i></i></button>

            </div> 
            <div class="informacion">
                <h4>Nuestra informacion</h4>
                <ul>
                    <li>Popayan</li>
                    <li>3156487966</li>
                    <li>comidas@gmail.com</li>
                </ul>
            </div>

        </div>
    </div>
  
    <div class="boton"><a href="{{route('inicio')}}"><button>
        <span class="transition">
        </span><span class="gradient"></span>
        <span class="label">Regresar</span></button></a></div>
   
@endsection()
</html>