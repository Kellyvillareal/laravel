<!DOCTYPE html>
<html lang="es">

<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Asignar Cargas</title>
		<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/estilo.css') }}" rel="stylesheet">

</head>

<body>

		<header class="row visible-lg ">
	
			<div class=" col-lg-3 logo container">
				<img src="Iconos/logo2.svg" align="right">
			</div>
		<div class="col-lg-9 container  titu">
		
		<h1 class="titulo">Asignar cargas academicas</h1>

</div>

	</header>
	<header class="row visible-md ">
	
			<div class=" col-md-3 logo container">
				<img src="Iconos/logo2.svg" align="right">
			</div>
		<div class="col-md-9 container  titu">
		<h1 class="titulo">Asignar cargas academicas</h1>

</div>
	</header>
		<header class="row visible-sm ">
	
			<div class=" col-sm-2 logo container">
				<img src="Iconos/logo2.svg" align="right">
			</div>
		<div class="col-sm-10 container  titu">
		
		<h1 class="titulo">Asignar cargas academicas</h1>

</div>
	</header>
		<header class="row visible-xs">
	
			<div class=" col-xs-2 logo container">
				<img src="Iconos/logo2.svg" align="right">
			</div>
		<div class="col-xs-10 container titu">
		
		<h1 class="titulo">Asignar cargas academicas</h1>
</div>
	</header>


<div class="visible-lg visible-md visible-sm visible-xs" style="height:20px";></div>


<div class="container-fluid">
 
<div class="col-md-3"></div>
<form class="col-md-6 color" style="margin-top:10px;" >
	
<table class="actua">
	<tr>
		<td>
		<select class="form-control" style="width:89%;">
			<option value="">Asignatura</option>
			<option value="">Matematica</option>
			<option value="">Sociales</option>
		</select>
</td>

<td class="col"></td>
		<td>
	 <select class="form-control">
			<option value="">Profesor</option>
			<option value="">XXXXXXX</option>
			<option value="">CCCC</option>
		</select>
		</td>
	</tr>

	<tr>
		<td>
	<select class="form-control" style="width:89%; margin-top:-1%;">
 	 	 	 	<option value="">Grado</option>
 	 	 	 	<option value="1">1</option>
 	 	 	 	<option value="2">2</option>
 	 	 	 	<option value="3">3</option>
 	 	 	 	<option value="4">4</option>
 	 	 	 	<option value="5">5</option>
 	 	 	 	<option value="6">6</option>
 	 	 	 	<option value="7">7</option>
 	 	 	 	<option value="8">8</option>
 	 	 	 	<option value="9">9</option>
 	 	 	 	<option value="10">10</option>
 	 	 	 	<option valuec"11">11</option>
 	 	 	 </select>	
		</td>

		<td class="col"></td>
		
		<td>
				<div class="" style="margin-top:40%; background:#2D3E50; color:white; height:32px; border-radius:0.2em;">
 <label style="color:white; font-weight:normal; margin-top:5px; margin-left:15px;"> Grupo </label>
 </div>	
 <label class="checkbox" style="margin-left:10%;">
  <input type="checkbox" id="checkboxEnLinea1" value="opcion_1"> 1
</label>
<label class="checkbox" style="margin-left:10%;">
  <input type="checkbox" id="checkboxEnLinea2" value="opcion_2"> 2
</label>
<label class="checkbox" style="margin-left:10%;">
  <input type="checkbox" id="checkboxEnLinea3" value="opcion_3"> 3
</label>
 	 
		</td>
	
</table>

<center><button type="submit" class="btn btn-primary form-control regis" style="margin-left:20px;">Actualizar</button><button type="submit" class="btn btn-primary form-control regis" style="margin-left:50px;">Eliminar</button></center>
</form>

<div class="col-md-3"></div>


</div>
</body>

 <footer class="footer">
      
        <h5 >Copyright © Todos los derechos reservados Kelly Villareal & Alex Benavides</h5>
  
    </footer>


</html>