<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formas de Pago</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/pago.css')}}">
       
</head>
<body>
    <div class="container">
        <h1>Formas de Pago</h1>

        <form {{-- action="procesar_pago.php" method="POST" --}}>
            @csrf
            <div class="metodo-pago">
                <div class="icono"><i class="fas fa-credit-card"></i></div>
                <h3>Tarjeta de Crédito</h3>
                <p>Paga con tu tarjeta de crédito Visa, MasterCard, o American Express.</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="metodo_pago" id="tarjeta" value="Tarjeta de Crédito" required>
                    <label class="form-check-label" for="tarjeta">
                        Seleccionar Tarjeta de Crédito
                    </label>
                </div>
            </div>

            <div class="metodo-pago">
                <div class="icono"><i class="fas fa-money-bill-wave"></i></div>
                <h3>Efectivo</h3>
                <p>Paga en efectivo al momento de la entrega o en la tienda física.</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="metodo_pago" id="efectivo" value="Efectivo">
                    <label class="form-check-label" for="efectivo">
                        Seleccionar Efectivo
                    </label>
                </div>
            </div>

            <div class="metodo-pago">
                <div class="icono"><i class="fas fa-paypal"></i></div>
                <h3>PayPal</h3>
                <p>Paga de forma segura a través de tu cuenta PayPal.</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="metodo_pago" id="paypal" value="PayPal">
                    <label class="form-check-label" for="paypal">
                        Seleccionar PayPal
                    </label>
                </div>
            </div>

          
        </form>
        <a href="{{route('inicio')}}" class="btn btn-primary">Continuar con el Pago</a>
    </div>
   
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>
</html>