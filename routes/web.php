<?php

use App\Http\Controllers\ComputadoraController;
use App\Http\Controllers\PuertaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ConocidoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('sistema.inicio');
});

Route::get("/saludar/{nombre?}",function ($nombre=""){
	echo "hola $nombre";
});

Route::get('registro',[PuertaController::class, 'registro'])->name('puerta.registro');
Route::post('guardar',[PuertaController::class, 'guardar'])->name('puerta.guardar');

Route::get('entrada',[PuertaController::class, 'entrada'])->name('puerta.entrada');
Route::post('validar',[PuertaController::class, 'validar'])->name('puerta.validar');

Route::get('inicio',[PuertaController::class, 'temporal'])->name('puerta.inicio');

Route::get('salir',[PuertaController::class, 'salir'])->name('puerta.salir');


//Route Model Binding
//CRUD
// computadora/crear
// computadora/mostrar/{cual}
// computadora/actualizar/{cual}
// computadora/borrar/{cual}
///----
// GET    computadoras/{computadora}
// POST   computadoras/
// PUT    computadoras/{computadora}
// DELETE computadoras/{computadora}

// // resource('computadoras',ComputadoraController)
// Route::get('computadore/crear',"App\Http\Controllers\ComputadoraController@crear");
// Route::get('computadore/mostrar/{cual}',[ComputadoraController::class, 'mostrar']);
// Route::get('computadore/actualizar/{cual}',[ComputadoraController::class, 'actualizar']);
// Route::get('computadore/borrar/{cual}',[ComputadoraController::class, 'borrar']);
// // 
// // 
// // 
Route::resource("computadoras", ComputadoraController::class);
Route::resource("usuarios", UsuarioController::class);
Route::resource("conocidos", ConocidoController::class);

Route::get('/usuarios/agregar',function (){
    return view('formulario');
});

Route::get('/usuarios/listar',function (){
    return view('lista');
});

Route::get('/usuarios/listado',function (){
    return view('listado');
});