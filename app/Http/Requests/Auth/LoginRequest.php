<?php namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest {

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'usuario' => 'required',
            'password' => 'required',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

       public function messages(){
        return [
        'usuario.required' => 'El Usuario es requerido',
        'password.required' => 'La contraseña es requerida',
        ];
    }
    

    public function authorize()
    {
        return true;
    }

}