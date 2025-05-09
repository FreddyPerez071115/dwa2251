@extends('sistema.plantilla')
@section('contenido')
 <form action="{{route('conocidos.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <label for='nombre'>Nombre</label>
  <input type='text' name='nombre' id='nombre'><br>
  <label for='archivo'>Imagen PRIVADA</label>
  <input type='file' name='archivo' id='archivo'><br>
  <br>
  <input type="submit" value="ENVIAR">

 </form>
 @endsection