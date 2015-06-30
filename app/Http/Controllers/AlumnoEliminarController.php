<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ActualizarRequest;
use App\Http\Controllers\Controller;
use App\alumno;
use App\matricula;
use App\asigvista;
use Illuminate\Http\Request;

class AlumnoEliminarController extends Controller {

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
	public function store(ActualizarRequest $request)
	{
		$fecha=date("y/m/d");
	$iden= $request->identificacion1;
	
	$eliminaralunmo=alumno::where('identificacion','=',$iden)->update(['estado'=>'Inactivo','fechadesv'=>$fecha]);
	$eliminarmatricula=matricula::where('idalumno','=',$iden)->update(['estado'=>'Antigua']);
	$eliminarasigbvistas=asigvista::where('idalumno','=',$iden)->update(['estado'=>'Antigua']);
	$alum="Eliminado";
	return view("proyecto.EliminarAlumno",compact('alum'));
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
