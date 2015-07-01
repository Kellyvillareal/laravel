<?php namespace App\Http\Controllers;
use App\Http\Requests\informacionalumnoRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\profesor;
use Illuminate\Http\Request;

class ExProfesoresController extends Controller {

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
		$profesores=profesor::where('estado','=','Inactivo')->paginate(8);


		return view("proyecto.ExProfesores",compact('profesores','busqueda'));
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
	$profesores=profesor::where('estado','=','Inactivo')->paginate(8);

		$iden=$request->identificacion;
$busqueda=profesor::where('identificacion','=',$iden)->where('estado','=','Inactivo')->get();
if(count($busqueda)==0){ $busqueda=NULL;}

		return view("proyecto.ExProfesores",compact('alumnos','busqueda'));
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
