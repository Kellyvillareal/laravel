<!DOCTYPE html>
<html>

<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Institución</title>
		<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/estilo.css') }}" rel="stylesheet">

</head>

<body>

		<header class="row visible-lg ">
	
			<div class=" col-lg-4 logo container">
				<img src="Iconos/logo2.svg" align="right">
			</div>
		<div class="col-lg-8 container  titu">
		
		<h1 class="titulo">Consultar Alumno</h1>

</div>

	</header>
	<header class="row visible-md ">
	
			<div class=" col-md-4 logo container">
				<img src="Iconos/logo2.svg" align="right">
			</div>
		<div class="col-md-8 container  titu">
		
		<h1 class="titulo">Consultar Alumno</h1>

</div>
	</header>
		<header class="row visible-sm ">
	
			<div class=" col-sm-3 logo container">
				<img src="Iconos/logo2.svg" align="right">
			</div>
		<div class="col-sm-9 container  titu">
		
		<h1 class="titulo">Consultar Alumno</h1>

</div>
	</header>
		<header class="row visible-xs">
	
			<div class=" col-xs-2 logo container">
				<img src="Iconos/logo2.svg" align="right">
			</div>
		<div class="col-xs-10 container titu">
		
		<h1 class="titulo">Consultar Alumno</h1>
</div>
	</header>


<div class="visible-lg visible-md visible-sm visible-xs" style="height:150px";></div>

<div class="container-fluid">
 
 <div class="col-md-2 col-sm-2"></div>
	<div class="container-fluid col-xs-4 col-sm-2 col-md-2"><center><a href="{{ url('notasactuales') }}"><img src="Iconos/VerNotasAlumnos.svg" class="img-circle"></a><p><br><strong>Ver Notas Actuales<strong></p></center></div>
<div class="col-md-1 col-sm-1"></div>
	<div class="container-fluid col-xs-4 col-sm-2 col-md-2"><center><a href="{{ url('registronotas') }}"><img src="Iconos/VerRegistroNotas.svg" class="img-circle"></a><p><br><strong>Ver Registro De Notas<strong></p></center></div>
	<div class="col-md-1 col-sm-1"></div>
	<div class="container-fluid col-xs-4 col-sm-2 col-md-2"><center><a href="{{ url('informacionalumno') }}"><img src="Iconos/VerInformacion.svg" class="img-circle"></a><p><br><strong>Ver Informacion<strong></p></center></div>	 
	<div class="col-md-2 col-sm-2"></div>
</div>
</body>
 <footer class="footer">
      
        <h5 >Copyright © Todos los derechos reservados Kelly Villareal & Alex Benavides</h5>
  
    </footer>



</html>

