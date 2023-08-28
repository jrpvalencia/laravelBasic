<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrarse</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="registro.css">

  <style>
    body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color:#0a192f;
    font-family: Arial, sans-serif;
  }
  
  .container {
    display: flex;
  }
  
  .register-container {
    background-color: rgb(0, 0, 0);
    border-radius: 10px;
    box-shadow: 0 0 20px rgb(231, 236, 129);
    margin: auto;
    color: rgb(255, 255, 255);
  }
  
  .register-form {
    padding: 40px;
  }
  
  h2 {
    margin-bottom: 20px;
    color: #386493;
  }
  
  .form-control {
    border: none;
    border-radius: 5px;
    padding: 12px;
    margin-bottom: 15px;
    background-color: #f2f2f2;
    color: rgb(255, 255, 255);
    outline: none;
  }
  
  .btn-register {
    display: block;
    padding: 12px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: white;
    cursor: pointer;
    font-weight: bold;
    text-align: center;
    text-transform: uppercase;
    transition: background-color 0.3s ease;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }
  
  .btn-register:hover {
    background-color: #00ff00cc;
  }
  
  .toggle-form {
    color:#386493;
    text-decoration: none;
  }
  
  .toggle-form:hover {
    text-decoration: underline;
  }
  

  </style>
</head>
<body>
    <div class="container">
        <div class="register-container">
          <div class="register-form">
            <h2 class="text-center mb-4"><i class="fas fa-user-plus"></i> Registrarse</h2>
            <form>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                  </div>
                  <input type="text" class="form-control" id="username" placeholder="Nombre de Usuario">
                </div>
              </div>
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
              <button type="submit" class="btn btn-register btn-block"><i class="fas fa-user-plus"></i> Registrarse</button>
            </form>
            <p class="text-center mt-3">¿Ya tienes una cuenta? <a href="#" class="toggle-form"><i class="fas fa-sign-in-alt"></i> Iniciar Sesión</a></p>
          </div>
        </div>
      </div>
    
</body>
</html>