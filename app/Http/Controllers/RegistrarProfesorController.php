<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrarProfesorRequest;
use Illuminate\Http\Request;
use DB;

class RegistrarProfesorController extends Controller {

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
		$mensaje="";
		return view("proyecto.RegistrarProfesor")->with('mensaje',$mensaje);
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
	public function store(RegistrarProfesorRequest $request)
	{
		$fecha=date("y/m/d");
		DB::table('profesors')->insert(array(
			array(

				'identificacion'=>$request->identificacion,
				'nombre' =>$request->nombre,
				'apellido' =>$request->apellido,
				'sexo' =>$request->sexo,
				'direccion'=>$request->direccion,
				'telefono' =>$request->telefono,
				'fechanac' =>$request->fechanac,
				'titulo' =>$request->titulo,
				'estado' =>'activo',
				'fechavin' =>$fecha,
				)));
		$mensaje='Profesor Registrado con exito';
     return view('proyecto.RegistrarProfesor')->with('mensaje',$mensaje);

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
