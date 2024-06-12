<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
<h1>Crear Libro</h1>

<form action="{{route('Quiz.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Titulo:
    <br>
    <input type="text" name="Titulo">
</label>
<br>
<label>
    ISNB:
    <br>
    <input type="text" name="ISNB">
</label>
<label>
    <br>
    Editorial:
    <br>
    <input type="text" name="Editorial">
</label>
<br>
<label>
    Paginas:
    <br>
    <input type="text" name="Paginas">
</label>
<br>
<br>
<br>
<button type="submit">Registrar libro:</button>
</form>
</body>
</html>