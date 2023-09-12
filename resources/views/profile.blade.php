
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{asset('css/profile.css')}}">

</head>
<body>
    <div class="contenedor">
        <h1 class="titulo1">Perfil</h1>
        <div class="perfil">
            <div class="foto">
                <img id="fotoPerfil" src="{{asset('img/descarga.png')}}" alt="Profile Picture">
            </div>
            <div class="informacion">
                <h3>Información Personal</h3>
                <p>
                    <label for="nombre">Nombre Completo:</label>
                    <span id="nombre">{{ $userData['name'] }}</span>
                    <input type="text" id="nombreInput" style="display:none;">
                </p>
                <p>
                    <label for="email">Email:</label>
                    <span id="email">{{ $userData['email'] }}</span>
                    <input type="text" id="emailInput" style="display:none;">
                </p>
                <p>
                    <label for="telefono">Telefono:</label>
                    <span id="telefono">{{ $userData['phone'] }}</span>
                    <input type="text" id="telefonoInput" style="display:none;">
                </p>
                <p>
                    <label for="direccion">Dirección:</label>
                    <span id="direccion">{{ $userData['address'] }}</span>
                    <input type="text" id="direccionInput" style="display:none;">
                </p>
                <p>
                    <label for="cambiarImagen">Actualizar Perfil:</label>
                    <input type="file" id="cambiarImagen" accept="image/*" style="display:none;">
                    <button class="editar-imagen-btn" onclick="editarImagen()">Editar</button>
                </p>
                <button class="editar-btn" onclick="editarPerfil()">Editar</button> 
                <button class="guardar-btn" style="display:none;" onclick="guardarPerfil()">Guardar</button>
            </div>
        </div>
    </div>

    <script>
        function editarPerfil() {
            
            document.getElementById("nombre").style.display = "none";
            document.getElementById("nombreInput").style.display = "block";
            document.getElementById("nombreInput").value = document.getElementById("nombre").textContent;

            document.getElementById("email").style.display = "none";
            document.getElementById("emailInput").style.display = "block";
            document.getElementById("emailInput").value = document.getElementById("email").textContent;

            document.getElementById("telefono").style.display = "none";
            document.getElementById("telefonoInput").style.display = "block";
            document.getElementById("telefonoInput").value = document.getElementById("telefono").textContent;

            document.getElementById("direccion").style.display = "none";
            document.getElementById("direccionInput").style.display = "block";
            document.getElementById("direccionInput").value = document.getElementById("direccion").textContent;

            
            document.querySelector(".editar-btn").style.display = "none";
            document.querySelector(".guardar-btn").style.display = "block";
        }

        function guardarPerfil() {
           
            document.getElementById("nombre").textContent = document.getElementById("nombreInput").value;
            document.getElementById("email").textContent = document.getElementById("emailInput").value;
            document.getElementById("telefono").textContent = document.getElementById("telefonoInput").value;
            document.getElementById("direccion").textContent = document.getElementById("direccionInput").value;

            document.getElementById("nombreInput").style.display = "none";
            document.getElementById("nombre").style.display = "block";

            document.getElementById("emailInput").style.display = "none";
            document.getElementById("email").style.display = "block";

            document.getElementById("telefonoInput").style.display = "none";
            document.getElementById("telefono").style.display = "block";

            document.getElementById("direccionInput").style.display = "none";
            document.getElementById("direccion").style.display = "block";

            
            document.querySelector(".editar-btn").style.display = "block";
            document.querySelector(".guardar-btn").style.display = "none";
        }

        function editarImagen() {
           
            const inputImagen = document.getElementById("cambiarImagen");
            inputImagen.style.display = "block";

        
            const botonEditarImagen = document.querySelector(".editar-imagen-btn");
            botonEditarImagen.style.display = "none";

          
            inputImagen.addEventListener("change", function () {
                const nuevaImagen = inputImagen.files[0];
                if (nuevaImagen) {
                    const fotoPerfil = document.getElementById("fotoPerfil");
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        fotoPerfil.src = e.target.result;
                    };
                    reader.readAsDataURL(nuevaImagen);
                }

                inputImagen.style.display = "none";

                
                botonEditarImagen.style.display = "block";
            });
            
        }
    </script>
</body>
</html>


