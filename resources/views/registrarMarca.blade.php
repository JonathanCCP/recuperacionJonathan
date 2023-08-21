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

    <h1>Registrar Marca</h1>
    <form action="{{route('marcas.store')}}" method="post">
        @csrf
        <label for="nombre">Nombre de la Marca</label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="fecha">Fecha Creacion</label>
        <input type="date" name="fecha" id="fecha">
        <br>
        <label for="familia_id">Familia</label>
        <select name="familia_id" id="familia_id">
            @foreach ($familias as $familia)
                <option value="{{$familia->id}}">{{$familia->nombre}}</option>
            @endforeach
        </select>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>