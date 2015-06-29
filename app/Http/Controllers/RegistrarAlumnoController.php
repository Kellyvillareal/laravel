<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrarAlumnoRequest;
use Illuminate\Http\Request;
use App\alumno;
use App\matricula;
use App\curso;
use App\asignatura;
use App\asigvista;
use DB;

class RegistrarAlumnoController extends Controller {

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
	   return view('proyecto.RegistrarAlumno')->with('mensaje',$mensaje);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
			
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
public function store(RegistrarAlumnoRequest $request){

//La fecha actual para saber que dia se vinculo el estudiante
$fecha=date("y/m/d");

//buscamos el id del curso al que matricularemos al alumno
$cursos=curso::where('grado','=',$request->grado)->where('grupo','=',$request->grupo)->get();
if(count($cursos)==1){ 
	foreach ($cursos as $curso) {
	$id=$curso->id;
}
}

//insertamos los datos del alumno en la BD
$InsertarAlumno=alumno::create(['identificacion' => $request->identificacion,'nombre' => $request->nombre, 
	                           'apellido'=>$request->apellido,'direccion' => $request->direccion,'telefono' => $request->telefono,
                               'fechanac' => $request->fechanac,'sexo' => $request->sexo,'estado' => 'Activo','fechavin' => $fecha]);

//Guardamos los datos de la matricula en la BD                           
$CrearMatricula=matricula::create(['idcurso'=>$id,'idalumno' => $request->identificacion,'estado' => 'Actual']);




$asigvistas;

//buscamos las asignaturas que pertenezcan al grupo que se matriculo al alumno
$asignaturas=asignatura::where('idcurso','=',$id)->where('estado','=','Activo')->get();

//le asociamos al alumno las asignaturas que se encuentren en curso en el que se matriculo
foreach ($asignaturas as $asignatura) {
	$asigvistas=asigvista::where('codigoasig','=',$asignatura->id)->where('idalumno','=',$request->identificacion)->get();
if(count($asigvistas)==0){
	$InsertarAsigantura=asigvista::create(['codigoasig'=>$asignatura->id,'idalumno'=>$request->identificacion,'estado'=>'Actual']);
}
}



$mensaje='Alumno Registrado con exito';
   
//retornamos a la vista con el mensaje de exito
  return view('proyecto.RegistrarAlumno')->with('mensaje',$mensaje);
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
