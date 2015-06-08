
@extends('app')

@section('content')

		


<div class="visible-lg visible-md visible-sm" style="height:150px";></div>
<div class="visible-xs" style="height:40px";></div>
<div class="container menu">
	<div class="container-fluid col-xs-6 col-sm-3 col-md-3"><center><a href="registrarnotas"><img src="Iconos/RegistrarNotas.svg" class="img-circle"></a><p><br><strong>Registrar Notas<strong></p></center></div>
	<div class="container-fluid col-xs-6 col-sm-3 col-md-3"><center><a href="listadoalumnos"><img src="Iconos/VerListaAlumnos.svg" class="img-circle"></a><p><br><strong>Listado<br> de alumnos<strong></p></center></div>
	<div class="container-fluid col-xs-6 col-sm-3 col-md-3"><center><a href="notasalumnos"><img src="Iconos/VerNotasAlumnos.svg" class="img-circle"></a><p><br><strong>Notas de<br> Alumnos<strong></p></center></div>
	<div class="container-fluid col-xs-6 col-sm-3 col-md-3"><center><a href="asignaturasprofesor"><img src="Iconos/VerAsignaturasAsignadas.svg" class="img-circle"></a><p><br><strong>Asignaturas<br> asignadas<strong></p></center></div>	

</div>




@endsection