<!--@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif -->

@extends('app')

@section('content')
<div class="container-fluid">
			 <div class="row cont">
    
    <div class="col-xs-1 col-sm-3 col-md-4 "></div>
				

					<form class="col-xs-10 col-sm-6 col-md-4 formulario container" role="form" method="POST" action="{{ url('/auth/login') }}">
						
						@if (count($errors) > 0)
						<div class="alert alert-danger" style="margin-top:2%; font-family:Calibri;">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

						<input type="hidden" name="_token" value="{{ csrf_token() }}">


         <div class="input-group in">
         <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
         <input type="text" class="form-control" placeholder="Usuario" name="usuario" value="{{ old('usuario') }}" >
         </div>

						
         <div class="input-group in">
         <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
         <input type="password" class="form-control" placeholder="Contraseña"name="password" >
         </div>




						<center><button type="submit" class="btn btn-primary form-control ingre">Ingresar</button></center>
<br>
					</form>
			 <div class="col-xs-1 col-sm-3 col-md-4"></div>

  </div>
		</div>

@endsection
