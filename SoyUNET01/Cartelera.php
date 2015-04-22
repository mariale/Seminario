<?php
    require_once('funciones/conectar.php');
?>
<!DOCTYPE html PUBLIC  lang="es" xml:lang="es">
    <head >
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
    </head >
    <body>    
        <div class="main">
            <div class="container">
                <div class="row-fluid">
                    <div class="well-none">
                        <div class"col-md-12">
                            <div class="social-icons">
                                <a href="#" class="icon-3 hidden-xs"></a>
                                <a href="#" class="icon-2 hidden-xs"></a>
                                <a href="#" class="icon-1 hidden-xs"></a>           
                            </div>
                        </div>   
                        <div class="borde ">
                            <a href="#" >
                                <img  src="images/Logo.png" class="img-responsive " alt="Image">
                            </a>
                        </div> 
                    </div>
                </div>
            </div>
        </div> 
        <div class="bloxx visible-md visible-lg"><br>
            <div class"col-md-12 col-sm-12">
                <div id="myCarousel" class="carousel  "> 
                    <div class="carousel-inner"> 
                        <div class="item active" align="center">                                     
                            <img src="images/sc1.png" alt="Image">
                        </div>  
                        <div class="item " align="center">                                           
                            <img src="images/sc2.png"alt="Image"  >                                                                                            
                         </div>
                        <div class="item" align="center">                                            
                            <img src="images/sc3.png"alt="Image"  >   
                        </div>                                         
                    </div>
                    <a class="carousel-control left" href="#myCarousel"  data-slide="prev"></a>
                    <a class="carousel-control right" href="#myCarousel"  data-slide="next"></a>
                </div>
            </div> <br>
        </div>
        <div class="main">
            <div class="container">
                <div class="row-fluid">
                    <div class="well-none"> 
       
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
                                <ul class="nav navbar-nav navbar-inverse ">
                                    <li><a href="index.php"><p>Inicio</p></a></li>
                                    <li class="active"><a href="Cartelera.php"><p>Cartelera</p></a></li>
                                    <li><a href="#">Comedor</a></li>
                                    <li><a href="#">Transporte</a></li>
                                    <li><a href="Smedico.php">Serv. Médico</a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right ">
                                    <form class="navbar-form navbar-left " role="search">
                                        <div class="form-group ">
                                            <input type="text" class="form-control hidden-sm " placeholder="Buscar" required>
                                        </div>
                                        <button type="submit" class="btn btn-default hidden-sm">Enviar</button>
                                    </form>
                                </ul>
                            </div>
                        </div>
                        <h2 class="top-1 p3 hidden-xs" align="center">CARTELERA INFORMATIVA <br></h2>
                        <h3 class="top-1 p3 visible-xs" align="center">CARTELERA INFORMATIVA <br></h3>
                        
                        <article class="col-md-12 ">
                            <div class="row-fluid ">
                                <div class="col-md-9 col-sm-12 col-xs-12 boxx ">
                                    <div class="list-group ">
                                        hola
                                    </div>
                                </div>  
                                <div class="col-md-3 col-sm-12 col-xs-12 boxx ">
                                    <div class="list-group ">
                                        hola2
                                    </div>
                                </div> 
                            </div>
                        </article>
                    </div>         
                </div>
            </div>
        </div> <br>
        <footer>
            <div class="col-md-12 col-xs-4 col-sm-12">
                <p class="boxlogin">© 2015 Soy UNET</p>
                <p class="boxlogin">Website Seminario <a href="http://unet.edu.ve/" target="_blank" rel="nofollow">unet.edu.ve</a></p>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script> $('.carousel').carousel({  interval: 3000 }) </script>
    </body>
</html> 