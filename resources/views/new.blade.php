@extends('master')
@section('encabezado')
<h1>Imagen Empresarial</h1>
@stop

@section('contenido')
<div class="container">

<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading">Agregar Imagenes</div>
        <div class="panel-body">
          <form method="POST" action="http://localhost/GeneradorDeImagenEmpresarial/public/storage/create" accept-charset="UTF-8" enctype="multipart/form-data">
            
             <input type="hidden" name="_token" value="{{csrf_token()}}">
            
            <div class="form-group">
              <label class="col-md-4 control-label">Logotipo :</label>
              <div class="col-md-6">
                <input type="file" class="form-control" name="file" >
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <hr>
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@stop

