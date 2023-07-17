<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/registro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Formulario de registro</title>
</head>
<body>
   
    <div class="container-form register">
        <div class="information">
            <div class="info-clilds">
                <h2>Te Damos la Bienvenida</h2>
                
                <p>
                    unete a nuestra comunidad </p>
                <input type="button" value="Iniciar sesion" id="sing-in">
                <br><br>
                <a href="{{route('home')}}" >Regresar</a>
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>     Iniciar Sesion      </h2>
                
                <div class="icons">
                    <i class='bx bxl-google'></i>
                    <i class='bx bxl-facebook-circle' ></i>
                    <i class='bx bxl-linkedin' ></i>
                </div>
                <p>O usa tu email para registrarte</p>
                <form action="" class="form">
                    <label >
                        <i class='bx bx-user'></i>
                        <input type="text" name="" id="" placeholder="Nombre completo">
                    </label>
                    <label >
                        <i class='bx bx-envelope' ></i>
                        <input type="email" placeholder="Correo electronico">
                    </label>
                    <label >
                        <i class='bx bx-lock-alt' ></i>
                        <input type="password" placeholder="Contraseña">
                    </label>

                    <input type="submit" value="Registrarse">
                  
                </form>
            </div>
        </div>
    </div> 



 

    <div class="container-form login hide">
        <div class="information">
            <div class="info-clilds">
                <h2>Bienvenido Nuevamente</h2>
                <p>Si aun no tienes una cuenta por favor registrate aqui </p>
                <input type="button" value="Registrarse" id="sing-up">
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Crear una Cuenta</h2>
                <div class="icons">
                    <i class='bx bxl-google'></i>
                    <i class='bx bxl-facebook-circle' ></i>
                    <i class='bx bxl-linkedin' ></i>
                </div>
                <p>
                    o iniciar sesion con una cuenta
                </p>
                <form action="" class="form">
                   
                    <label >
                        <i class='bx bx-envelope' ></i>
                        <input type="email" placeholder="Correo electronico">
                    </label>
                    <label >
                        <i class='bx bx-lock-alt' ></i>
                        <input type="password" placeholder="Contraseña">
                    </label>

                    <input type="submit" value="Iniciar sesion">
                </form>
            </div>
        </div>
    </div> 


    <script src="script.js"></script>
</body>
</html>