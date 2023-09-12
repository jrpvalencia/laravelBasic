<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/formularioUser.css') }}">
    
    <title>Document</title>
</head>
<body>
    

    <div class="container">
        <div class="form-content">
            <h1 id="title">Usuario</h1>
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="input-group">


                    <div class="input-field">
                        <input type="text" name="name" placeholder="Nombre">
                    </div>

                    <div class="input-field">
                        <input type="text" name="lastName" placeholder="Apellido">
                    </div>

                    <div class="input-field">
                        <input type="text" name="typeDocument" placeholder="Tipo de documeto">
                    </div>

                    <div class="input-field">
                        <input type="tel" name="document" placeholder="documeto">
                    </div>

                    <div class="input-field">
                        <input type="tel" name="phone" placeholder="Telefono">
                    </div>

                    <div class="input-field select-field">
                        <select name="idRol" class="styled-select">
                            @foreach ($rol as $rols)
                                <option value="{{ $rols->id }}">{{ $rols->id }} {{ $rols->name }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="input-field">
                        <input type="email" name="email" placeholder="email">
                    </div>

                    <div class="input-field">
                        <input type="password" name="password" placeholder="contraseña">
                    </div>
                    <div class="btn-field">
                        <button id="singUp" type="submit">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>