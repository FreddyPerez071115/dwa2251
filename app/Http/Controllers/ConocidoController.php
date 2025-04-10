<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConocidoRequest;
use App\Http\Requests\UpdateConocidoRequest;
use App\Models\Conocido;
use Illuminate\Support\Facades\Hash;

class ConocidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //listar todos los usuarios
        $todos = Conocido::all();
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

        $datos = $request->all();
        $nuevo->fill($datos);
        $nuevo->save();
        return redirect(route('conocidos.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Conocido $usuario)
    {
        echo $usuario->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Conocido $usuario)
    {
        return view('conocido.edit',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConocidoRequest $request, Conocido $usuario)
    {
        $usuario->fill($request->all());
        $usuario->save();
        return redirect(route('conocidos.index'));
 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Conocido $usuario)
    {
        $usuario->delete();
        return redirect(route('conocidos.index'));
    }
}
