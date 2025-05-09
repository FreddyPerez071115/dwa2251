<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConocidoRequest;
use App\Http\Requests\UpdateConocidoRequest;
use App\Models\Conocido;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class ConocidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //listar todos los usuarios
        //$todos = Conocido::all();
        $actual = Auth::user();
        $todos = Conocido::where('usuario_id',$actual->id)->get();
        return view('conocido.index',compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('conocido.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreConocidoRequest $request)
    {
        $nuevo = new Conocido();
        $actual = Auth::user();
        $datos = $request->all();
        $datos['usuario_id']=$actual->id;
        $nuevo->fill($datos);
        $nuevo->save();
        $archivo = $request->file('archivo');
        $nuevo->archivo= $archivo->store('','privado');
        $nuevo->save();
        return redirect(route('conocidos.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Conocido $conocido)
    {
        if (Gate::allows('view',$conocido)){
            if( is_null($conocido->archivo)){
                echo $conocido->toJson();
            }elseif(Storage::disk('privado')->exists($conocido->archivo))
                return response()->file( storage_path('app/archivos') . "/$conocido->archivo");
            else {
                echo "Problemas con el archivo.";
            }    
        }
        else
            return view('sistema.ups');


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Conocido $conocido)
    {
        if (Gate::allows('update',$conocido))
            return view('conocido.edit',compact('conocido'));
        else
            return view('sistema.ups');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConocidoRequest $request, Conocido $conocido)
    {
        $conocido->fill($request->all());
        $conocido->save();
        return redirect(route('conocidos.index'));
 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Conocido $conocido)
    {
        $conocido->delete();
        return redirect(route('conocidos.index'));
    }
}
