<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>
    <form action="{{ route('register.store')}}" method="post">
        @csrf
        <label for='nombre'>Nombre</label>
        <input type='text' name='nombre' id='nombre'><br>
        <label for='nombre_usuario'>Nombre de usuario</label>
        <input type='text' name='nombre_usuario' id='nombre_usuario'><br>
        <label for='clave'>Clave</label>
        <input type='text' name='clave' id='clave'><br>
        <input type="submit" value="ENVIAR">
    </form>
</body>

</html>