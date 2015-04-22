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
                        <div class="borde"> 
                                <a href="index.php" ><img  src="images/Logo.png" class="img-responsive col-xs-responsive" alt="Image"></a></div>
                            </figure>
                    </div>
                    <div class"col-md-12">
                        <div class="container">
                            <div id="myCarousel" class="carousel hidden-xs"> 
                                <div class="carousel-inner">
                                    <div class="item active">                                     
                                        <img src="images/sc1.png" alt="Image">
                                    </div>  
                                    <div class="item ">                                           
                                        <img src="images/sc2.png"alt="Image"  >                                                                                            
                                     </div>
                                    <div class="item">                                            
                                        <img src="images/sc3.png"alt="Image"  >   
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
                                <ul class="nav navbar-nav navbar-inverse ">
                                    <li><a href="index.php"><p>Inicio</p></a></li>
                                    <li><a href="#">Noticias</a></li>
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
    
                        <?php
                            $link = conectar('localhost', 'soycartelera', '654321');
                            $fechaini=date("Y-m-j");
                            $nuevafecha = strtotime ( '-6 day' , strtotime ( $fechaini ) ) ;
                            $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
                            $fechaini=date("Y-m-j"); 
                            ?>
                            <h2 class="top-1 p3 hidden-xs" align="center">CARTELERA INFORMATIVA <br>
                                (<?php  
                                    echo cambiarFormatoFecha($nuevafecha); 
                                    echo " al "; 
                                    echo cambiarFormatoFecha($fechaini);
                                ?>)
                            </h2>
                            <h3 class="top-1 p3 visible-xs" align="center">CARTELERA INFORMATIVA <br>
                                (<?php  
                                    echo cambiarFormatoFecha($nuevafecha); 
                                    echo " al "; 
                                    echo cambiarFormatoFecha($fechaini);
                                ?>)
                            </h3>
                        <div class="col-md-12 ">
                            <div class="row-fluid ">
                                <div class="col-md-12 col-sm-12 col-xs-12 boxx ">
                                    <div class="list-group ">
                                        <br>

                                        <?php
                                            $consul_carte="SELECT * FROM t01_carte WHERE fecha_carte BETWEEN '".$nuevafecha."'  AND '".$fechaini."' ORDER BY fecha_carte DESC";
                                            $resulS_consul_cartel=mysql_query($consul_carte,$link);
                                            if (mysql_num_rows($resulS_consul_cartel)==0)
                                            {
                                                ?>
                                                <h2  aling="center" class="hidden-xs ctop-1 " align="center">AVISO: No se tienen publicaciones</h2>
                                                <h3  aling="center"  class="visible-xs ctop-1" align="center">AVISO: No se tienen publicaciones</h3> <p></p>
                                                <br><br><?php
                                            }
                                            while($fila=mysql_fetch_array($resulS_consul_cartel))
                                            { 
                                            ?>
                                            <div class="col-md-12 col-sm-12 col-xs-12 boxx">
                                                <div class="panel panel-default ">
                                                    <div class="panel-heading ">
                                                        <p class="alp1"><?php echo $fila[1];?> </p>
                                                    </div>
                                                    <div class="panel-body">
                                                        <p class="alp"><?php echo $fila[3]; ?></p>
                                                        <p><?php echo $fila[2]; ?></p>
                                                        <p class="alp"><?php echo $fila[4]; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } mysql_close($link);?>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>         
                </div>
            </div><br>
        </div> 
        <p></p>
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