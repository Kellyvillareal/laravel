<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\AsignaturaRequest;;
use App\Http\Controllers\Controller;
use App\asignatura;
use App\curso;
use Illuminate\Http\Request;

class ConsultarAsignaturaController extends Controller {

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
		$busqueda=NULL;
		$asignaturas=asignatura::where('estado','=','Activo')->paginate(7);
		
		$cursos=curso::all();



		return view('proyecto.ConsultarAsignatura',compact('asignaturas','cursos','busqueda'));
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
	public function store(AsignaturaRequest $request)
	{
$asignaturas=asignatura::where('estado','=','Activo')->paginate(7);
		
		$nom=$request->nombre;
$busqueda=asignatura::where('nombre','=',$nom)->get();
if(count($busqueda)==0){ $busqueda=NULL;}
	$cursos=curso::all();	
return view('proyecto.ConsultarAsignatura',compact('busqueda','cursos','asignaturas'));
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
