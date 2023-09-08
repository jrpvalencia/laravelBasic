@extends('layouts.plantilla')

@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/login2.css')}}">
@endsection()
@section('title','Login')

<body>
    <div class="container">
        <div class="login-container">
          <div class="login-form">
            <h2 class="text-center mb-4"><i class="fas fa-user-circle"></i> Iniciar Sesión</h2>
            <form>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  </div>
                  <input type="email" class="form-control" id="email" placeholder="Correo Electrónico">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                  </div>
                  <input type="password" class="form-control" id="password" placeholder="Contraseña">
                </div>
              </div>
              <button type="submit" class="btn btn-neon btn-block"><i class="fas fa-sign-in-alt"></i> Iniciar Sesión</button>
            </form>
            <p class="text-center mt-3">¿No tienes una cuenta? <a href="{{route('registro')}}" class="toggle-form"><i class="fas fa-user-plus"></i> Registrarse</a></p>
          </div>
        </div>
      </div>


</body>
</html>