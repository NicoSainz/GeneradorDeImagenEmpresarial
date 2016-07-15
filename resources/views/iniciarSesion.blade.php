@extends('master1')
@section('encabezado')
@stop

@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<h1 align="center">Iniciar Sesion</h1>
		</div>		
	</div>
</div>
<hr>
<div class="container">
	<div class="row">
		<div class="col-xs-12 ">
			  <fieldset>
			  <form action="{{url('/login')}}" method="POST">
			  <input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="form-group">
			      <label for="nombre_empresa" class="col-lg-2 control-label">Nombre de Usuario :</label>
			      <div class="col-lg-10">
			      	<input value="" type="text" name="nombre_empresa" class="form-control" placeholder="Usuario">
			      </div>
			    </div>
			 
			    <div class="form-group">
			      <label for="correo" class="col-lg-2 control-label">Contraseña :</label>
			      <div class="col-lg-10">
			        <input value="" type="password" name="contraseña" class="form-control" placeholder="Contraseña">
			      </div>
			    </div>
			  </fieldset>
			  <div class="container">
			   	<div class="row" align="center">
			   		<br>
			   		<input align="center" type="submit" class="btn btn-primary" value="Iniciar Sesion">
			   		<a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
			   	</div>
			  </div>
			</form>
		</div>
	</div>
</div>
@stop