<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsuarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'clave' => ['required', 'confirmed'],
            'nombre'=> 'required',
            'nombre_usuario'=> 'required|alpha_num:ascii',
        ];
    }

    public function messages()
    {
        return [
            '*.required' => "El campo :attribute es requerido",
            'clave.confirmed' => "la calve no fue confirmada",
            'nombre_usuario.alpha_num'=> 'puede usar nombres de sean validos'
        ];
  
    }
}
