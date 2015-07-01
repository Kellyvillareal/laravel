<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class AsignaturaR extends Request {

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
		];
	}

	public function messages()
	{
		return [
			'nombre.required' => 'No se ingreso un nombre!! No se actualizo',
			'nombre.min' => 'Minimo eran tres caracteres!! No se actualizo',
		];
	}

}
