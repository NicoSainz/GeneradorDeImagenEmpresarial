@extends('master')
@section('encabezado')
<h1>Productos</h1>
@stop

@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-xs-12 well">
			<form class="form-horizontal" method="POST">
			  <fieldset>

			  	<h3>Articulos :</h3>
			    <div class="form-group">			      
			      <div class="col-xs-8">
			        <input type="text" class="form-control" id="articulo1" placeholder="articulo #1">		        
			      </div>
			      <div class="col-xs-2">
			        <input type="text" class="form-control" id="articulo2" placeholder="Archivo seleccionado">		        
			      </div>
			      <div class="col-xs-2">
			      	<a href="" class="btn btn-danger"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar Imagen</a>
			      </div>			      
			    </div>
			    <div class="form-group">			      
			      <div class="col-xs-8">
			        <input type="text" class="form-control" id="articulo2" placeholder="articulo #2"><hr>			        
			      </div>
			      <div class="col-xs-2">
			        <input type="text" class="form-control" id="articulo2" placeholder="Archivo seleccionado"><hr>			        
			      </div>
			      <div class="col-xs-2">
			      	<a href="" class="btn btn-danger"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar Imagen</a>
			      </div>			      
			    </div>

			    <h3>Servicios :</h3>
			    <div class="form-group">			    
			      <div class="col-xs-8">
			        <input type="text" class="form-control" id="servicio1" placeholder="servicio #1"> 		        
			      </div>
			      <div class="col-xs-2">
			        <input type="text" class="form-control" id="articulo2" placeholder="Archivo seleccionado">		        
			      </div>
			      <div class="col-xs-2">
			      	<a href="" class="btn btn-danger"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar Imagen</a>
			      </div>			      
			    </div>
			    <div class="form-group">			    
			      <div class="col-xs-8">
			        <input type="text" class="form-control" id="servicio2" placeholder="servicio #2"><hr>			        
			      </div>
			      <div class="col-xs-2">
			        <input type="text" class="form-control" id="articulo2" placeholder="Archivo seleccionado">		        
			      </div>
			      <div class="col-xs-2">
			      	<a href="" class="btn btn-danger"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar Imagen</a>
			      </div>			      
			    </div>	

			     <div class="form-group">	
			     <form enctype="multipart/form-data" action="uploader.php" method="POST">		    
			      <div class="col-xs-10">			      	
					<input name="uploadedfile" type="file" />										
			      </div>
			      <div  class="col-xs-2">
			      	<input type="submit" value="Cargar Imagen" />
			      </div>
			    </form>		      
			    </div>
			    


			  </fieldset>
			</form>
		</div>
	</div>
</div>
@stop