<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ActualizarRequest extends Request {

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
        'nombre1' => 'required',
        'direccion1' => 'required',
        'apellido1' => 'required',
        'identificacion1' => 'required|numeric',
          'telefono1' => 'required',
          'fechanac1' => 'required|date',
    ];
	}

   public function messages(){
        return [
           'nombre1.required' => 'No se ingreso nombre!! No se actualizo el registro',
          'direccion1.required' => 'No se ingreso Direccion!! No se actualizo el registro',
          'apellido1.required' => 'No se ingreso Apellido!! No se actualizo el registro',
          'identificacion1.required' => 'No se ingreso Identificacion!! No se actualizo el registro',
           'identificacion1.numeric' => 'La identificacion solo son numeros!! No se actualizo el registro',
           'telefono1.required' => 'No se ingreso telefono!! No se actualizo el registro',
           'fechanac1.required' => 'No se ingreso Fecha de nacimiento!! No se actualizo el registro',
           'fechanac1.date' => 'Ingrese un formato de fecha valido!! No se actualizo el registro',

        ];
    }


}
