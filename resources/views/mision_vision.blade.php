@extends('master')

@section('encabezado')
<h1>Misión/Visión</h1>
@stop

@section('contenido')
<div class="progress progress-striped active">
	<div class="progress-bar" style="width: 30%">Paso: Misión/Visión</div>
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
				<label for="logo" class="col-lg-2 control-label">Logo</label>
				<div class="col-lg-10">
    				<input name="archivo" id="archivo" type="file"/>
    				<br>
					<input class="btn btn-primary btn-sm" type="submit" name="subir" value="Subir imagen">
				</div>
			</form>
		</div>
		<ul class="pager">
	  		<li><a href="#">Anterior</a></li>
	  		<li><a href="#">Siguiente</a></li>
		</ul>
	</fieldset>
</form>
@stop