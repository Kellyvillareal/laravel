<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrarAsignaturaRequest;
use Illuminate\Http\Request;
use App\asignatura;
class EliminarAsignatura extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
			$asig=NULL;
	return view("proyecto.EliminarAsignatura",compact('asig'));
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
	public function store(RegistrarAsignaturaRequest $request)
	{
		$nom=$request->nombre;
		$consul=asignatura::where('nombre','=',$nom)->where('estado','=','Activo')->get();
		if(count($consul)>0){
			foreach ($consul as $c) {
				$asig=$c->nombre;
			}
		}
		else{
			$asig="No";
		}
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
