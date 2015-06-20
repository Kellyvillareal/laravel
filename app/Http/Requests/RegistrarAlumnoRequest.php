<?php 
namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegistrarAlumnoRequest extends Request {

	


	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		
    return [
        'nombre' => 'required',
        'direccion' => 'required',
        'apellido' => 'required',
        'identificacion' => 'required|numeric',
          'telefono' => 'required',
          'fechanac' => 'required|date',
    ];
	}

   public function messages(){
        return [
           'nombre.required' => 'El campo nombre es obligatorio',
          'direccion.required' => 'El campo direccion es obligatorio',
          'apellido.required' => 'El campo apellido es obligatorio',
          'identificacion.required' => 'El campo identificación es obligatorio',
           'identificacion.numeric' => 'La identificacion solo son numeros',
           'telefono.required' => 'El campo telefono es obligatorio',
           'fechanac.required' => 'El campo fecha nacimiento es obligatorio',
           'fechanac.date' => 'Ingrese un formato de fecha valido',
        ];
    }



/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
		public function authorize()
	{
		return true;
	}

}
