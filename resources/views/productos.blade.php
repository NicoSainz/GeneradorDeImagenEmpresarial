@extends('master')
@section('encabezado')
<h1>Articulos & Servicios</h1>
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
			    	<div class="col-xs-4">	      
			        	<input value="{{$datos_empresa->articulo1}}" type="text" class="form-control" name="articulo1" placeholder="articulo #1">
			        </div>
			        <div class="col-xs-8">
			        	<input value="{{$datos_empresa->des_articulo1}}" type="text" class="form-control" name="des_articulo1" placeholder="Descripcion articulo #1">
			        </div>
			   	</div>

			   <div class="form-group">
			    	<div class="col-xs-4">	      
			        	<input value="{{$datos_empresa->articulo2}}" type="text" class="form-control" name="articulo2" placeholder="articulo #2">
			        </div>
			        <div class="col-xs-8">
			        	<input value="{{$datos_empresa->des_articulo2}}" type="text" class="form-control" name="des_articulo2" placeholder="Descripcion articulo #2">
			        </div>
			   	</div>				

			   	<div class="form-group">
			    	<div class="col-xs-4">	      
			        	<input value="{{$datos_empresa->articulo3}}" type="text" class="form-control" name="articulo3" placeholder="articulo #3">
			        </div>
			        <div class="col-xs-8">
			        	<input value="{{$datos_empresa->des_articulo3}}" type="text" class="form-control" name="des_articulo3" placeholder="Descripcion articulo #3">
			        </div>
			   	</div>	
				
			    <h3>Servicios :</h3>
			    <div class="form-group">
			    	<div class="col-xs-4">	      
			        	<input value="{{$datos_empresa->servicio1}}" type="text" class="form-control" name="servicio1" placeholder="servicio #1">
			        </div>
			        <div class="col-xs-8">
			        	<input value="{{$datos_empresa->des_servicio1}}" type="text" class="form-control" name="des_servicio1" placeholder="Descripcion servicio #1">
			        </div>
			   	</div>

			   <div class="form-group">
			    	<div class="col-xs-4">	      
			        	<input value="{{$datos_empresa->servicio2}}" type="text" class="form-control" name="servicio2" placeholder="servicio #2">
			        </div>
			        <div class="col-xs-8">
			        	<input value="{{$datos_empresa->des_servicio2}}" type="text" class="form-control" name="des_servicio2" placeholder="Descripcion servicio #2">
			        </div>
			   	</div>

			   	<div class="form-group">
			    	<div class="col-xs-4">	      
			        	<input value="{{$datos_empresa->servicio3}}" type="text" class="form-control" name="servicio3" placeholder="servicio #3">
			        </div>
			        <div class="col-xs-8">
			        	<input value="{{$datos_empresa->des_servicio3}}" type="text" class="form-control" name="des_servicio3" placeholder="Descripcion servicio #3">
			        </div>
			   	</div>

			  </fieldset>
			 <h5>*Los nombres de productos o servicios no deben contener espacios</h5>	
		<div class="container">
                        <div class="row" align="center">
                            <br>
                            <a href="{{url('/mision_vision')}}/{{$clientes->id}}" class="btn btn-primary">Anterior</a>
                            <input align="center" type="submit" class="btn btn-primary" value="Guardar">
                            <a href="{{url('/descripcion')}}/{{$clientes->id}}" class="btn btn-primary">Siguiente</a>
                        </div>
              	</div>
                </form>
		</div>
	</div>
</div>
@stop
