<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Informacion</title>
		<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/estilo.css') }}" rel="stylesheet">

</head>

<header class="row visible-lg ">
	<div class=" col-lg-1 logo container">
		<a href="" onclick="history.back()">	<img src="{{ asset('Iconos/atras.svg') }}" align="right"> </a>
	</div>
			<div class=" col-lg-3 logo container">
				<img src="Iconos/logo2.svg" align="right">
			</div>
		<div class="col-lg-6 container  titu">
		
		<h1 class="titulo">Asignaturas asignadas</h1>

</div>
<div class="col-lg-2 " style="height:75px; background:#2D3E50;">
	<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
					<li class="dropdown " >
							
						</li>
					@else
						<li class="dropdown cerr">
							<a href="#" style="color:grey;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->usuario }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu" >
								<li><a  href="{{ url('/auth/logout') }}">Cerrar Sesión</a></li>
							</ul>
						</li>
					@endif
				</ul>
</div>

	</header>
	<header class="row visible-md ">
	<div class=" col-md-1 logo container">
		<a href="" onclick="history.back()">	<img src="{{ asset('Iconos/atras.svg') }}" align="right"> </a>
	</div>
			<div class=" col-md-3 logo container">
				<img src="Iconos/logo2.svg" align="right">
			</div>
		<div class="col-md-8 container  titu">
		
		<h1 class="titulo">Asignaturas asignadas</h1>

</div>
	</header>
		<header class="row visible-sm ">
	<div class=" col-sm-1 logo container">
		<a href="" onclick="history.back()">	<img src="{{ asset('Iconos/atras.svg') }}" align="right"> </a>
	</div>
			<div class=" col-sm-2 logo container">
				<img src="Iconos/logo2.svg" align="right">
			</div>
		<div class="col-sm-9 container  titu">
		
		<h1 class="titulo">Asignaturas asignadas</h1>

</div>
	</header>
		<header class="row visible-xs">
	<div class=" col-xs-1 logo container">
		<a href="" onclick="history.back()">	<img src="{{ asset('Iconos/atras.svg') }}" align="right"> </a>
	</div>
			<div class=" col-xs-1 logo container">
				<img src="Iconos/logo2.svg" align="right">
			</div>
		<div class="col-xs-10 container titu">
		
		<h1 class="titulo">Asignaturas asignadas</h1>
</div>
	</header>


<body>
<div class="container-fluid">
	<div class="col-md-1"></div>
	<div class="col-md-10">
			<div class="input-group busc1">
         <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
         <input type="text" class="form-control" placeholder="Identificacion" required>
           <span class="input-group-addon"><button id="bot">Buscar</button></span>
         </div>
         </div>
    <div class="col-md-1"></div>
         </div>

<div class="container-fluid">
<div class="col-md-1"></div>
<div class="col-md-10">
<table class="table table-responsive ">
	<tr class="estilotr">
		<td>Codigo</td>
		<td>Asignatura</td>
		<td>Grado</td>
		<td>Curso</td>

	</tr>
	<tr>
		<td>0001</td>
		<td>Matematica</td>
		<td>4</td>
		<td>3</td>

	</tr>
	<tr>
		<td>0002</td>
		<td>Calculo</td>
		<td>11</td>
		<td>3</td>

	</tr>
</table>
</div>
<div class="col-md-1"></div>
</div>
	


		<script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>

 <footer class="footer">
      
        <h5 >Copyright © Todos los derechos reservados Kelly Villareal & Alex Benavides</h5>
  
    </footer>
</html>
