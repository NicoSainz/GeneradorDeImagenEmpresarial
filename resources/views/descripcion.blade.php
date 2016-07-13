@extends('master')
@section('encabezado')
<h1>Descripcion</h1>
@stop

@section('contenido')
<div class="progress progress-striped active">
	<div class="progress-bar" style="width: 80%">Paso: Descripcion</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-xs-12 well">
			<form class="form-horizontal">
			  <fieldset>
			    <div class="form-group">
			      <label for="encargado" class="col-lg-2 control-label">Encargado :</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="encargado" placeholder="encargado">
			      </div>
			    </div>

			    <div class="form-group">
			      <label for="diasTrab" class="col-lg-2 control-label">Dias Laborales :</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="diasTrab" placeholder="dias trabajados">			      
			      </div>
			    </div>

			     <div class="form-group">
			      <label for="diasDesc" class="col-lg-2 control-label">Dias de Descanso :</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="diasDesc" placeholder="Dias de Descanso">			      
			      </div>
			    </div>

			     <div class="form-group">
			      <label for="horario" class="col-lg-2 control-label">Horario :</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="horario" placeholder="Horario">			      
			      </div>
			    </div>
			    <ul class="pager">
			  		<li><a href="{{url('/productos')}}">Anterior</a></li>
		            <li><a href="#" class="btn btn-primary">Guardar</a></li>
			  		<li><a href="#">Siguiente</a></li>
				</ul>
			  </fieldset>
			</form>
		</div>
	</div>
</div>
@stop