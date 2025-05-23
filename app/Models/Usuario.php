<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['nombre','nombre_usuario', 'clave', 'tipo'];

    public function conocido(){
        return $this->hasOne(Conocido::class);        
    }
}
