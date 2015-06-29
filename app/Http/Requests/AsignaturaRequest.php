<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class AsignaturaRequest extends Request {

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
		'nombre'=>'required|min:3',
		];
	}
		public function messages()
	{
		return [
		'nombre.required'=>'Ingrese un nombre',
		'nombre.min'=>'Ingrese minimo 3 caracteres',
		];
	}

}
