@extends('master1')
@section('encabezado')
<h1 align="center">Iniciar Sesion</h1>
@stop

@section('contenido')

<div class="container">
	<div class="row">
		<div class="col-xs-12 well">
			<form class="form-horizontal">
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
			        <input type="text" class="form-control" id="correo" placeholder="Contraseña">
			      </div>
			    </div>

	
			    <ul class="pager">
			  		
		            <li><a href="#" class="btn btn-primary">Listo</a></li>
			  		<li><a href="{{url('/mision_vision')}}">Cancelar</a></li>
				</ul>
			  </fieldset>
			</form>
		</div>
	</div>
</div>
@stop