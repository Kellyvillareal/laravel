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
		<a href="menuactualizarprofesor" >	<img src="{{ asset('Iconos/atras.svg') }}" align="right"> </a>
	</div>
			<div class=" col-lg-3 logo container">
				<img src="Iconos/logo2.svg" align="right">
			</div>
		<div class="col-lg-6 container  titu">
		
		<h1 class="titulo">Eliminar Profesor</h1>

</div>
<div class="col-lg-2 " style="height:76px; background:#2D3E50;">
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
		
		<h1 class="titulo">Eliminar Profesor</h1>

</div>

<div class="col-md-2 " style="height:76px; background:#2D3E50;">
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
		
		<h1 class="titulo">Eliminar Profesor</h1>

</div>

<div class="col-sm-2 " style="height:76px; background:#2D3E50;">
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
		
		<h1 class="titulo">Eliminar Profesor</h1>
</div>
<div class="col-xs-2 " style="height:76px; background:#2D3E50;">
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


<div class="visible-lg visible-md visible-sm visible-xs" style="height:20px";></div>

<div class="container-fluid">
	<div class="col-md-3"></div>
	<div class="col-md-6">
			<div class="input-group busc">
         <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
         <input type="text" class="form-control" placeholder="Identificacion" required>
           <span class="input-group-addon"><button id="bot">Buscar</button></span>
         </div>
         </div>
    <div class="col-md-3"></div>
         </div>


<div class="container-fluid">
 
<div class="col-md-3"></div>


<form class="col-md-6" style="margin-top:10px;">
	
<table class="actua">
	<tr>
		<td>
			<div class="input-group   inp">
 	<label >Nombre</label>
 	<input type="text" class="form-control "  required>
 </div>
</td>

<td class="col"></td>
		<td>
			 	<div class="input-group   inp">
 	<label >Telefono</label>
 	<input type="text" class="form-control "  required>
 </div>
		</td>
	</tr>

	<tr>
		<td>
				<div class="input-group  inp">
 	<label>Apellido</label>
 	 	<input type="text" class="form-control "  required> 
 	 </div>	
		</td>

		<td class="col"></td>
		
		<td>
				<div class="input-group  inp">
 	<label>Dirección</label>
 	 	<input type="text" class="form-control "  required> 
 	 </div>	
		</td>
	</tr>

	<tr>
		<td>
			<div class="input-group  inp">
 	 	<label>Identificacion</label>
 	 	 	<input type="text" class="form-control "  required>	 
 	 	 </div>
		</td>

		<td class="col"></td>
		
		<td>
				<div class="input-group  inp">
 	 	<label>Fecha de nacimiento</label>
 	 	 	<input type="date" class="form-control "  required>	 
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
 	 	 	<label>Titulo</label>
 	 	 	 	<input type="text" class="form-control "  required> 
 	 	 	 </div>	
		</td>
	</tr>

</table>

<center><button type="submit" class="btn btn-primary form-control regis" style="margin-top:5%;">Eliminar</button></center>
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