@extends('app')

@section('content')

		<header class="row visible-lg ">
	
			<div class=" col-lg-4 logo container">
				<img src="Iconos/logo2.svg" align="right">
			</div>
		<div class="col-lg-8 container  titu">
		
		<h1 class="titulo">Institución Educativa</h1>

</div>

	</header>
	<header class="row visible-md ">
	
			<div class=" col-md-4 logo container">
				<img src="Iconos/logo2.svg" align="right">
			</div>
		<div class="col-md-8 container  titu">
		
		<h1 class="titulo">Institución Educativa</h1>

</div>
	</header>
		<header class="row visible-sm ">
	
			<div class=" col-sm-3 logo container">
				<img src="Iconos/logo2.svg" align="right">
			</div>
		<div class="col-sm-9 container  titu">
		
		<h1 class="titulo">Institución Educativa</h1>

</div>
	</header>
		<header class="row visible-xs">
	
			<div class=" col-xs-2 logo container">
				<img src="Iconos/logo2.svg" align="right">
			</div>
		<div class="col-xs-10 container titu">
		
		<h1 class="titulo">Institución Educativa</h1>
</div>
	</header>

<div class="visible-lg visible-md " style="height:150px";></div>
<div class="visible-xs visible-sm" style="height:80px";></div>

<div class="container">
	<div class="container-fluid col-xs-4 col-sm-4 col-md-2"><center><a href="#"><img src="Iconos/AgregarAlumno.svg"   width="110" class="img-circle"></a><p><br><strong>Registrar Alumno<strong></p></center></div>
	<div class="container-fluid col-xs-4 col-sm-4 col-md-2"><center><a href="#"><img src="Iconos/AgregarProfesor.svg"   width="110" class="img-circle"></a><p><br><strong>Registrar Profesor<strong></p></center></div>
	<div class="container-fluid col-xs-4 col-sm-4 col-md-2"><center><a href="#"><img src="Iconos/AgregarSecretaria.svg"  width="110"  class="img-circle"></a><p><br><strong>Registrar secretaria<strong></p></center></div>
	<div class="container-fluid col-xs-4 col-sm-4 col-md-2"><center><a href="#"><img src="Iconos/AgregarAsigantura.svg"   width="110" class="img-circle"></a><p><br><strong>Registrar asignatura<strong></p></center></div>
	<div class="container-fluid col-xs-4 col-sm-4 col-md-2"><center><a href="MenuConsultarAlumno.html"><img src="Iconos/ConsultarAlumno.svg" width="110" class="img-circle"></a><p><br><strong>Consultar Alumno<strong></p></center></div>
	<div class="container-fluid col-xs-4 col-sm-4 col-md-2"><center><a href="MenuConsultarProfesor.html"><img src="Iconos/ConsultarProfesor.svg" width="110" class="img-circle"></a><p><br><strong>Consultar Profesor<strong></p></center></div>		

</div>


 <footer class="footer">
      
        <h5 >Copyright © Todos los derechos reservados Kelly Villareal & Alex Benavides</h5>
  
    </footer>

@endsection