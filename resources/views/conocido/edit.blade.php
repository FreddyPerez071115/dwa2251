@extends('sistema.plantilla')
@section('contenido')
 <form action="{{route('conocidos.update',$usuario->id)}}" method="post">
  @csrf
  @method('put')
  <label for='nombre'>Nombre</label>
  <input type='text' name='nombre' id='nombre' value="{{$usuario->nombre}}"><br>
  <label for='nombre_usuario'>Conocido de:</label>
  <input type='text' name='nombre_usuario' id='nombre_conocido' value="{{$usuario->conocido->nombre}}"><br>
  <input type="submit" value="ENVIAR"> </form>
@endsection
