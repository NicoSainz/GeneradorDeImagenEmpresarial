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
			<fieldset>
				<form action="{{url('/guardarDescripcion')}}/{{$clientes->id}}" method="POST">
		        <input type="hidden" name="_token" value="{{csrf_token()}}">
			    <div class="form-group">
			      <label for="encargado" class="col-lg-2 control-label">Encargado :</label>
			      <div class="col-lg-10">
			        <input value="{{$datos_empresa->nom_encargado1}}" type="text" class="form-control" name="encargado" placeholder="encargado">
			      </div>
			    </div>

			    <div class="form-group">
			      <label for="diasTrab" class="col-lg-2 control-label">Dias Laborales :</label>
			      <div class="col-lg-10">
			        <input value="{{$datos_empresa->dias_trabajados}}" type="text" class="form-control" name="diasTrab" placeholder="dias trabajados">			      
			      </div>
			    </div>

			     <div class="form-group">
			      <label for="diasDesc" class="col-lg-2 control-label">Dias de Descanso :</label>
			      <div class="col-lg-10">
			        <input value="{{$datos_empresa->dias_descanso}}" type="text" class="form-control" name="diasDesc" placeholder="Dias de Descanso">			      
			      </div>
			    </div>

			     <div class="form-group">
			      <label for="horario" class="col-lg-2 control-label">Horario :</label>
			      <div class="col-lg-10">
			        <input value="{{$datos_empresa->horario}}" type="text" class="form-control" name="horario" placeholder="Horario">			      
			      </div>
			    </div>
			  </fieldset>
			  <div class="container">
                 	<div class="row" align="center">
                    	<br>
                        <a href="{{url('/productos')}}/{{$clientes->id}}" class="btn btn-primary">Anterior</a>
                        <input align="center" type="submit" class="btn btn-primary" value="Guardar">
                        <a href="{{url('/imagenes')}}/{{$clientes->id}}" class="btn btn-primary">Siguiente</a>
                    </div>
              </div>
           	</form>
		</div>
	</div>
</div>
@stop