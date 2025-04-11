@extends('sistema.plantilla')
@section('contenido')
 <form action="{{route('conocidos.store')}}" method="post">
  @csrf
  <label for='nombre'>Nombre</label>
  <input type='text' name='nombre' id='nombre'><br>
  <br>
  <input type="submit" value="ENVIAR">

 </form>
 @endsection