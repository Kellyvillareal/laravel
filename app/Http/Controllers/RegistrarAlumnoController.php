<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrarAlumnoRequest;
use Illuminate\Http\Request;
use App\alumno;
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
	public function store(RegistrarAlumnoRequest $request)
	{

	 //$nom=$request->identificacion;
	//$alumno = alumno::create($request->all());
	///$alumno = alumno::create([$nom,$request->nombre,$request->apellido,$request->direccion,$request->telefono,$request->fechanac]);
	$fecha=date("y/m/d");
$id=0;
if($request->grado==1 && $request->grupo==1){$id=1;}if($request->grado==1 && $request->grupo==2){$id=2;}if($request->grado==1 && $request->grupo==3){$id=3;}if($request->grado==2 && $request->grupo==1){$id=4;}if($request->grado==2 && $request->grupo==2){$id=5;}if($request->grado==2 && $request->grupo==3){$id=6;}if($request->grado==3 && $request->grupo==1){$id=7;}if($request->grado==3 && $request->grupo==2){$id=8;}if($request->grado==3 && $request->grupo==3){$id=9;}if($request->grado==4 && $request->grupo==1){$id=10;}if($request->grado==4 && $request->grupo==2){$id=11;}if($request->grado==4 && $request->grupo==3){$id=12;}if($request->grado==5 && $request->grupo==1){$id=13;}if($request->grado==5 && $request->grupo==2){$id=14;}if($request->grado==5 && $request->grupo==3){$id=15;}if($request->grado==6 && $request->grupo==1){$id=16;}if($request->grado==6 && $request->grupo==2){$id=17;}if($request->grado==6 && $request->grupo==3){$id=18;}if($request->grado==7 && $request->grupo==1){$id=19;}if($request->grado==7 && $request->grupo==2){$id=20;}if($request->grado==7 && $request->grupo==3){$id=21;}if($request->grado==8 && $request->grupo==1){$id=22;}if($request->grado==8 && $request->grupo==2){$id=23;}if($request->grado==8 && $request->grupo==3){$id=24;}if($request->grado==9 && $request->grupo==1){$id=25;}if($request->grado==9 && $request->grupo==2){$id=26;}if($request->grado==9 && $request->grupo==3){$id=27;}if($request->grado==10 && $request->grupo==1){$id=28;}if($request->grado==10 && $request->grupo==2){$id=29;}if($request->grado==10 && $request->grupo==3){$id=30;}if($request->grado==11 && $request->grupo==1){$id=31;}if($request->grado==11 && $request->grupo==2){$id=32;}if($request->grado==11 && $request->grupo==3){$id=33;}         

//$id=\DB::table('cursos')->select('id','grado')->where('grado','=',$request->grado)->where('grupo','=',$request->grupo)->get();

DB::table('alumnos')->insert(array(
            array(
                'identificacion' => $request->identificacion,
                'nombre' => $request->nombre,
                'apellido'  =>	$request->apellido,
                'direccion' => $request->direccion,
                'telefono' => $request->telefono,
                'fechanac' => $request->fechanac,
                'sexo' => $request->sexo,
                'estado' => 'Activo',
                'fechavin' => $fecha,


 
            )
        ));


DB::table('matriculas')->insert(array(
            array(
                'idcurso' => $id,
                'idalumno' => $request->identificacion,
                'estado' => 'Actual',



 
            )
        ));



	$mensaje='Alumno Registrado con exito';
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
