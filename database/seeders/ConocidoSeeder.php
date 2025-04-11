<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Conocido;

class ConocidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nuevo = new Conocido();
        $nuevo->nombre="Concido1";
        $nuevo->usuario_id = 1;
        $nuevo->save();

        $nuevo = new Conocido();
        $nuevo->nombre="Concido2";
        $nuevo->usuario_id = 1;
        $nuevo->save();

        $nuevo = new Conocido();
        $nuevo->nombre="Concido3";
        $nuevo->usuario_id = 2;
        $nuevo->save();

/*
        $nuevo = new Conocido();
        $nuevo->nombre="Concido4";
        $nuevo->usuario_id = 3;
        $nuevo->save();
*/
        
    }
}
