<?php

namespace App\Policies;

use App\Models\Conocido;
use App\Models\Usuario;
use Illuminate\Auth\Access\Response;

class ConocidoPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Usuario $usuario): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Usuario $usuario, Conocido $conocido): bool
    {
        if ($usuario->id == $conocido->usuario_id) 
            return true;
        else 
            return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Usuario $usuario): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Usuario $usuario, Conocido $conocido): bool
    {
        //cuando si puedo editar a un conocido
        //si el usuario actual es el id se si puede modificar
        if ($usuario->id == $conocido->usuario_id) 
            return true;
        else 
            return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Usuario $usuario, Conocido $conocido): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(Usuario $usuario, Conocido $conocido): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(Usuario $usuario, Conocido $conocido): bool
    {
        return false;
    }
}
