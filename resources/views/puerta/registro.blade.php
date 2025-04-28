<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Document</title>
</head>
<body>
 @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 <form action="{{route('puerta.guardar')}}" method="post">
  @csrf
  <label for='nombre'>Nombre</label>
  <input type='text' name='nombre' id='nombre' value="{{old('nombre')}}"><br>
  <label for='nombre_usuario'>Nombre de usuario</label>
  <input type='text' name='nombre_usuario' id='nombre_usuario' value="{{old('nombre_usuario')}}"><br>
  <label for='clave'>Clave</label>
  <input type='text' name='clave' id='clave'><br>
  <label for='clave_confirmation'>Confirme la clave</label>
  <input type='text' name='clave_confirmation' id='clave_confirmation'><br>
  <input type="submit" value="ENVIAR">

 </form>
</body>
</html>