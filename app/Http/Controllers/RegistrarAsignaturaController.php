<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrarAsignaturaRequest;
use Illuminate\Http\Request;
use DB;
use App\curso;
use App\asignatura;
use App\asigvista;
use App\matricula;
class RegistrarAsignaturaController extends Controller {

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
	   return view('proyecto.RegistrarAsignatura')->with('mensaje',$mensaje);
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

public function store(RegistrarAsignaturaRequest $request){

$cursos=curso::all();
$asignaturas=asignatura::all();
if($request->gra1=='' && $request->gra2=='' && $request->gra3=='' && $request->gra4=='' && $request->gra5=='' && $request->gra6=='' && $request->gra7=='' && $request->gra8=='' && $request->gra9=='' && $request->gra10=='' && $request->gra11==''){
	$mensaje='Debes asignarle minimo un grado a la asigantura';
}
else {

    if ($request->gra1 != '') {
        foreach ($cursos as $curso) {
            if ($curso->grado == $request->gra1) {

                DB::table('asignaturas')->insert(array(
                    array(
                        'nombre' => $request->nombre,
                        'idcurso' => $curso->id,
                        'estado' => 'Activo',

                    )));


            }
        }


    }

    if ($request->gra2 != '') {

        foreach ($cursos as $curso) {
            if ($curso->grado == $request->gra2) {

                DB::table('asignaturas')->insert(array(
                    array(
                        'nombre' => $request->nombre,
                        'idcurso' => $curso->id,
                        'estado' => 'Activo',

                    )));


            }
        }

    }

    if ($request->gra3 != '') {
        foreach ($cursos as $curso) {
            if ($curso->grado == $request->gra3) {

                DB::table('asignaturas')->insert(array(
                    array(
                        'nombre' => $request->nombre,
                        'idcurso' => $curso->id,
                        'estado' => 'Activo',

                    )));


            }
        }
    }


    if ($request->gra4 != '') {

        foreach ($cursos as $curso) {
            if ($curso->grado == $request->gra4) {

                DB::table('asignaturas')->insert(array(
                    array(
                        'nombre' => $request->nombre,
                        'idcurso' => $curso->id,
                        'estado' => 'Activo',

                    )));


            }
        }


    }

    if ($request->gra5 != '') {
        foreach ($cursos as $curso) {
            if ($curso->grado == $request->gra5) {

                DB::table('asignaturas')->insert(array(
                    array(
                        'nombre' => $request->nombre,
                        'idcurso' => $curso->id,
                        'estado' => 'Activo',

                    )));


            }
        }
    }


    if ($request->gra6 != '') {
        foreach ($cursos as $curso) {
            if ($curso->grado == $request->gra6) {

                DB::table('asignaturas')->insert(array(
                    array(
                        'nombre' => $request->nombre,
                        'idcurso' => $curso->id,
                        'estado' => 'Activo',

                    )));


            }
        }

    }

    if ($request->gra7 != '') {
        foreach ($cursos as $curso) {
            if ($curso->grado == $request->gra7) {

                DB::table('asignaturas')->insert(array(
                    array(
                        'nombre' => $request->nombre,
                        'idcurso' => $curso->id,
                        'estado' => 'Activo',

                    )));


            }
        }
    }


    if ($request->gra8 != '') {

        foreach ($cursos as $curso) {
            if ($curso->grado == $request->gra8) {

                DB::table('asignaturas')->insert(array(
                    array(
                        'nombre' => $request->nombre,
                        'idcurso' => $curso->id,
                        'estado' => 'Activo',

                    )));


            }
        }
    }

    if ($request->gra9 != '') {
        foreach ($cursos as $curso) {
            if ($curso->grado == $request->gra9) {

                DB::table('asignaturas')->insert(array(
                    array(
                        'nombre' => $request->nombre,
                        'idcurso' => $curso->id,
                        'estado' => 'Activo',

                    )));


            }
        }
    }

    if ($request->gra10 != '') {
        foreach ($cursos as $curso) {
            if ($curso->grado == $request->gra10) {

                DB::table('asignaturas')->insert(array(
                    array(
                        'nombre' => $request->nombre,
                        'idcurso' => $curso->id,
                        'estado' => 'Activo',

                    )));


            }
        }
    }

    if ($request->gra11 != '') {

        foreach ($cursos as $curso) {
            if ($curso->grado == $request->gra11) {

                DB::table('asignaturas')->insert(array(
                    array(
                        'nombre' => $request->nombre,
                        'idcurso' => $curso->id,
                        'estado' => 'Activo',

                    )));


            }
        }
    }


//obtenemos los registros de las matriculas para saber sus identificaciones y curso al que estan asociados
$matriculas=matricula::where('estado','=','Actual')->get();

foreach ($matriculas as $matricula) {
$identificacion=$matricula->idalumno;
$idcur=$matricula->idcurso;

//buscamos las asignaturas que pertenezcan al grupo que se matriculo al alumno
$asignaturas=asignatura::where('idcurso','=',$idcur)->where('estado','=','Activo')->get();

//le asociamos al alumno las asignaturas que se encuentren en curso en el que se matriculo
foreach ($asignaturas as $asignatura) {
    $asigvistas=asigvista::where('codigoasig','=',$asignatura->id)->where('idalumno','=',$identificacion)->get();
if(count($asigvistas)==0){
    $InsertarAsigantura=asigvista::create(['codigoasig'=>$asignatura->id,'idalumno'=>$identificacion,'estado'=>'Acual']);
}
}


}



$mensaje='Asignatura Registrada con exito';
}

//Retornamos a la vista con el mensaje de exito
     return view('proyecto.RegistrarAsignatura')->with('mensaje',$mensaje);
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
