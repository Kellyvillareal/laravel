<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class informacionalumnoRequest extends Request {

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
			'identificacion' => 'required|numeric',
		];
	}

	 public function messages(){
        return [

          'identificacion.required' => 'Debe proporcionar una identificación',
           'identificacion.numeric' => 'La identificacion solo son numeros',
    
        ];
    }

}
