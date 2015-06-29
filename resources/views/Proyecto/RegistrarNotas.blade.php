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
	<div class=" col-lg-1 logo container">
		<a href="" onclick="history.back()">	<img src="{{ asset('Iconos/atras.svg') }}" align="right"> </a>
	</div>
			<div class=" col-lg-3 logo container">
				<img src="Iconos/logo2.svg" align="right">
			</div>
		<div class="col-lg-6 container  titu">
		
		<h1 class="titulo">Registrar Notas</h1>

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
		<div class="col-md-6 container  titu">
		
		<h1 class="titulo">Registrar Notas</h1>

</div>
<div class="col-md-2 " style="height:75px; background:#2D3E50;">
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
		<header class="row visible-sm ">
	<div class=" col-sm-1 logo container">
		<a href="" onclick="history.back()">	<img src="{{ asset('Iconos/atras.svg') }}" align="right"> </a>
	</div>
			<div class=" col-sm-2 logo container">
				<img src="Iconos/logo2.svg" align="right">
			</div>
		<div class="col-sm-7 container  titu">
		
		<h1 class="titulo">Registrar Notas</h1>

</div>
<div class="col-sm-2 " style="height:75px; background:#2D3E50;">
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
		<header class="row visible-xs">
	<div class=" col-xs-1 logo container">
		<a href="" onclick="history.back()">	<img src="{{ asset('Iconos/atras.svg') }}" align="right"> </a>
	</div>
			<div class=" col-xs-1 logo container">
				<img src="Iconos/logo2.svg" align="right">
			</div>
		<div class="col-xs-8 container titu">
		
		<h1 class="titulo">Registrar Notas</h1>
</div>
<div class="col-xs-2 " style="height:75px; background:#2D3E50;">
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


<div class="visible-lg visible-md visible-sm visible-xs" style="height:30px";></div>

<div class="container-fluid">
 
<div class="col-md-2"></div>


<form class="col-md-8" style="background:; margin-top:1%;">

<table>
	<tr>
		<td style="width:20%;">
			<select class="form-control" style="margin-left:10%;  background:#2d3e50; color:white;">
				<option value="">Asignatura</option>
				<option value="">Matematicas</option>
				<option value="">Sociales</option>
			</select>
		</td>

		<td style="width:5%;"></td>

		<td style="width:20%;">
			
				<select class="form-control" style="margin-left:10%; background:#2d3e50; color:white;">
				<option value="">Grado</option>
				<option value="">6</option>
				<option value="">7</option>
				<option value="">8</option>

			</select>
		</td>

		<td style="width:5%;"></td>

		<td style="width:20%;">
					<select class="form-control" style="margin-left:10%; background:#2d3e50; color:white;">
				<option value="">Grupo</option>
				<option value="">1</option>
				<option value="">2</option>
				<option value="">3</option>

			</select>
		</td>
	</tr>
</table>

<table class="table" style="margin-top:5%;">
	<tr class="estilotr">
	
		<td>Identificacion</td>
		<td width="30%">Nombre</td>
		<td>Periodo I</td>
		<td>Periodo II</td>
		<td>Periodo III</td>
		<td>Periodo IV</td>	
	</tr>
<?php
for($i=0;$i<3;$i++){
echo	'<tr>
		<td>950911311033</td>
		<td>Alex Benavides</td>
		<td><center><input type="number" style="width:70%;" class="form-control"></td></center>
		<td><center><input type="number" style="width:70%;" class="form-control"></td></center>
		<td><center><input type="number" style="width:70%;" class="form-control"></td></center>
		<td><center><input type="number" style="width:70%;" class="form-control"></td></center>
	</tr>';

}
?>
</table>
<center><button type="submit" class="btn btn-primary form-control regis">Registrar</button></center>
</form>

<div class="col-md-2"></div>


</div>


	<script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>

 <footer class="footer">
      
        <h5 >Copyright © Todos los derechos reservados Kelly Villareal & Alex Benavides</h5>
  
    </footer>

</html>
