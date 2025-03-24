@extends('sistema.propuesta')
@section('contenido')
 <form action="{{route('usuarios.update',$usuario->id)}}" method="post">
  @csrf
  @method('put')
  <label for='nombre'>Nombre</label>
  <input type='text' name='nombre' id='nombre' value="{{$usuario->nombre}}"><br>
  <label for='nombre_usuario'>Nombre de usuario</label>
  <input type='text' name='nombre_usuario' id='nombre_usuario'  value="{{$usuario->nombre_usuario}}"><br>
  <label for='clave'>Clave</label>
  <input type='text' name='clave' id='clave'  value="{{$usuario->clave}}"><br>
  <input type="submit" value="ENVIAR"> </form>
@endsection
