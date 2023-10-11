{{-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Perfumería</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/pago.css')}}"> --}}
        
    @extends('layouts.plantilla')

    @section('title','Conocenos')
    
    @section('head')
    <title>Contacto - Perfumería</title>
 
    <link rel="shortcut icon" href="IMG/LOGO.png" type="image/x-icon">
    
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Libre+Baskerville&family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/pago.css')}}">
    @endsection()
    
    @section('content')
</head>
<body>
    <div class="container">
        <div class="contacto-heading">
            <h1>Contacto</h1>
            <p>¡Estamos aquí para ayudarte! Contáctanos para cualquier consulta o comentario.</p>
        </div>
        <div class="contacto-formulario">
            <form action="#" method="post">
                <div class="mb-3">
                    <label for="nombre" class="formulario-label">Nombre:</label>
                    <input type="text" class="form-control formulario-control" id="nombre" name="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="correo" class="formulario-label">Correo Electrónico:</label>
                    <input type="email" class="form-control formulario-control" id="correo" name="correo" required>
                </div>
                <div class="mb-3">
                    <label for="mensaje" class="formulario-label">Mensaje:</label>
                    <textarea class="form-control formulario-control" id="mensaje" name="mensaje" rows="5" required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-enviar"><i class="fas fa-paper-plane icono"></i> Enviar Mensaje</button>
                </div>
            </form>
        </div>
        <div class="text-center mt-3">
            <a href="javascript:history.back()" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Regresar</a>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>
</html>
@endsection()