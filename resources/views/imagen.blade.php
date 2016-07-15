@extends('master')
@section('encabezado')
<h1>Productos</h1>
@stop

@section('contenido')
<div class="progress progress-striped active">
	<div class="progress-bar" style="width: 90%">Paso: Imagen de la empresa</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-xs-12 well">
			<fieldset>
			<form action="" method="POST">
        	<input type="hidden" name="_token" value="{{csrf_token()}}">
			  	<h3>Articulos :</h3>
			  	<div class="form-group">
			     <form enctype="multipart/form-data" action="http://localhost/GeneradorDeImagenEmpresarial/public/" method="POST">			    
			      <div class="col-xs-4">
			      	<input name="uploadedfile" type="file" />			        			        
			      </div>
			      <div class="col-xs-2">
			      	<input type="submit" value="CargarImagen" />			      	
			      </div>
			      <div class="col-xs-6">			      				      	
			      </div>	
			      </form>
			  	</div>
			 	

			    <div class="form-group">
			     <form enctype="multipart/form-data" action="uploader.php" method="POST">			    
			      <div class="col-xs-4">
			      	<input name="uploadedfile" type="file" />			        			        
			      </div>
			      <div class="col-xs-2">
			      	<input type="submit" value="CargarImagen" />			      	
			      </div>
			      <div class="col-xs-6">			      				      	
			      </div>	
			      </form>
			  	</div>

				<br>
				<br>
			    <h3>Servicios :</h3>
			    <div class="form-group">
			     <form enctype="multipart/form-data" action="uploader.php" method="POST">			    
			      <div class="col-xs-4">
			      	<input name="uploadedfile" type="file" />			        			        
			      </div>
			      <div class="col-xs-2">
			      	<input type="submit" value="CargarImagen" />			      	
			      </div>
			      <div class="col-xs-6">			      				      	
			      </div>	
			      </form>
			  	</div>

			    <div class="form-group">
			     <form enctype="multipart/form-data" action="uploader.php" method="POST">			    
			      <div class="col-xs-4">
			      	<input name="uploadedfile" type="file" />			        			        
			      </div>
			      <div class="col-xs-2">
			      	<input type="submit" value="CargarImagen" />			      	
			      </div>
			      <div class="col-xs-6">			      				      	
			      </div>	
			      </form>
			  	</div>	

			  </fieldset>
			  <div class="container">
                        <div class="row" align="center">
                            <br>
                            <a href="" class="btn btn-default">Anterior</a>
                            <input align="center" type="submit" class="btn btn-default" value="Guardar">
                            <a href="" class="btn btn-default">Siguiente</a>
                        </div>
                    </div>
                </form>
		</div>
	</div>
</div>
@stop