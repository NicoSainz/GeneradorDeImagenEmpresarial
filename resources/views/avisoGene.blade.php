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
          <li><a href="{{url('/diseño')}}/{{$clientes->id}}">Diseño</a></li>
	</ul>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
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
        <a href="http://empresas.com/{{$datos_empresa->nombre}}/public">http://empresas.com/{{$datos_empresa->nombre}}/public/</a> 
      </div>
      <div align="center" class="col-xs-12">
        <a class="btn btn-info" href="http://empresas.com/{{$datos_empresa->nombre}}/public">Visita tu pagina</a>
      </div>
    </div>
  </div>
  </div>
  <script src="{{ asset("js/bootstrap.js") }}"></script>
</body>
</html>
