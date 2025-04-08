<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
         quiero crear al administrador que se llame 
         jose luis y 
         su nombre de usuario sea admin
         , su clave sea nimda
         */
        $nuevo = new Usuario();
        $nuevo->nombre = "José Luis";
        $nuevo->nombre_usuario = "admin";
        $nuevo->clave = Hash::make("nimda");
        $nuevo->tipo = 'administrador';
        $nuevo->save();

        $nuevo = new Usuario();
        $nuevo->nombre = "Sergio Gomez";
        $nuevo->nombre_usuario = "checo";
        $nuevo->clave = Hash::make("checo");
        $nuevo->tipo = 'empleado';
        $nuevo->save();

    }
}
