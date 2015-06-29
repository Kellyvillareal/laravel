<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Asignaturas</title>
		<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/estilo.css') }}" rel="stylesheet">

</head>

<header class="row visible-lg ">
	<div class=" col-lg-1 logo container">
		<a href="" onclick="history.back()">	<img src="{{ asset('Iconos/atras.svg') }}" align="right"> </a>
	</div>
			<div class=" col-lg-4 logo container">
				<img src="Iconos/logo2.svg" align="right">
			</div>
		<div class="col-lg-5 container  titu">
		
		<h1 class="titulo">Asignaturas</h1>

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
		
		<h1 class="titulo">Asignaturas</h1>

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
		
		<h1 class="titulo">Asignaturas</h1>

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
		
		<h1 class="titulo">Asignaturas</h1>
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


<body>
<div class="container-fluid">
	<div class="col-md-1"></div>
			 {!! Form::open( [ 'route' => 'consultarasignatura.store', 'class' => 'col-md-10' ] ) !!}
   	@if (count($errors) > 0)
						<div class="alert alert-danger" style="margin-top:2%; font-family:Calibri;">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
		
								@endforeach
							</ul>
						</div>
					@endif
			<div class="input-group bus" >
         <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
       {!! Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Nombre']) !!}
         
           <span class="input-group-addon"> {!! Form::button('Buscar', ['type'=>'submit', 'id'=>'bot']) !!}</span>
         </div>
      
      {!! Form::close( ) !!}
         
    <div class="col-md-1"></div>
         </div>
<div class="container-fluid">
<div class="col-md-1"></div>
<div class="col-md-10">
	@if($busqueda==NULL)
<table class="table table-responsive table-condensed">

	<tr class="estilotr">
		<td>Codigo</td>
		<td>Asignatura</td>
		<td>Grado</td>
		<td>Grupo</td>
		<td>Profesor</td>

	</tr>
		@foreach($asignaturas as $asignatura)

	<tr>
    
		<td>{{ $asignatura->id }}</td>
		<td>{{ $asignatura->nombre }}</td>
		@foreach($cursos as $curso)
		@if($asignatura->idcurso==$curso->id)


		<td>{{ $curso->grado }}</td>
		<td>{{ $curso->grupo }}</td>

		<!--Profesor que dicta la asignatura-->
		<td></td>

	</tr>
@endif
@endforeach
@endforeach
</table>

{!! $asignaturas->setPath('')->render()!!}

@else

<table class="table table-responsive table-condensed">

	<tr class="estilotr">
		<td>Codigo</td>
		<td>Asignatura</td>
		<td>Grado</td>
		<td>Grupo</td>
		<td>Profesor</td>

	</tr>
		@foreach($busqueda as $asignatura)

	<tr>
    
		<td>{{ $asignatura->id }}</td>
		<td>{{ $asignatura->nombre }}</td>
		@foreach($cursos as $curso)
		@if($asignatura->idcurso==$curso->id)


		<td>{{ $curso->grado }}</td>
		<td>{{ $curso->grupo }}</td>

		<!--Profesor que dicta la asignatura-->
		<td></td>

	</tr>
@endif
@endforeach
@endforeach
</table>



@endif
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
