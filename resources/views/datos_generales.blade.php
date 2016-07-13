@extends('master')
@section('encabezado')
<h1>Datos Generales</h1>
@stop

@section('contenido')
<div class="progress progress-striped active">
	<div class="progress-bar" style="width: 20%">Paso: Datos Generales</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-xs-12 well">
			<form class="form-horizontal">
			  <fieldset>
			    <div class="form-group">
			      <label for="nombre_empresa" class="col-lg-2 control-label">Nombre de Empresa :</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="nombre_empresa" placeholder="Empresa">
			      </div>
			    </div>

			    <div class="form-group">
			      <label for="eslogan" class="col-lg-2 control-label">Eslogan :</label>
			      <div class="col-lg-10">
			        <textarea class="form-control" rows="3" id="eslogan"></textarea>
			        <span class="help-block">El eslogan tiene que ser algo que inspire a los lectores a saber mas de la empresa.</span>
			      </div>
			    </div>

			    <div class="form-group">
			      <label for="direccion" class="col-lg-2 control-label">Direccion :</label>
			      <div class="col-lg-10">
			        <textarea class="form-control" rows="3" id="direccion" placeholder="calle , colonia y numero"></textarea>
			      </div>
			    </div>

			    <div class="form-group">
			      <label for="correo" class="col-lg-2 control-label">Correo :</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="correo" placeholder="correo">
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="telefono" class="col-lg-2 control-label">Telefono :</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="telefono" placeholder="Tel">
			      </div>
			    </div>
	
			    <ul class="pager">
			  		
		            <li><a href="#" class="btn btn-primary">Guardar</a></li>
			  		<li><a href="{{url('/mision_vision')}}">Siguiente</a></li>
				</ul>
			  </fieldset>
			</form>
		</div>
	</div>
</div>
@stop