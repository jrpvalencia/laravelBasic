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

            <form action="{{ route('user.update', $user) }}" method="POST">

                @csrf
                @method('put')
                <div class="input-group">

                    <div class="input-field">
                        <input type="text" name="name" value="{{ $user->name }}">
                    </div>

                    <div class="input-field">
                        <input type="text" name="lastName" value="{{ $user->lastName }}">
                    </div>

                    <div class="input-field">
                        <input type="text" name="typeDocument"value="{{ $user->typeDocument }}">
                    </div>

                    <div class="input-field">
                        <input type="tel" name="document"value="{{ $user->document }}">
                    </div>

                    <div class="input-field">
                        <input type="tel" name="phone"value="{{ $user->phone }}">
                    </div>



                    <div class="input-field select-field">
                        <select name="idRol" value="{{ $user->idRol }}" class="styled-select">
                            @foreach ($rol as $rols)
                                <option value="{{ $rols->id }}">{{ $rols->id }} {{ $rols->name }}</option>
                            @endforeach
                        </select>
                    </div>



                    <div class="input-field">
                        <input type="email" name="email"value="{{ $user->email }}">
                    </div>

                    <div class="input-field">
                        <input type="password" name="password"value="{{ $user->password }}">
                    </div>



                    <div class="btn-field">
                        <button id="singUp" type="submit">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
