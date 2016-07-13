@extends('master')

@section('encabezado')
<h1>Misión/Visión</h1>
@stop

@section('contenido')
<div class="progress progress-striped active">
	<div class="progress-bar" style="width: 40%">Paso: Misión/Visión</div>
</div>
<form class="form-horizontal">
  	<fieldset>
		<div class="form-group">
    		<label for="textArea" class="col-lg-2 control-label">Misión</label>
    		<div class="col-lg-10">
        		<textarea class="form-control" rows="4" id="textArea"></textarea>
        		<span class="help-block">Describe la Misión de tu empresa.</span>
      		</div>
    	</div>
		<div class="form-group">
    		<label for="textArea" class="col-lg-2 control-label">Visión</label>
    		<div class="col-lg-10">
        		<textarea class="form-control" rows="4" id="textArea"></textarea>
        		<span class="help-block">Describe la Visión de tu empresa.</span>
      		</div>
    	</div>
    	<div class="form-group">
            
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
			</form>
		</div>
        
		<ul class="pager">
	  		<li><a href="{{url('/datosGenerales')}}">Anterior</a></li>
            <li><a href="#" class="btn btn-primary">Guardar</a></li>
	  		<li><a href="{{url('/productos')}}">Siguiente</a></li>
		</ul>
	</fieldset>
</form>
@stop