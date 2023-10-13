<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Bienvenido {{$user->name}}</h1>
    <a href="/contacto"> Contacto </a>
    <a href="{{ route('contacto') }}"> Contacto (Ruta con nombre)</a>
</body>
</html>