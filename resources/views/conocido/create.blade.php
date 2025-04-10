@extends('sistema.plantilla')
@section('contenido')
 <form action="{{route('conocidos.store')}}" method="post">
  @csrf
  <label for='nombre'>Nombre</label>
  <input type='text' name='nombre' id='nombre'><br>
  <label for='tipo'>Usuario</label>
  <select name="usuario_id" id="usuario_id">
   <option value="cliente">Cliente</option>   
   <option value="empleado">Empleado</option>   
  </select>
  <br>
  <input type="submit" value="ENVIAR">

 </form>
 @endsection