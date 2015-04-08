<?php
    require_once('funciones/conectar.php');
?>
<!DOCTYPE html>
<html>
    <head lang="es">
        <title>Servicio Medico</title>
        <meta name="viewport" content="width=device-width, initial-escale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/carrusel.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/jqtransform.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-1.7.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/cufon-yui.js"></script>
        <script src="js/vegur_400.font.js"></script>
        <script src="js/Vegur_bold_700.font.js"></script>
        <script src="js/cufon-replace.js"></script>
        <script src="js/tms-0.4.x.js"></script>
        <script src="js/jquery.jqtransform.js"></script>
        <script src="js/FF-cash.js"></script>
    </head>
    <body>    
        <div class="main">    
            <div class="container">
                 <div class"col-md-12">
                    <div class"col-md-12">
                        <div class="social-icons">
                            <a href="#" class="icon-3 hidden-xs"></a>
                            <a href="#" class="icon-2 hidden-xs"></a>
                            <a href="#" class="icon-1 hidden-xs"></a>           
                        </div>
                        <figure>
                            <a href="index.php" ><img  src="images/Logo.png" class="img-responsive col-xs-responsive" alt="Image"></a>
                        </figure>
                    </div>
                    <div class"col-md-12">
                        <div class="container">
                            <div id="myCarousel" class="carousel hidden-xs"> 
                                <div class="carousel-inner">
                                    <div class="item active">                                     
                                        <img src="images/slider-1-t.jpg" alt="Image">
                                        <div class="container">
                                            <div class="carousel-caption">
                                                <h1><font><font>Ejemplo titular.</font></font></h1>
                                                <p class="lead"><font><font>Cras odio justo, dapibus ac facilisis en, egestas eget quam. </font><font>Identificación del Donec elit non mi porta gesta en metus eget. </font><font>Nullam Identificación del dolor Identificación del NIBH ultricies vehicula ut Identificación del elit.</font></font></p>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="item ">                                           
                                        <img src="images/slider-1-c.jpg" alt="Image" > 
                                        <div class="container">
                                            <div class="carousel-caption">
                                                <h1><font><font>Ejemplo titular.</font></font></h1>
                                                <p class="lead"><font><font>Cras odio justo, dapibus ac facilisis en, egestas eget quam. </font><font>Identificación del Donec elit non mi porta gesta en metus eget. </font><font>Nullam Identificación del dolor Identificación del NIBH ultricies vehicula ut Identificación del elit.</font></font></p>
                                            </div>
                                        </div>                                                                                            
                                     </div>
                                    <div class="item">                                            
                                        <img src="images/slider-2-car.jpg" alt="Image" >
                                        <div class="container">
                                            <div class="carousel-caption">
                                                <h1><font><font>Ejemplo titular.</font></font></h1>
                                                <p class="lead"><font><font>Cras odio justo, dapibus ac facilisis en, egestas eget quam. </font><font>Identificación del Donec elit non mi porta gesta en metus eget. </font><font>Nullam Identificación del dolor Identificación del NIBH ultricies vehicula ut Identificación del elit.</font></font></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control left" href="#myCarousel"  data-slide="prev"></a>
                                <a class="carousel-control right" href="#myCarousel"  data-slide="next"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-4 ">
                        <div class="navbar-responsive navbar-inverse" role="navigation">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle " data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                    <span class="sr-only">Desplegar navegación</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <ul>
                                    <a class="navbar-brand navbar-home active" href="#">
                                        <img  alt= "home" class="visible-xs" src="images/home.png" >
                                    </a>
                                </ul>
                            </div>
                            <div class="collapse navbar-collapse navbar-ex1-collapse">
                                <ul class="nav navbar-nav navbar-inverse  ">
                                    <li><a href="index.php"><p>Inicio</p></a></li>
                                    <li class="active"><a href="Cartelera.php"><p>Cartelera</p></a></li>
                                    <li><a href="#">Comedor</a></li>
                                    <li><a href="#">Transporte</a></li>
                                    <li><a href="#">Serv. Medico</a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right visible-md">
                                    <form class="navbar-form navbar-left visible-md" role="search">
                                        <div class="form-group ">
                                            <input type="text" class="form-control visible-md" placeholder="Buscar">
                                        </div>
                                        <button type="submit" class="btn btn-default visible-md">Enviar</button>
                                    </form>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="row-fluid ">
                                <div class="col-md-12 col-sm-12 col-xs-12"> 
                                 <div class="list-group boxlogin ">
                                        <h2 class="top-1 " align="center">Especialidades Medica</h2> 

                                            
                                            <div class="col-md-4 col-sm-4 col-xs-12 boxlogin">
                                                <div class="thumbnail">
                                                  <img  src="images/cardiomin.jpg" alt="Image" >
                                                  <div class="caption">
                                                    <p class="tm">Cardiología</p>
                                                    <p class="ttm">La cardiología  se encargada de las enfermedades del corazón y del aparato circulatorio.</p>
                                                    <p> <a href="#" class="btn btn-default" role="button">Ir</a></p>
                                                  </div>
                                                </div>
                                            </div> 

                                            <div class="col-md-4 col-sm-4 col-xs-12 boxlogin">
                                                <div class="thumbnail">
                                                  <img src="images/endomin.jpg" alt="Image" >
                                                  <div class="caption">
                                                    <p class="tm">Endocrinología</p>
                                                    <p class="ttm">Enfermedades del sistema endocrino,que estudia las glándulas que producen las hormonas.</p>
                                                    <p> <a href="#" class="btn btn-default" align="right" role="button">Ir</a></p>
                                                  </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12 boxlogin">
                                                <div class="thumbnail">
                                                  <img src="images/gastromin.jpg" alt="Image" >
                                                  <div class="caption">
                                                    <p class="tm">Gastroenterología</p>
                                                    <p class="ttm">Enfermedades relacionadas con el esófago, estómago, los intestinos, hígado, vesícula biliar.</p>
                                                    <p> <a href="#" class="btn btn-default" role="button">Ir</a></p>
                                                  </div>
                                                </div>
                                            </div>

                                             <div class="col-md-4 col-sm-4 col-xs-12 boxlogin">
                                                <div class="thumbnail">
                                                  <img  src="images/ginemin.jpg" alt="Image" >
                                                  <div class="caption">
                                                    <p class="tm">Ginecología</p>
                                                    <p class="ttm">Se encarga de las enfermedades del sistema reproductor femenino (útero, vagina y ovarios).</p>
                                                    <p> <a href="#" class="btn btn-default" role="button">Ir</a></p>
                                                  </div>
                                                </div>
                                            </div> 

                                            <div class="col-md-4 col-sm-4 col-xs-12 boxx">
                                                <div class="thumbnail">
                                                  <img src="images/neuromin.jpg" alt="Image" >
                                                  <div class="caption">
                                                    <p class="tm">Neurología</p>
                                                    <p class="ttm">Se encarga de las enfermedades del cerebro, la médula espinal, los nervios periféricos y los músculos.</p>
                                                    <p> <a href="#" class="btn btn-default" align="right" role="button">Ir</a></p>
                                                  </div>
                                                </div>
                                            </div>

                                             <div class="col-md-4 col-sm-4 col-xs-12 boxx">
                                                <div class="thumbnail">
                                                  <img src="images/oftamin.jpg" alt="Image" >
                                                  <div class="caption">
                                                    <p class="tm">Oftalmología</p>
                                                    <p class="ttm">estudia las enfermedades del ojo; en concreto del globo ocular, su musculatura, el sistema lagrimal, los párpados.</p>
                                                    <p> <a href="#" class="btn btn-default" align="right" role="button">Ir</a></p>
                                                  </div>
                                                </div>
                                            </div>

                                             <div class="col-md-4 col-sm-4 col-xs-12 boxx">
                                                <div class="thumbnail">
                                                  <img src="images/otomin.jpg" alt="Image" >
                                                  <div class="caption">
                                                    <p class="tm">Otorrinolaringología</p>
                                                    <p class="ttm">Se ocupa del estudio, diagnóstico y tratamiento de las enfermedades relacionadas con los oídos, la nariz y la garganta.</p>
                                                    <p> <a href="#" class="btn btn-default" align="right" role="button">Ir</a></p>
                                                  </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12 boxx">
                                                <div class="thumbnail">
                                                  <img src="images/traumamin.jpg" alt="Image" >
                                                  <div class="caption">
                                                    <p class="tm">Traumatología</p>
                                                    <p class="ttm">Especialidad de la medicina que se dedica al estudio y rehabilitacion de las lesiones del aparato locomotor.</p>
                                                    <p> <a href="#" class="btn btn-default" align="right" role="button">Ir</a></p>
                                                  </div>
                                                </div>
                                            </div>


                                            <div class="col-md-4 col-sm-4 col-xs-12 boxlogin">
                                                <div class="thumbnail">
                                                  <img src="images/uromin.jpg" alt="Image" >
                                                  <div class="caption">
                                                    <p class="tm">Urología</p>
                                                    <p class="ttm">Se encarga de estudio las afecciones que afectan al aparato urinario, yse ocupa del aparato genital del hombre. </p>
                                                    <p> <a href="#" class="btn btn-default" role="button">Ir</a></p>
                                                  </div>
                                                </div>
                                            </div>
                                    </div>
                            </div>                            
                        </div>
                    </div>          
                </div> 
            </div>
        </div> 
        <p></p>
        <footer>
            <div class="col-md-12 col-xs-4">
                <p class="boxlogin">© 2015 Soy UNET</p>
                <p class="boxlogin">Website Seminario <a href="http://unet.edu.ve/" target="_blank" rel="nofollow">unet.edu.ve</a></p>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script> $('.carousel').carousel({  interval: 3000 }) </script>
    </body>
</html> 