<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //listar todos los usuarios
        $todos = Usuario::all();
        return view('usuario.index',compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevo = new Usuario();
        $datos = $request->all();        
        $datos['clave'] = Hash::make($datos['clave']);
        $nuevo->fill($datos);
        $foto=$request->file('foto');
        $nuevo->save();
        $nombre = $nuevo->id . "_foto.jpg";
//        $nuevo->foto = $foto->store('','publico');
        $nuevo->foto = $foto->storeAs('',$nombre,'publico');
        $nuevo->save();
        return redirect(route('usuarios.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    { 
        if( is_null($usuario->foto)){
            echo $usuario->toJson();

        }elseif(Storage::disk('publico')->exists($usuario->foto))
            return response()->download( public_path("assets/fotos") . "/$usuario->foto" );
        else {
            echo "Problemas con el archivo.";
        }
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        return view('usuario.edit',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        $usuario->fill($request->all());
        $usuario->save();
        return redirect(route('usuarios.index'));
 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        
        Storage::disk('publico')->delete($usuario->foto);
        $usuario->delete();

        return redirect(route('usuarios.index'));
    }
}
