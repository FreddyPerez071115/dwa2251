<?php

namespace App\Policies;

use App\Models\Usuario;
use Illuminate\Auth\Access\Response;

class UsuarioPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Usuario $actual): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Usuario $actual, Usuario $usuario): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Usuario $actual): bool
    {
        if($actual->tipo == 'administrador')
            return true;
        else
            return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Usuario $actual, Usuario $usuario): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Usuario $actual, Usuario $usuario): bool
    {
        if($actual->tipo == 'administrador')
            return true;
        else 
            return false;


    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(Usuario $actual, Usuario $usuario): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(Usuario $actual, Usuario $usuario): bool
    {
        return false;
    }
}
