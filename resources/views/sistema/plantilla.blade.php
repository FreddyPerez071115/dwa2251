<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }
        .encabezado {
            background-color: rgb(145, 202, 221);
            padding: 20px;
            text-align: center;
            font-weight: bold;
        }
        .cuerpo {
            display: flex;
            flex: 1;
        }
        .menu {
            background-color: rgb(230, 173, 187);
            width: 20%;
            padding: 20px;
        }
        .contenido {
            background-color: rgb(173, 230, 199);
            flex: 1;
            padding: 20px;
        }
    </style>        
</head>
<body>
    @auth
        <div class="encabezado">
            EMPRESA MENGANO
            <BR>
                HOLA, {{Auth::user()->nombre}} si quieres salir da <a href="{{route('puerta.salir')}}">click aqui</a>
        </div>
        <div class="cuerpo">
            <div class="menu">
                @switch(Auth::user()->tipo)
                    @case('administrador')
                        <li>Crear <a href="{{route('usuarios.index')}}">usuarios</a></li>
                        @break
                    @case('empleado')
                        <li>Modificar <a href="{{route('usuarios.index')}}">usuarios</a></li>                    
                        @break
                    @case('cliente')
                        <li>Crear <a href="{{route('conocidos.index')}}">conocidos</a></li>                    
                        @break
                    @default
                        
                @endswitch
            </div>
            <div class="contenido">
                @yield('contenido')
            </div>
        </div>    
    @else
        landingpage<br>
        DEBE PRIMERO INICIAR <a href="{{route('puerta.entrada')}}/">SESION</a> O <a href="{{route('puerta.registro')}}">REGISTRARSE</a>     
    @endauth
</body>
</html>
