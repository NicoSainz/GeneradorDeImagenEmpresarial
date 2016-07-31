<!DOCTYPE html> 
<html lang="en">
<head>
<link rel="shortcut icon" type="image/x-icon" href="img/icono2.ico">
	<meta charset="UTF-8">
	<title>NEAS </title>
	<script src="{{ asset("js/jQuery.js")}}"></script>
	<link rel="stylesheet" href="{{ asset("css/bootstrap.css") }}">
  <link rel="stylesheet" type="text/css" href="{{ asset("css/font-awesome.css") }}">
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
                <a href="{{url('/')}}"><img src="{{ asset("img/logo1.jpg") }}" WIDTH=210 HEIGHT=50 ALT="LOGO NEAS"></a>

                </div>
            </div>
               
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Iniciar Sesion</a></li>
                        <li><a href="{{ url('/register') }}">Registrar</a></li>
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
