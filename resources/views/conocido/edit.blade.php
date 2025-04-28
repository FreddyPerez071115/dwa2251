@extends('sistema.plantilla')
@section('contenido')
 <form action="{{route('conocidos.update',$conocido->id)}}" method="post">
  @csrf
  @method('put')
  <label for='nombre'>Nombre</label>
  <input type='text' name='nombre' id='nombre' value="{{$conocido->nombre}}"><br>
  <label for='nombre_usuario_mostrar'>Conocido de:</label>
  <input type='text' name='nombre_usuario_mostrar' id='nombre_conocido' value="{{$conocido->usuario->nombre}}"><br>
  <input type="submit" value="ENVIAR"> </form>
@endsection
