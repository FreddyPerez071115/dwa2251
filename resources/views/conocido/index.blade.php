@extends('sistema.plantilla')
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
    <td>{{$uno->id}} <a href="{{route('conocidos.show', $uno->id)}}">VER</a>  </td>
    <td>{{$uno->nombre}}</td>
    <td>
      
      <a href="{{route('conocidos.edit',$uno->id)}}">EDITAR</a>
      - 
      @can('delete', $uno )
        <form action="{{route('conocidos.destroy',$uno->id)}}" method="post">
          @csrf
          @method('DELETE')
          <input type="submit" value="BORRAR">
        </form>


      @endcan



    </td>
   </tr>
 @endforeach
 </tbody>
</table>
@can('create',  "App\Models\Usuario" )
  <a href="{{route('conocidos.create')}}">CREAR</a>    
@endcan


  
@endsection
