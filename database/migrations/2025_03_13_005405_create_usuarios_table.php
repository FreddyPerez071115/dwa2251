<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('nombre_usuario')->unique();
            $table->string('clave');
            $table->enum('tipo',['empleado','cliente','administrador'])->default('cliente');
            $table->string('token')->nullable()->default(null);
            $table->string('correo')->nullable()->default(null);
            $table->string('direccion')->nullable()->default(null);
            $table->string('foto')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
