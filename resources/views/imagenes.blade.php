@extends('master')
@section('encabezado')
<h1>Agregar Imagenes</h1>
@stop

@section('contenido')
<div class="progress progress-striped active">
  <div class="progress-bar" style="width: 95%">Paso: Agregar Imagenes</div>
</div>
<div class="container">
<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading">Agregar Imagenes</div>
        <div class="panel-body">
          <form method="POST" action="{{url('/storage/create')}}/{{$clientes->id}}" accept-charset="UTF-8" enctype="multipart/form-data">
            <div class="row">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="form-group">
                <label class="col-md-4 control-label">Logotipo :</label>
                <div class="col-md-6">
                  <input type="file" class="form-control" name="Logotipo" >
                </div>
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              @if($datos_empresa->articulo1 != null)
              <div class="form-group">
                <label class="col-md-4 control-label">{{$datos_empresa->articulo1}}: </label>
                <div class="col-md-6">
                  <input type="file" class="form-control" name="articulo1" >
                </div>
              </div>
              @endif
              @if($datos_empresa->articulo2 != null)
              <div class="form-group">
                <label class="col-md-4 control-label">{{$datos_empresa->articulo2}}: </label>
                <div class="col-md-6">
                  <input type="file" class="form-control" name="articulo2" >
                </div>
              </div>
              @endif
            </div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <hr>
                <a href="{{url('/descripcion')}}/{{$clientes->id}}" class="btn btn-primary">Anterior</a>
                <button type="submit" class="btn btn-primary">Cargar Imagenes</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@stop

