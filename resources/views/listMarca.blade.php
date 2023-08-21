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

    <a href="{{route('marcas.create')}}">Crear Marca</a>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Familia</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($marcas as $marca)
                <tr>
                    <td>{{$marca->nombre}}</td>
                    <td>{{$marca->fecha}}</td>
                    <td>{{$marca->familia->nombre}}</td>
                </tr>
            @endforeach
        </tbody>

</body>
</html>