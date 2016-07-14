@extends('master1')
@section('encabezado')

@stop

@section('contenido')
               <section class="success" id="inicio"> 
                <div class="container">
                <div class="row">
                <div class="col-xs-6 .col-md-4">
             
					          <li class="page-scroll">
                    <br>
                    <br>
                    <script type="text/javascript">                
                    function makeArray() {
                    for (i = 0; i<makeArray.arguments.length; i++)
                    this[i + 1] = makeArray.arguments[i];}
                    var months = new makeArray('Enero','Febrero','Marzo','Abril','Mayo',
                    'Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
                    var date = new Date();
                    var day = date.getDate();
                    var month = date.getMonth() + 1;
                    var yy = date.getYear();
                    var year = (yy < 1000) ? yy + 1900 : yy;
                    document.write("Hoy es " + day + " de " + months[month] + " del " + year);
                    </script>
                    </li>


                          <ul class="nav nav-pills">
                          <li class="page-scroll"><a href="#carousel" class="btn btn-primary btn-lg">Clientes</a></li>
                          <li class="page-scroll" ><a href="#mision_vision"class="btn btn-primary btn-lg">Misión</a></li>
                          <li class="page-scroll"><a href="#mision_vision" class="btn btn-primary btn-lg">Visión</a></li>
                          <li class="page-scroll"><a href="#contact" class="btn btn-primary btn-lg">Contacto</a></li>
                          
                          
                          </li>
                        </ul>         
                  </div>
                </div>
              </div>
        </section>




     
           
             <section class="success" id="carousel"> 
            <div class="jumbotron" style="background: #00b2b6">
                 

    <h1 class="display-3" ALIGN=center><FONT FACE="geometr415 blk bt" color="white" SIZE=12 >DESIGNING YOUR WEBSITE</FONT></h1>
         <h2 class="lead" align="center"><font FACE="geometr415 blk bt" color="white" size="5"> En NEAS podras crear tu sitio web a tu gusto </font></h2>


              <link rel="stylesheet" href="estilos.css">
              <link rel="stylesheet" href="fonts.css">
              <div class="main">
              <div class="slides">
              <img src="img/1.jpg">
              <img src="img/2.jpg">
              <img src="img/3.jpg">
              <img src="img/4.jpg">
              <img src="img/5.jpg">
              </div>
              </div>

      <!--carrusel-->
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="js/jquery.slides.min.js"></script>

                <script>
                  $(function(){
                    $(".slides").slidesjs({
                      play: {
                        active: true,
                          // [boolean] Generate the play and stop buttons.
                          // You cannot use your own buttons. Sorry.
                        effect: "slide",
                          // [string] Can be either "slide" or "fade".
                        interval: 3000,
                          // [number] Time spent on each slide in milliseconds.
                        auto: true,
                          // [boolean] Start playing the slideshow on load.
                        swap: true,
                          // [boolean] show/hide stop and play buttons
                        pauseOnHover: false,
                          // [boolean] pause a playing slideshow on hover
                        restartDelay: 2500
                          // [number] restart delay on inactive slideshow
                          }
                        });
                      });
                </script>
</div>
</section>

<section class="success" id="mision_vision">
 <div class="jumbotron" style="background: #">
<footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-6">
                        <h2>MISION</h2>
                        
                    <p>“satisfacer las necesidades de nuestros clientes de una manera rápida, practica y confiable; dándole una mejor imagen a su empresa o negocio, así como brindar un espacio en internet para darle publicidad y ayudar a su crecimiento”</p>
                </div>
                <div class="footer-col col-md-6">
                        <h2>VISION</h2>
                        <p>“ser el sitio web con más usuarios satisfechos en el mercado, siempre brindándole el mejor servicio y atención que se merece”</p>
                </div>

                    </div>
                    </div>
                    </div>
                    </div>
                    </footer>
                      


                    <div class="container">
                    <div class="row">
                    <div class=".col-xs-6.col-xs-6">
                    <div class="page-scroll" align="right"><a href="#inicio" class="fa fa-arrow-circle-up" style="font-size:35px;"></a></div>
                    </div>
                    </div>
                    </div>
                    </div>

   </section>


<!--contacto-->

    
    <section id="contact">
    <div class="jumbotron" style="background: #00b2b6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><font color="white">CONTACTO</h2></font>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label><b><font  size="5" color="white">Nombre:</b></label>
                                <input type="text" class="form-control" placeholder="Nombre" id="name" required data-validation-required-message="Por favor introduzca su Nombre.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label><b>Correo:</b></label>
                                <input type="email" class="form-control" placeholder="Correo" id="email" required data-validation-required-message="Por favor introduzca su Correo.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label><b>Telefono:</b></label>
                                <input type="tel" class="form-control" placeholder="Telefono" id="phone" required data-validation-required-message="Por favor introduzca su Telefono.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label><b>Mensaje:</font></b></label>
                                <textarea rows="5" class="form-control" placeholder="Mensaje" id="message" required data-validation-required-message="Por favor introduzca un Mensaje."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-lg btn-outline">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

                    <div class="container">
                    <div class="row">
                    <div class=".col-xs-6.col-xs-6">
                    <div class="page-scroll" align="right"><a href="#inicio" class="fa fa-arrow-circle-up" style="font-size:35px;"></a></div>
                    </div>
                    </div>
                    </div>
                    </div>

<!-- Footer -->
<div class="jumbotron">
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Ubicación</h3>
                        <p>Av. Juan de Dios Bátiz 310 Pte.
                            <br>Col. Guadalupe, C.P. 80220 
                            <br>Culiacán, Sinaloa.</p>
                            <a  target="_blank" href="https://www.google.com.mx/maps/place/Juan+de+Dios+Batiz+488,+Guadalupe,+80220+Culiac%C3%A1n+Rosales,+Sin./@24.7894318,-107.4007841,17z/data=!3m1!4b1!4m8!1m2!10m1!1e2!3m4!1s0x86bcd0c7b0afb62d:0xa7d15430c0ff10a5!8m2!3d24.7894269!4d-107.3985954?hl=es-419" class="btn btn-default"><b>Como llegar</b></a>

                    </div>
                    <div class="footer-col col-md-4">
                        <h3>En la Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a target="_blank" href="https://www.facebook.com/" class="btn-social btn-outline " style="font-size:35px;"><i   title="Facebook" class="fa fa-facebook-square"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="https://plus.google.com/" class="btn-social btn-outline" style="font-size:35px;"><i class="fa fa-google-plus-square"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="https://twitter.com/?lang=en" class="btn-social btn-outline" style="font-size:35px;"><i class="fa fa-twitter-square"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.snapchat.com/l/es/" class="btn-social btn-outline" style="font-size:35px;"><i class="fa fa fa-snapchat-square"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.instagram.com/?hl=en" class="btn-social btn-outline" style="font-size:35px;"><i class="fa fa fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>


                    <div class="footer-col col-md-4">
                        <h3>Acerca de NEAS</h3>
                        <p>En NEAS encontrara la manera mas facil y rapido de crear su sitio web. 
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; NEAS 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>

<style type="text/css">
      html{
        background-color: #CCCCCC !important;
      }
     </style>

     <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>


    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>
 


@stop





