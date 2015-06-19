<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('/', 'administradorcontroller');

Route::resource('profesor','ProfesorController');
Route::resource('secretaria','SecretariaController');
Route::resource('administrador','AdministradorController');
Route::resource('consultaralumno','MenuConsultarAlumnoController');
Route::resource('consultarprofesor','MenuConsultarProfesorController');
Route::resource('consultardatoshistoricos','MenuDatosHistoricosController');
Route::resource('registrarprofesor','RegistrarProfesorController');
Route::resource('registraralumno','RegistrarAlumnoController');
Route::resource('registrarasignatura','RegistrarAsignaturaController');
Route::resource('registrarsecretaria','RegistrarSecretariaController');
Route::resource('notasactuales','NotasActualesController');
Route::resource('registronotas','RegistrosNotasController');
Route::resource('informacionalumno','VerInformacionController');
Route::resource('asignaturasasignadas','AsignaturasAsignadasController');
Route::resource('informacionprofesor','VerInformacionPController');
Route::resource('consultarasignatura','ConsultarAsignaturaController');
Route::resource('exalumnos','ExAlumnosController');
Route::resource('exprofesores','ExProfesoresController');
Route::resource('exasignaturas','ExAsignaturasController');
Route::resource('actualizaralumno','ActualizarAlumnoController');
Route::resource('actualizarprofesor','ActualizarProfesorController');
Route::resource('actualizarasignatura','ActualizarAsignaturaController');
Route::resource('asignarcargas','CargasAcademicasController');
Route::resource('registrarnotas','RegistrarNotasController');
Route::resource('listadoalumnos','ListadoAlumnosController');
Route::resource('notasalumnos','NotasAlumnosController');
Route::resource('asignaturasprofesor','AsignaturasProfesorController');
Route::resource('usuarios','usercontroller');
Route::resource('prueba','pruebacontroller');

//Route::get('home', 'HomeController@index');
 
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/* Rutas para recicbir y guardar los registros */
Route::resource('datosalumnos','datosalumnocontroller');



