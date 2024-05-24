<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
 
        <h1>hola desde listar</h1>
    
        <table>
    
            @foreach ($cursos as $curso)
            {{-- creo una fila --}}
            <tr>
                <td>{{$curso->id}}</td>
                <td>{{$curso->name}}</td>
                <td>{{$curso->descripcion}}</td>
                <td><a href="{{route("show",$curso->id)}}" >mostrar</a> </td>
                <td><a href="{{route('edit',$curso->id)}}">Editar</a></td>
                <td>
                    <form action="{{route('destroy',$curso->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit">Eliminar</button>
                    </form>  
    
    
                </td>
            </tr>
            @endforeach
        </table>
    
    
</body>
</html>