<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar Libros</title>
</head>
<body>
    <h1>Hola desde listar</h1>
    
    <table>
        @foreach ($libros as $libro)
        <tr>
            <td>{{ $libro->id }}</td>
            <td>{{ $libro->Titulo }}</td>
            <td>{{ $libro->ISNB }}</td>
            <td>{{ $libro->Editorial }}</td>
            <td>{{ $libro->Paginas }}</td>
            <td><a href="{{ route('show', $libro->id) }}">Mostrar</a></td>
            <td><a href="{{ route('edit', $libro->id) }}">Editar</a></td>
            <td>
                <form action="{{ route('destroy', $libro->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
