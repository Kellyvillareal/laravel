<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\AsignaturaR;
use App\Http\Controllers\Controller;
use App\asignatura;
use App\curso;
use App\asigvista;
use Illuminate\Http\Request;

class Asignaturaeliminar extends Controller {

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
	public function store(AsignaturaR $request)
	{
		//buscamos los cursos de las asignaturas con ese nombre para quitarlas de las asignaturas vistas
		$codigos=asignatura::where('nombre','=',$request->nombre1)->get();
		//buscamos los idcursos en las asignaturas vistas
		$asigvistas=asigvista::all();
		foreach ($asigvistas as $a) {
			foreach ($codigos as $c) {
			if($a->codigoasig==$c->id){
				$actualizar=asigvista::where('codigoasig','=',$c->id)->update(['estado'=>'Antigua']);
			}
		}
			
		}


	//Actualizamos en la tabla asignaturas el estado de las asignaturas
		$eliminar=asignatura::where('nombre','=',$request->nombre1)->update(['estado'=>'Inactivo']);
	$asig="ELiminada";
	return view("proyecto.EliminarAsignatura",compact('asig'));
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
