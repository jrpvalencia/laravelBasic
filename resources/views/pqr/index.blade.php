<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/resources/css/estilos.css">
    <title>Document</title>
</head>
<body>
    <h1>desde pqr</h1>
    <a href="{{route('pqr.create')}}">crear curso</a>

    <ul>

        @foreach ($pqr as $pqrs)
            <li>{{$pqrs->motivoPqr}}</li>
        @endforeach
    </ul>
</body>
</html>