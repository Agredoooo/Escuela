<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asociar Libro</title>
</head>
<body>
    <h1>hola desde asociar libros:</h1>

    <form action="{{ route('Quiz.asocio') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <br>
        <h1>Usuarios:</h1>
        <select name="usuario_id">
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->id }} - {{ $user->Nombre }}</option>
            @endforeach
        </select>
        <br>
        <h1>Libros:</h1>    
        <select name="ejemplar_id"> 
            @foreach($examples as $example)
                <option value="{{ $example->id }}">{{ $example->id }} - {{ $example->Titulo }}</option>
            @endforeach
        </select>
        <br><br>
        <button type="submit">Enviar Libro:</button>
    </form>
</body>
</html>