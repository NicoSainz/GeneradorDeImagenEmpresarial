<!DOCTYPE html> 
<html lang="en">
<head>
<link rel="shortcut icon" type="image/x-icon" href="img/icono2.ico">
	<meta charset="UTF-8">
	<title>NEAS </title>
	<script src="{{ asset("js/jquery.js")}}"></script>
	<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="fonts/fuentes.css">
</head>
<body >
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                
               <div style="position:absolute; left:135px; top:10px; width:728px; height:70px ">       
                <a href="{{url('/')}}"><img src="img/logo1.jpg" WIDTH=210 HEIGHT=50 ALT="LOGO NEAS"></a>

                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="page-scroll">
                        <a href="{{url('/registroClientes')}}">Registrate</a>
                    </li>
                    <li class="page-scroll">
                        <a href="{{url('/iniciarSesion')}}">Iniciar Sesion</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>



				@yield('encabezado')
				<hr>

				@yield('contenido')
                

	<script src="{{ asset("js/bootstrap.js")}}"></script>


</body>
</html>