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
    {{$html}} <!--esto escribe el html tal como un string-->
    {{!! $html !!}} <!--esto escapa el html y lo escribe como mas html-->
    {{-- $html --}} <!--Comentario de blade no lo escribe ni como texto ni como html-->
    {{-- directivas --}}
    @if ($user->name === 'Arturo Villalobos')
        Es true
    @else 
        No es true
    @endif
    {{-- for each--}}
    @foreach ($array as $a)
        {{$a}}
    @endforeach
    <br>
    @forelse ($array as $a)
        <p>{{$a}}</p>
    @empty
            NO hay nada
    @endforelse
</body>
</html>