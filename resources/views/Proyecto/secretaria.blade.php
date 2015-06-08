@extends('app')

@section('content')

		

<div class="visible-lg visible-md " style="height:150px";></div>
<div class="visible-xs visible-sm" style="height:80px";></div>

<div class="container menu">
	<div class="container-fluid col-xs-4 col-sm-3 col-md-2"><center><a href="{{ url('registraralumno') }}"><img src="Iconos/AgregarAlumno.svg"    class="img-circle"></a><p><br><strong>Registrar<br/>Alumno<strong></p></center></div>
	<div class="container-fluid col-xs-4 col-sm-3 col-md-2"><center><a href="{{ url('registrarprofesor') }}"><img src="Iconos/AgregarProfesor.svg"    class="img-circle"></a><p><br><strong>Registrar<br/>Profesor<strong></p></center></div>
	<div class="container-fluid col-xs-4 col-sm-3 col-md-2"><center><a href="{{ url('consultaralumno') }}"><img src="Iconos/ConsultarAlumno.svg"  class="img-circle"></a><p><br><strong>Consultar<br/>Alumno<strong></p></center></div>
	<div class="container-fluid col-xs-4 col-sm-3 col-md-2"><center><a href="{{ url('consultarprofesor') }}"><img src="Iconos/ConsultarProfesor.svg"  class="img-circle"></a><p><br><strong>Consultar<br/>Profesor<strong></p></center></div>		
<div class="container-fluid col-xs-4 col-sm-3 col-md-2"><center><a href="consultarasignatura"><img src="Iconos/ConsultarAsignatura.svg" class="img-circle"></a><p><br><strong>Consultar<br/>Asignatura<strong></p></center></div>
	<div class="container-fluid col-xs-4 col-sm-3 col-md-2"><center><a href="{{ url('consultardatoshistoricos') }}"><img src="Iconos/ConsultarDatosHistoricos.svg"  class="img-circle"></a><p><br><strong>Consultar Datos Historicos<strong></p></center></div>
	
</div>

@endsection