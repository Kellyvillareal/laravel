<!DOCTYPE html>
<html lang="es">

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
		
		<h1 class="titulo">Registrar Alumno</h1>

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
		
		<h1 class="titulo">Registrar Alumno</h1>

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
		
		<h1 class="titulo">Registrar Alumno</h1>

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
		
		<h1 class="titulo">Registrar Alumno</h1>
</div>
	</header>


<div class="visible-lg visible-md visible-sm visible-xs" style="height:30px";></div>

<div class="container-fluid">
 
<div class="col-md-3"></div>

<form class="col-md-6">
	
	<!--@if (count($errors) > 0)
						<div class="alert alert-danger" style="margin-top:2%; font-family:Calibri;">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif-->


<table>
	<tr>
		<td>
			<div class="input-group   inp">
 	<label >Nombre</label>
 	<input type="text" class="form-control " name="nombre" title="El nombre es obligatorio" required>
 </div>
</td>

<td class="col"></td>
		<td>
			 	<div class="input-group   inp">
 	<label >Dirección</label>
 	<input type="text" class="form-control " >
 </div>
		</td>
	</tr>

	<tr>
		<td>
				<div class="input-group  inp">
 	<label>Apellido</label>
 	 	<input type="text" class="form-control "  > 
 	 </div>	
		</td>

		<td class="col"></td>
		
		<td>
				<div class="input-group  inp">
 	<label>Fecha Nacimiento</label>
 	 	<input type="date" class="form-control "  > 
 	 </div>	
		</td>
	</tr>

	<tr>
		<td>
			<div class="input-group  inp">
 	 	<label>Identificacion</label>
 	 	 	<input type="text" class="form-control "  >	 
 	 	 </div>
		</td>

		<td class="col"></td>
		
		<td>
				<div class="input-group  inp">
 	 	<label>Grado</label>
 	 	 	<select class="form-control">
 	 	 		<option value="">Seleccionar</option>
 	 	 		<option value="">1</option>
 	 	 		<option value="">2</option>
 	 	 		<option value="">3</option>
 	 	 		<option value="">4</option>
 	 	 		<option value="">5</option>
 	 	 		<option value="">6</option>
 	 	 		<option value="">7</option>
 	 	 		<option value="">8</option>
 	 	 		<option value="">9</option>
 	 	 		<option value="">10</option>
 	 	 		<option value="">11</option>
 	 	 	</select>
 	 	 </div>
		</td>
	</tr>

	<tr>
		<td>
				 	<div class="input-group  inp">
 	 	 	<label>Sexo</label>
 	 	 	 <select class="form-control">
 	 	 	 	<option value="">Seleccionar</option>
 	 	 	 	<option value="Masculino">Masculino</option>
 	 	 	 	<option value="Femenino">Femenino</option>
 	 	 	 </select>
 	 	 	 </div>	
		</td>

		<td class="col"></td>
		
		<td>
			

 	 	 	<div class="input-group  inp">
 	 	 	<label>Grupo</label>
 	 	 	<select class="form-control">
 	 	 		<option value="">Seleccionar</option>
 	 	 		<option value="">1</option>
 	 	 		<option value="">2</option>
 	 	 		<option value="">3</option>
 	 	 	</select>
 	 	 	 </div>	
		</td>
	</tr>

	<tr>
		<td>
				 	<div class="input-group inp">
 	 	 	 	<label>Telefono</label>
 	 	 	 	 	<input type="tel" class="form-control "  > 
 	 	 	 	 </div>
		</td>

		<td class="col"></td>
		
		<td>
			
		</td>
	</tr>
</table>

<center><button type="submit" class="btn btn-primary form-control regis">Registrar</button></center>
</form>

<div class="col-md-3"></div>


</div>

	<script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>

 <footer class="footer">
      
        <h5 >Copyright © Todos los derechos reservados Kelly Villareal & Alex Benavides</h5>
  
    </footer>


</html>