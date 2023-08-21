<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('welcome.index')}}">Inicio</a>

    <h1>Registrar Familia</h1>

    <form action="{{route('familias.store')}}" method="post">
        @csrf
        <label for="nombre">Nombre de la familia</label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="fecha">Fecha Creacion</label>
        <input type="date" name="fecha" id="fecha">
        <br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>