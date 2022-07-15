<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>EDITANDO: {{$estudante->nome}}</h1>
    

<form action="{{route('estudante.edit', $estudante->id)}}" method="POST">
    @csrf
    @method('PATCH')
    <input type="text" name="nome" placeholder="nome" value="{{$estudante->nome}}">
    <input type="text" name="idade" placeholder="idade" value="{{$estudante->idade}}">
    <input type="text" name="cpf" placeholder="cpf" value="{{$estudante->cpf}}">
    <input type="submit" value="add">
</form>


</body>
</html>