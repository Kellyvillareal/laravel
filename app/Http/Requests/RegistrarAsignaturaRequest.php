<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegistrarAsignaturaRequest extends Request {

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
			'nombre' => 'required|min:3',
        'codigo' => 'required',
		];
	}


public function messages(){
        return [
           'nombre.required' => 'El campo nombre es obligatorio',
           'nombre.min' => 'El nombre no puede tener menos de 3 caracteres',
          'codigo.required' => 'El campo direccion es obligatorio',
          ];
          
    }
}