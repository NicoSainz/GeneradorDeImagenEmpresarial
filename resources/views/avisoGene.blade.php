<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Datos Empresa</title>
  <script src="{{ asset("js/jQuery.js") }}"></script>
  <link rel="stylesheet" href="{{ asset("css/bootstrap2.css") }}">
</head>
<body>
	<nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">NEAS</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="{{url('/datosGenerales')}}/{{$clientes->id}}">Datos Generales</a></li>
          <li><a href="{{url('/mision_vision')}}/{{$clientes->id}}">Misión/Vision</a></li>
          <li><a href="{{url('/productos')}}/{{$clientes->id}}">Productos</a></li>
          <li><a href="{{url('/descripcion')}}/{{$clientes->id}}">Descripción</a></li>
          <li><a href="{{url('/imagenes')}}/{{$clientes->id}}">Imagenes</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$clientes->nombre}}<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Ayuda</a></li>
              <li><a href="{{url('/')}}">Salir</a></li>
             <li role="separator" class="divider"></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <div class="container">
  <div class="jumbotron">
    <div class="row">
      <div class="col-xs-12">
        <h2 align="center">La pagina ah sido generada correctamente!!</h2>
      </div>     
    </div>
    <div class="row">
      <div align="center" class="col-xs-12">
        <h5>--url de la pagina--</h5>
      </div>
      <div align="center" class="col-xs-12">
        <a class="btn btn-info" href="">Visita tu pagina</a>
      </div>
    </div>
  </div>
  </div>
  <script src="{{ asset("js/bootstrap.js") }}"></script>
</body>
</html>