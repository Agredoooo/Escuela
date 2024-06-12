<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar los libros</title>
</head>
<body>

    <form action="{{ route('update', $libro->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label>
            Título:
            <br>
            <input name="Titulo" type="text" value="{{ old('Titulo', $libro->Titulo) }}">
        </label>
        <br>

        <label>
            ISNB:
            <br>
            <input name="ISNB" type="text" value="{{ old('ISNB', $libro->ISNB) }}">
        </label>
        <br>

        <label>
            Editorial:
            <br>
            <input name="Editorial" type="text" value="{{ old('Editorial', $libro->Editorial) }}">
        </label>
        <br>

        <label>
            Páginas:
            <br>
            <input name="Paginas" type="text" value="{{ old('Paginas', $libro->Paginas) }}">
        </label>
        <br>

        <button type="submit">Actualizar libro</button>
    </form>

</body>
</html>
