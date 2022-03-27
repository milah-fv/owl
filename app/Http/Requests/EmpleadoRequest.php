<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class EmpleadoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'nombre' => 'max:150|required',
            'apellidos' => 'max:150|required',
            'img' => 'image',
            //'email' => 'required|email|max:150|unique:empleados,email,'.$this->get('id'),
            //'password' => 'string|min:6|confirmed',
            'celular' => 'required|min:6|max:50',
            'direccion' => 'required|max:250',

        ];
        return $rules;
    }
     public function messages()
    {
        return
        [
            'nombre.required' => 'El nombre es requerido.',
            'nombre.max' => 'El maximo de caracteres es 150',
            'apellidos.max' => 'El maximo de caracteres es 150',
            'apellidos.required' => 'Los apellidos son requeridos',
            //'email.required' => 'El email es requerido.',
            //'email.max' => 'El maximo de caracteres es 150',
            //'email.unique' => 'Este email ya esta registrado',
            'celular.min' => 'El mínimo de caracteres es 6',
            'celular.max' => 'El máximo de caracteres es 50',
            'celular.required' => 'El numero de teléfono es requerido.',
            'direccion.max' => 'El máximo de caracteres es 250',
            'direccion.required' => 'La dirección es requerido',
            // 'password.required' => 'La contraseña es requerida.',
            //'password.string' => 'Debe poner una cadena de caracteres',
            //'password.min' => 'El minimo de caracteres es 6',
            //'password.confirmed' => 'Las contraseñas no coinciden',
            
            
        ];
    }
}
