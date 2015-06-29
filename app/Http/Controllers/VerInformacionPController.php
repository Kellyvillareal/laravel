<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\profesor;
use Illuminate\Http\Request;
use App\Http\Requests\informacionalumnoRequest;


class VerInformacionPController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */



 public function __construct()
    {
        $this->middleware('auth');
    }

	
	public function index()
	{
		$prof=NULL;
		return view("proyecto.InformacionProfesor")->with('prof',$prof);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(informacionalumnoRequest $request)
	{
		//igualamos la variable a mandar como No indicando que no hay nada por el momento
		$prof='No';

	$iden=$request->identificacion;
		$info=profesor::where('identificacion','=',$iden)->get();

///si se encontro algo lo guardamos en un array
foreach ($info as $profesor) {
$prof=array($profesor->nombre,$profesor->apellido,$profesor->identificacion,$profesor->direccion,$profesor->telefono,$profesor->sexo,$profesor->fechanac,$profesor->titulo);
		}

///retornamos a la vista con el resultado
	return view("proyecto.InformacionProfesor")->with('prof',$prof);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
