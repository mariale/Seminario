<?php
    $link = mysql_connect('localhost', 'yrjsoyunet', '654321')
        or die('?>No se pudo conectar: ' . mysql_error());
        mysql_select_db('soyunet') or die('No se pudo seleccionar la base de datos');
?>
<!DOCTYPE html>
<html>
    <head lang="es">
        <title>Cartelera</title>
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
            <!--Logo -->
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
             <!--Slider -->
            <div class"col-md-12">
                <div class="container">
                    <div id="myCarousel" class="carousel hidden-xs"> 
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="item active ">                                     
                                <img src="images/slider-1-t.jpg" alt="Image" >
                            </div>  
                            <!--/item-->
                             <div class="item">                                           
                                <img src="images/slider-1-c.jpg" alt="Image" >                                                                                             
                             </div>
                            <!--/item-->
                            <div class="item">                                            
                                <img src="images/slider-2-car.jpg" alt="Image" >
                            </div>
                                <!--/item-->
                        </div>
                        <!--/carousel-inner--> 
                        <a class="carousel-control left" href="#myCarousel"  data-slide="prev">
                            
                        </a>
                        <a class="carousel-control right" href="#myCarousel"  data-slide="next">
                           
                        </a>
                    </div>
                </div><!--/containers-->
            </div>
                        <!--Menu pincipal -->
                        <div class="col-md-12 col-sm-12 col-xs-4 ">
                            <div class="navbar-responsive navbar-inverse" role="navigation">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle " data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                        <span class="sr-only">Desplegar navegación</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                       <ul class"active">
                                            <a class="navbar-brand navbar-home active" href="#">
                                                <img  alt= "home" class="visible-xs" src="images/home.png" >
                                            </a>
                                            
                                    </ul>
                              </div>
                              <div class=" navbar-collapse navbar-ex1-collapse">
                                    <ul class="nav navbar-nav navbar-inverse ">
                                        <li >
                                            <a href="#"><p>Inicio</p></a>
                                        </li>
                                        <li class="active">
                                            <button type="button" class="btn btn-danger">Action</button>
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
                                            <ul class="dropdown-menu" role="menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
                                            

                                        </li>
                                        <li>
                                            <a href="#">Comedor</a>
                                        </li>
                                        <li >
                                            <a href="#">Transporte</a>
                                        </li>
                                        <li>
                                            <a href="#">Serv. Medico</a>
                                        </li>
                                    </ul>
                                    
                                    <ul class="nav navbar-nav navbar-right hidden-xs">
                                        <form class="navbar-form navbar-left hidden-xs" role="search">
                                            <div class="form-group ">
                                                <input type="text" class="form-control hidden-xs" placeholder="Buscar">
                                            </div>
                                            <button type="submit" class="btn btn-default hidden-xs">Enviar</button>
                                        </form>
                                    </ul>
                                </div>
                           </div>
                           <br> </br>
                           <div class="col-md-12 ">
                                <div class="row-fluid">
                                   <ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Library</a></li>
  <li class="active">Data</li>
</ol>
                                </div>
                                <br></br>
                            </div>
                        </div>         
                    </div>
                </div>
       
        </div>
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