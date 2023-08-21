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

    <a href="{{route('familias.create')}}">Crear Familia</a>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($familias as $familia)
                <tr>
                    <td>{{$familia->nombre}}</td>
                    <td>{{$familia->fecha}}</td>
                    <td>
                        <form action="{{route('familias.edit', $familia->id)}}" method="get">
                            @csrf
                            <input type="submit" value="Editar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

</body>
</html>