
@extends('app')

@section('content')



<div class="visible-lg visible-md visible-sm" style="height:75px;"></div>
<div class="visible-xs" style="height:45px;"></div>

<div class="container menu">
	<div class="container-fluid col-xs-4 col-sm-3 col-md-2"><center><a href="{{ url('registraralumno') }}"><img src="Iconos/AgregarAlumno.svg"   width="110" class="img-circle"></a><p><br><strong>Registrar<br/>Alumno<strong></p></center></div>
	<div class="container-fluid col-xs-4 col-sm-3 col-md-2"><center><a href="{{ url('registrarprofesor') }}"><img src="Iconos/AgregarProfesor.svg"   width="110" class="img-circle"></a><p><br><strong>Registrar<br/>Profesor<strong></p></center></div>
	<div class="container-fluid col-xs-4 col-sm-3 col-md-2"><center><a href="{{ url('registrarsecretaria') }}"><img src="Iconos/AgregarSecretaria.svg"  width="110"  class="img-circle"></a><p><br><strong>Registrar<br/>secretaria<strong></p></center></div>
	<div class="container-fluid col-xs-4 col-sm-3 col-md-2"><center><a href="{{ url('registrarasignatura') }}"><img src="Iconos/AgregarAsigantura.svg"   width="110" class="img-circle"></a><p><br><strong>Registrar asignatura<strong></p></center></div>
	<div class="container-fluid col-xs-4 col-sm-3 col-md-2"><center><a href="{{ url('consultaralumno') }}"><img src="Iconos/ConsultarAlumno.svg" width="110" class="img-circle"></a><p><br><strong>Consultar<br/>Alumno<strong></p></center></div>
	<div class="container-fluid col-xs-4 col-sm-3 col-md-2"><center><a href="{{ url('consultarprofesor') }}"><img src="Iconos/ConsultarProfesor.svg" width="110" class="img-circle"></a><p><br><strong>Consultar<br/>Profesor<strong></p></center></div>		

<br>
	<div class="container-fluid col-xs-4 col-sm-3 col-md-2"><center><a href="{{ url('consultarasignatura') }}"><img src="Iconos/ConsultarAsignatura.svg" width="110" class="img-circle"></a><p><br><strong>Consultar<br/>Asignatura<strong></p></center></div>
	<div class="container-fluid col-xs-4 col-sm-3 col-md-2"><center><a href="{{ url('consultardatoshistoricos') }}"><img src="Iconos/ConsultarDatosHistoricos.svg" width="110" class="img-circle"></a><p><br><strong>Consultar Datos Historicos<strong></p></center></div>
	<div class="container-fluid col-xs-4 col-sm-3 col-md-2"><center><a href="{{ url('actualizaralumno') }}"><img src="Iconos/ActualizarAlumno.svg" width="110" class="img-circle"></a><p><br><strong>Actualizar<br/>Alumno<strong></p></center></div>
	<div class="container-fluid col-xs-4 col-sm-3 col-md-2"><center><a href="{{ url('actualizarprofesor') }}"><img src="Iconos/ActualizarProfesor.svg" width="110" class="img-circle"></a><p><br><strong>Actualizar<br/>Profesor<strong></p></center></div>
	<div class="container-fluid col-xs-4 col-sm-3 col-md-2"><center><a href="{{ url('actualizarasignatura') }}"><img src="Iconos/ActualizarAsignatura.svg" width="110" class="img-circle"></a><p><br><strong>Actualizar<br/>Asignatura<strong></p></center></div>
	<div class="container-fluid col-xs-4 col-sm-3 col-md-2"><center><a href="{{ url('asignarcargas') }}"><img src="Iconos/AsignarCargas.svg" width="110" class="img-circle"></a><p><br><strong>Asignar Cargas Academicas<strong></p></center></div>		

</div>


    @endsection