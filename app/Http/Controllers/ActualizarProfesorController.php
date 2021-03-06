<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\InformacionAlumnoRequest;
use App\Http\Controllers\Controller;
use App\profesor;
use Illuminate\Http\Request;

class ActualizarProfesorController extends Controller {

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
	return view("proyecto.ActualizarProfesor",compact('prof'));
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
	public function store(InformacionAlumnoRequest $request)
	{
		$prof=profesor::where('identificacion','=',$request->identificacion)->where('estado','=','Activo')->get();
if(count($prof)>0){

}
else{
	$prof="No";
}


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
