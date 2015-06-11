<?php
namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest {

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'usuario' => 'required|min:5',
           /* 'email' => 'required|email|unique:users',*/
            'password' => 'required|confirmed|min:8',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public function messages(){
        return [
        'usuario.required' => 'El campo usuario es requerido',
        'usuario.min' => 'El campo usuario debe tener minimo 5 caracteres',
       /* 'email.required' => 'El campo email es requerido',*/
        'password.required' => 'El campo password es requerido',
        'password.min' => 'El password debe tener mas de 7 caracteres',
        'password.confirmed' => 'Las contraseñas no coinciden',
        ];
    }
    public function authorize()
    {
        return true;
    }

}