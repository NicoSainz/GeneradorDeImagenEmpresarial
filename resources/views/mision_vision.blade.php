@extends('master')

@section('encabezado')
<h1>Misión/Visión</h1>
@stop

@section('contenido')
<div class="progress progress-striped active">
	<div class="progress-bar" style="width: 40%">Paso: Misión/Visión</div>
</div>
  	<fieldset>
    <form action="{{url('/guardarMisionVision')}}/{{$clientes->id}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="form-group">
    		<label for="textArea" class="col-lg-2 control-label">Misión</label>
    		<div class="col-lg-10">
        		<textarea name="mision" class="form-control" rows="4" id="textArea">{{$datos_empresa->mision}}</textarea>
        		<span class="help-block">Describe la Misión de tu empresa.</span>

      		</div>
    	</div>
		<div class="form-group">
    		<label for="textArea" class="col-lg-2 control-label">Visión</label>
    		<div class="col-lg-10">
        		<textarea name="vision" class="form-control" rows="4" id="textArea">{{$datos_empresa->vision}}</textarea>
        		<span class="help-block">Describe la Visión de tu empresa.</span>
      		</div>
    	</div>
    	<div class="form-group">
   <!--         
			<form action="index.php" method="POST" enctype="multipart/form-data"/>
                <div class="col-lg-1"></div>
                <div class="col-lg-1">
				    <label for="logo" class="col-lg-2 control-label">Logo</label>
                </div>
				<div class="col-lg-4">
    				<input name="archivo" id="archivo" type="file"/>
                </div>
    			<div class="col-lg-4">
					<input type="submit" name="subir" value="Subir imagen">
				</div>
			</form> -->
		</div>
    </fieldset>
		<div class="container">
                        <div class="row" align="center">
                            <br>
                            <a href="{{url('/datosGenerales')}}/{{$clientes->id}}" class="btn btn-default">Anterior</a>
                            <input align="center" type="submit" class="btn btn-default" value="Guardar">
                            <a href="{{url('/productos')}}/{{$clientes->id}}" class="btn btn-default">Siguiente</a>
                        </div>
                    </div>
                </form>
	
@stop