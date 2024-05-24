<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
<h1>Informacion productos</h1>

<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
@csrf

<label>
    Nombre:
    <br>
    <input type="string" name="name_prodruct">
</label>
<br>
<label>
    Precio:
    <br>
    <input type="double" name="price">
</label>
<br>
<label>
    descripcion:
    <br>
    <input type="text" name="description">
</label>
<br>
<label>
    Cantidad:
    <br>
    <input type="integer" name="quantity">
</label>
<br>
<label>
    Fecha de expiracion:
    <br>
    <input type="date" name="date_exp">
</label>

<br>
<br>
<br>
<br>
<button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>