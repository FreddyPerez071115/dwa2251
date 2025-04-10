<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conocido extends Model
{
    /** @use HasFactory<\Database\Factories\ConocidoFactory> */
    use HasFactory;
    
    protected $fillable = ['nombre','usuario_id'];


    public function usuario(){
        return $this->belongsTo(Usuario::class);

    }
}
