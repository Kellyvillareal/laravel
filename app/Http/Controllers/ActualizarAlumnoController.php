<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\informacionalumnoRequest;

use App\Http\Controllers\Controller;
use App\alumno;
use App\curso;
use App\matricula;
use Illuminate\Http\Request;

class ActualizarAlumnoController extends Controller {

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
	$alum=NULL;
	return view("proyecto.ActualizarAlumno",compact('alum'));
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
		$alum;
		$idcurso=0;
		$grado;
		$grupo;

$iden=$request->identificacion;

//buscamos el registro que coincida con la indentificacion proporcionada
$matriculas=matricula::where('idalumno','=',$iden)->get();
		
foreach ($matriculas as $matricula) {
     	$idcurso=$matricula->idcurso;
     	 }
 if($idcurso>0){
//se busca el grado y grupo en el que esta matriculado
$cursos=curso::where('id','=',$idcurso)->get();
     foreach ($cursos as $curso) {
     $grado=$curso->grado;
     $grupo=$curso->grupo;
   }

///buscamos toda la informacion del alumno
   		$alumnos=alumno::where('identificacion','=',$iden)->where('estado','=','Activo')->get();

///guardamos todo en un array
		foreach ($alumnos as $alumno) {
$alum=array($alumno->nombre,$alumno->apellido,$alumno->identificacion,$alumno->direccion,$alumno->telefono,$alumno->sexo,
	        $alumno->fechanac,$grado,$grupo);
			}

	}
	else{
		$alum="No";
	}


	return view("proyecto.ActualizarAlumno",compact('alum'));

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
	public function update()
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
