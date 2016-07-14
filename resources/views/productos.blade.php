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
			<fieldset>
			<form action="{{url('/guardarProductos')}}/{{$clientes->id}}" method="POST">
        	<input type="hidden" name="_token" value="{{csrf_token()}}">
			  	<h3>Articulos :</h3>
			    <div class="form-group">			      
			      <div class="col-xs-6">
			        <input value="{{$datos_empresa->articulo1}}" type="text" class="form-control" name="articulo1" placeholder="articulo #1">		        
			      </div>


<!--			      <form enctype="multipart/form-data" action="uploader.php" method="POST">
			      <div class="col-xs-4">
			      	<input name="uploadedfile" type="file" />			        			        
			      </div>
			      <div class="col-xs-2">
			      	<input type="submit" value="CargarImagen" />			      	
			      </div>	
			      </form>
			    </div>	
-->
			    <div class="form-group">			      
			      <div class="col-xs-6">
			        <input value="{{$datos_empresa->articulo2}}" type="text" class="form-control" name="articulo2" placeholder="articulo #2"><hr>			        
			      </div>
<!--			      <form enctype="multipart/form-data" action="uploader.php" method="POST">
			      <div class="col-xs-4">
			      	<input name="uploadedfile" type="file" />			        			        
			      </div>
			      <div class="col-xs-2">
			      	<input type="submit" value="CargarImagen" />			      	
			      </div>	
			      </form>
			    </div>	
-->
				<br>
				<br>
			    <h3>Servicios :</h3>
			    <div class="form-group">			    
			      <div class="col-xs-6">
			        <input value="{{$datos_empresa->servicio1}}" type="text" class="form-control" name="servicio1" placeholder="servicio #1"> 		        
			      </div>
<!--			      <form enctype="multipart/form-data" action="uploader.php" method="POST">
			      <div class="col-xs-4">
			      	<input name="uploadedfile" type="file" />			        			        
			      </div>
			      <div class="col-xs-2">
			      	<input type="submit" value="CargarImagen" />			      	
			      </div>	
			      </form>
			    </div>	
-->
			    <div class="form-group">			    
			      <div class="col-xs-6">
			        <input value="{{$datos_empresa->servicio2}}" type="text" class="form-control" name="servicio2" placeholder="servicio #2"><hr>			        
			      </div>
<!--			      <form enctype="multipart/form-data" action="uploader.php" method="POST">
			      <div class="col-xs-4">
			      	<input name="uploadedfile" type="file" />			        			        
			      </div>
			      <div class="col-xs-2">
			      	<input type="submit" value="CargarImagen" />			      	
			      </div>	
			      </form>
			    </div>	
-->
			  </fieldset>
			  <div class="container">
                        <div class="row" align="center">
                            <br>
                            <a href="{{url('/mision_vision')}}/{{$clientes->id}}" class="btn btn-default">Anterior</a>
                            <input align="center" type="submit" class="btn btn-default" value="Guardar">
                            <a href="{{url('/descripcion')}}/{{$clientes->id}}" class="btn btn-default">Siguiente</a>
                        </div>
                    </div>
                </form>
		</div>
	</div>
</div>
@stop