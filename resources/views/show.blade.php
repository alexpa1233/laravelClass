<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if($categoria)
        <h1>El nombre del videojuego es: {{ $name }} y la categoria {{ $categoria }}</h1>
    @else
        <h1>El nombre del videojuego es: {{ $name }}
    @endif
    <h3>{{$fecha}}</h3>
</body>
</html>