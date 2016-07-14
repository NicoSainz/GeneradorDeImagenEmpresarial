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
			@foreach ($cliente as c)
			<form action="{{url('/datosGenerales')}}/{{clientes->id}}" method="POST" class="form-horizontal">
			  <fieldset>
			    <div class="form-group">
			      <label for="nombre_empresa" class="col-lg-2 control-label">Nombre de Usuario :</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="nombre_empresa" placeholder="Usuario">
			      </div>
			    </div>
			 
			    <div class="form-group">
			      <label for="correo" class="col-lg-2 control-label">Contraseña :</label>
			      <div class="col-lg-10">
			        <input type="password" class="form-control" id="correo" placeholder="Contraseña">
			      </div>
			    </div>
	
			    <ul class="pager">
			    	<input type="submit" class="btn btn-primary">			  		
		            <li><a href="">Listo</a></li>
			  		<li><a href="">Cancelar</a></li>
				</ul>
			  </fieldset>
			</form>
			@endforeach
		</div>
	</div>
</div>
@stop