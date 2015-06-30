<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ActualizarProfesorRequest;
use Illuminate\Http\Request;
use App\profesor;

class ProfesorActualizarController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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
	public function store(ActualizarProfesorRequest $request)
	{
	$consulta=profesor::where('identificacion','=',$request->identificacion1)->update(['nombre'=>$request->nombre1,'apellido'=>$request->apellido1,'sexo'=>$request->sexo1,'direccion'=>$request->direccion1,'telefono'=>$request->telefono1,'fechanac'=>$request->fechanac1,'titulo'=>$request->titulo1]);

	$prof="Actualizado";
	return view("proyecto.ActualizarProfesor",compact('prof'));
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
