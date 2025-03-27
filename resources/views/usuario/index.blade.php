@extends('sistema.propuesta')
@section('contenido')
<table border="1">
  <thead>
   <th>ID</th>
   <th>NOMBRE</th>
   <th>ACCIONES</th>
  </thead>
  <tbody>

 @foreach ($todos as $uno)
  {{-- <li>{{$uno}}</li> --}}
   <tr>
    <td>{{$uno->id}} <a href="{{route('usuarios.show', $uno->id)}}">VER</a>  </td>
    <td>{{$uno->nombre}}</td>
    <td>
      
      <a href="{{route('usuarios.edit',$uno->id)}}">EDITAR</a>
      - 
      <form action="{{route('usuarios.destroy',$uno->id)}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="BORRAR">
      </form>


    </td>
   </tr>
 @endforeach
 </tbody>
</table>
<a href="{{route('usuarios.create')}}">CREAR</a>
  
@endsection
