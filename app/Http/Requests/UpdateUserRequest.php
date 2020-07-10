<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
        return [
            'name' => 'required|min:3|max:15|string|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
        'email' => 'required|email|unique:users,email'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'el campo es requerido',
            'name.min' => 'el campo deve ser minimo de 3 caracteres',
            'name.max' => 'el campo deve ser maximo de 15 caracteres',
            'name.regex' => 'solo se permite letras',
            'email.required' => 'el campo debe ser requerido',
            'email.email' => 'el campo debe ser de tipo email ',
            'email.unique' => 'el campo debe ser requerido unico',
        ];

    }
}
