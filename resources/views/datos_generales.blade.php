@extends('master')
@section('encabezado')
<h1>Datos Generales</h1>
@stop

@section('contenido')

<!-- <h3>Cliente : {{$clientes->nombre}}</h3> <h4>ID :{{$clientes->id}}</h2> -->
<div class="progress progress-striped active">
	<div class="progress-bar" style="width: 20%">Paso: Datos Generales</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-xs-12 well">
			<fieldset>
			    <form action="{{url('/guardarDatosGenerales')}}/{{$clientes->id}}" method="POST">
			   		<input type="hidden" name="_token" value="{{csrf_token()}}">
			    	<div class="form-group">
			    	  <label for="nombre_empresa" class="col-lg-2 control-label">Nombre de Empresa :</label>
				      <div class="col-lg-10">
				        <input value="{{$datos_empresa->nombre}}" type="text" name="nombre_empresa" class="form-control" placeholder="Empresa">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="eslogan" class="col-lg-2 control-label">Eslogan :</label>
			      		<div class="col-lg-10">
			       		 	<input value="{{$datos_empresa->eslogan}}" type="text" name="eslogan" class="form-control">
			       			 <span class="help-block">El eslogan tiene que ser algo que inspire a los lectores a saber mas de la empresa.</span>
					    </div>
			    	</div>

				    <div class="form-group">
				      <label for="direccion" class="col-lg-2 control-label">Direccion :</label>
				      <div class="col-lg-10">
				        <input value="{{$datos_empresa->domicilio}}" type="text" name="direccion" class="form-control" placeholder="calle , colonia y numero">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="correo" class="col-lg-2 control-label">Correo :</label>
				      <div class="col-lg-10">
				        <input value="{{$datos_empresa->correo}}" type="text" class="form-control" name="correo" placeholder="correo">
				      </div>
				    </div>
				    <div class="form-group">
				      <label for="telefono" class="col-lg-2 control-label">Telefono :</label>
				      <div class="col-lg-10">
				        <input value="{{$datos_empresa->telefono}}" type="text" class="form-control" name="telefono" placeholder="Tel">
				      </div>
				    </div>
		
				    <div class="container">
				   		<div class="row" align="center">
				   			<br>
				   			<input align="center" type="submit" class="btn btn-default" value="Guardar">
				   			<a href="{{url('/mision_vision')}}/{{$clientes->id}}" class="btn btn-default">Siguiente</a>
				   		</div>
				  	</div>
				</form>
			  </fieldset>
		</div>
	</div>
</div>
@stop