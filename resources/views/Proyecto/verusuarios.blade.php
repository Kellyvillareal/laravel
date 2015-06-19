<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>usuarios</title>
		<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/estilo.css') }}" rel="stylesheet">

</head>

	
<h2>Usuarios</h2>

@foreach($usuarios as $usuario)
<p>Nombre: {{ $usuario->usuario }} </p>
@endforeach
			<br />
			{!! $usuarios->setPath('')->render()!!}
</body>
</html>