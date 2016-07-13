@extends('master')
@section('encabezado')
<h1>Productos</h1>
@stop

@section('contenido')
<div class="progress progress-striped active">
	<div class="progress-bar" style="width: 60%">Paso: Productos</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-xs-12 well">
			<form class="form-horizontal" method="POST">
			  <fieldset>

			  	<h3>Articulos :</h3>
			    <div class="form-group">			      
			      <div class="col-xs-6">
			        <input type="text" class="form-control" id="articulo1" placeholder="articulo #1">		        
			      </div>
			      <form enctype="multipart/form-data" action="uploader.php" method="POST">
			      <div class="col-xs-4">
			      	<input name="uploadedfile" type="file" />			        			        
			      </div>
			      <div class="col-xs-2">
			      	<input type="submit" value="CargarImagen" />			      	
			      </div>	
			      </form>
			    </div>	

			    <div class="form-group">			      
			      <div class="col-xs-6">
			        <input type="text" class="form-control" id="articulo2" placeholder="articulo #2"><hr>			        
			      </div>
			      <form enctype="multipart/form-data" action="uploader.php" method="POST">
			      <div class="col-xs-4">
			      	<input name="uploadedfile" type="file" />			        			        
			      </div>
			      <div class="col-xs-2">
			      	<input type="submit" value="CargarImagen" />			      	
			      </div>	
			      </form>
			    </div>	

			    <h3>Servicios :</h3>
			    <div class="form-group">			    
			      <div class="col-xs-6">
			        <input type="text" class="form-control" id="servicio1" placeholder="servicio #1"> 		        
			      </div>
			      <form enctype="multipart/form-data" action="uploader.php" method="POST">
			      <div class="col-xs-4">
			      	<input name="uploadedfile" type="file" />			        			        
			      </div>
			      <div class="col-xs-2">
			      	<input type="submit" value="CargarImagen" />			      	
			      </div>	
			      </form>
			    </div>	

			    <div class="form-group">			    
			      <div class="col-xs-6">
			        <input type="text" class="form-control" id="servicio2" placeholder="servicio #2"><hr>			        
			      </div>
			      <form enctype="multipart/form-data" action="uploader.php" method="POST">
			      <div class="col-xs-4">
			      	<input name="uploadedfile" type="file" />			        			        
			      </div>
			      <div class="col-xs-2">
			      	<input type="submit" value="CargarImagen" />			      	
			      </div>	
			      </form>
			    </div>	

			    <ul class="pager">
			  		<li><a href="{{url('/mision_vision')}}">Anterior</a></li>
		            <li><a href="#" class="btn btn-primary">Guardar</a></li>
			  		<li><a href="{{url('/descripcion')}}">Siguiente</a></li>
				</ul>
			  </fieldset>
			</form>
		</div>
	</div>
</div>
@stop