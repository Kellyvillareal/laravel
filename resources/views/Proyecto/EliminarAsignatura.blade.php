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
		<a href="administrador">	<img src="{{ asset('Iconos/atras.svg') }}" align="right"> </a>
	</div>
	
			<div class=" col-lg-3 logo container">
				<img src="Iconos/logo2.svg" align="right">
			</div>
		<div class="col-lg-6 container  titu">
		
		<h1 class="titulo">Eliminar Asignatura</h1>

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
		
		<h1 class="titulo">Eliminar Asignatura</h1>

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
		
		<h1 class="titulo">Eliminar Asignatura</h1>

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
		
		<h1 class="titulo">Eliminar Asignatura</h1>
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


<div class="visible-lg visible-md visible-sm visible-xs" style="height:80px";></div>

<div class="container-fluid">
	<div class="col-md-3"></div>
	{!! Form::open( [ 'route' => 'eliminarasignatura.store', 'class' => 'col-md-6' ] ) !!}
   	@if (count($errors) > 0)
						<div class="alert alert-danger" style="margin-top:2%; font-family:Calibri;">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
			<center><div class="input-group busc">
         <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
       {!! Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Nombre']) !!}
         
           <span class="input-group-addon"> {!! Form::button('Buscar', ['type'=>'submit', 'id'=>'bot']) !!}</span>
         </div>
</center>
      {!! Form::close( ) !!}

    <div class="col-md-3"></div>
         </div>

<div class="container-fluid">
 
<div class="col-md-3"></div>

@if($asig!=NULL)
@if($asig=="No")
<div class="alert alert-danger text-center" style="margin-top:2%; font-family:Calibri;">
				
<p>No se encontro información</p>
					
</div>


@else

@if($asig=="Eliminada")
<div class="alert alert-success text-center" style="margin-top:2%; font-family:Calibri;">
				
<p>Asignatura Eliminada</p>
					
</div>
@else

{!! Form::open( [ 'route' => 'asignaturaeliminar.store', 'class' => 'col-md-6' ] ) !!}

	@if (count($errors) > 0)
						<div class="alert alert-danger" style="margin-top:2%; font-family:Calibri;">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
	<br>
	<center>

<table class="i"> 
		<tr>
		<td>
			<div class="input-group  inp text-center">
 		{!!	Form::label('Nombre', 'Nombre') !!}
 	{!! Form::text('nombre',$asig,['class'=>'form-control','readonly']) !!}
 </div>
</td>
{!! Form::hidden('nombre1',$asig,['class'=>'form-control']) !!}
	</tr>

	
		
</table>

</center>
<br><br>
<center>{!! Form::button('Eliminar', ['type'=>'submit', 'class'=>'btn btn-primary form-control regis']) !!}</center>


{!! Form::close( ) !!}
@endif
@endif
@endif
<div class="col-md-3"></div>


</div>


	<script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>

 <footer class="footer">
      
        <h5 >Copyright © Todos los derechos reservados Kelly Villareal & Alex Benavides</h5>
  
    </footer>


</html>