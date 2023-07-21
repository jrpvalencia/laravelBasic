<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="shortcut icon" href="IMG/LOGO.png" type="image/x-icon"> -->
    <link href="{{ asset('css/EJEM.css')}}" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    
    <title>InventSmell</title>
    
</head>
<body>
    <header>
        <nav>
            <ul class="menu">
                
                <h1>InventSmell</h1></div>
                <a href="index.html"><button><span>inicio</span></button></a>
                <a href="menu.html"><button><span>Productos</span></button></a>
                <a href="Conocenos.html"><button><span>Registro</span></button></a>
                <a href="contactanos.html"><button><span>Contacto</span></button></a>
                <a href="conocenos.html"><button><span>Conocenos</span></button></a>
                
            </ul>
        </nav> 
        <div id="portada">
            <div class="contenido">
                <div class="texto1">
                    <h1>Porque amamos la vida le ponemos pasion a la comida</h1>
                </div>
                <div class="formulario">
                    <div class="fondo">
                        <h3>Registrate</h3>
                        <br><br>
                        <form action="">
                            <div class="formulario-text">
                                <label for="text">Escriba su nombre</label>
                                <br><br>
                                <input type="text" placeholder="Escriba su nombre" size="30" maxlength="30" name="nombre" id="nombre"class="input" required="">
                                <br><br>
                                <label for="email">Escriba su correo electronico</label>
                                <br><br>
                                <input type="email" placeholder="Escriba su correo" size="50" maxlength="50" name="email" id="email"class="input" required="">
                                <br><br>
                            </div>
                            <div class="boton">
                                <a href="index.html">
                                    <button>
                                        <span>Crear cuenta</span><i></i>
                                    </button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>
