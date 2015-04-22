<?php
    require_once('funciones/conectar.php');
?>
<!DOCTYPE html PUBLIC  lang="es" xml:lang="es">
    <head lang="es">
        <title>Servicio Medico</title>
        <meta name="viewport" content="width=device-width, initial-escale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
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
                         <div class="borde ">
                            <a href="index.php" >
                                <img  src="images/Logo.png" class="img-responsive col-xs-responsive" alt="Image">
                            </a>
                        </div>
                    </div>
                    <div class"col-md-12">
                        <div class="container">
                            <div id="myCarousel" class="carousel hidden-xs"> 
                                <div class="carousel-inner">
                                    <div class="item active">                                     
                                        <img src="images/ss1.png" alt="Image">
                                    </div>  
                                    <div class="item ">                                           
                                        <img src="images/ss1.png" alt="Image" >                                                                                             
                                     </div>
                                    <div class="item">                                            
                                        <img src="images/ss1.png" alt="Image" >
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
                                    <li><a href="Cartelera.php"><p>Cartelera</p></a></li>
                                    <li class="active"><a href="Smedico.php">Serv. Médico</a></li>
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
                            <div class="col-md-12 col-sm-12 col-xs-12"><br>
                                <h2  aling="center" class="hidden-xs ctop-1 " align="center">ESPECIALIDADES MÉDICAS</h2><br>
                                <h3  aling="center"  class="visible-xs ctop-1" align="center">ESPECIALIDADES MÉDICAS</h3> <br>
                                <div class="col-md-12 col-sm-12 col-xs-12"> 
                                    <div class="list-group boxx "><br>
                                        <?php
                                        $link =conectar();
                                        mysql_select_db('soyunet') or die('No se pudo seleccionar la base de datos');
                                        $consul_carte="SELECT * from m02_espe";
                                        $resulS_consul_cartel=mysql_query($consul_carte,$link);
                                        while($fila=mysql_fetch_array($resulS_consul_cartel))
                                        { 
                                        ?>
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxlogin">
                                            <div class="thumbnail ">                              
                                                <div class="caption banerr">
                                                    <p class=" hidden-xs tmx" align="center"><?php echo $fila[1]; ?><br><br></p>
                                                    <p class=" visible-xs tm" align="center"><?php echo $fila[1]; ?><br></p>
                                                    <details><br>                                                        
                                                                                                
                                                    
                                                        <summary>Especialistas en el área de <?php echo $fila[1]; ?> disponibles </summary>
                                                        <br>
                                                        <?php
                                                        mysql_query("SET NAMES 'utf8'"); 
                                                        $consul_espe="SELECT * from t02_med WHERE id_fk_med_espe='".$fila[0]."' ";
                                                        $result=mysql_query($consul_espe) or die (mysql_error()); 
                                                        if (mysql_num_rows($result)==0)
                                                        {
                                                            ?>
                                                            <p aling="center" class="hidden-xs  alp1" align="center">AVISO: No hay disponibilidad de especialistas por el momento</p>
                                                            <p aling="center" class="visible-xs alp1" align="center">AVISO: No hay disponibilidad de especialistas por el momento</p>
                                                            <?php
                                                        }
                                                        $resulS_consul_med=mysql_query($consul_espe,$link);
                                                        while($fila_med=mysql_fetch_array($resulS_consul_med))
                                                        { 
                                                        ?>                                                        
                                                            <div class="panel panel-default ">
                                                                <div class="panel-heading ">
                                                                    <p class="alp1">
                                                                         <?php echo $fila_med[1]; ?> (<?php echo $fila_med[0]; ?>)
                                                                    </p>
                                                                </div>
                                                                <div class="panel-body">
                                                                    <p class="alpx">
                                                                        <?php echo $fila_med[4]; ?><br><br>
                                                                    </p>
                                                                    <p align="center">
                                                                        
                                                                    </p>
                                                                        Dirección: <?php echo $fila_med[5]; ?><br>
                                                                        Telefono: <?php echo $fila_med[3]; ?><br>
                                                                        N° Citas: <?php echo $fila_med[2]; ?><br>
                                                                        Dias de atención: <?php echo $fila_med[6]; ?><br>
                                                                        Horario de atención: <?php echo $fila_med[7]; ?><br>
                                                                    </p>
                                                                    <p class="alp">
                                                                        (<?php echo $fila_med[8]; ?>)<br>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        <?php } ?><br>
                                                        <p class="ttm" align=""><?php echo $fila[2]; ?></p><br> 
                                                     </details>                                                            
                                                </div> 
                                               
                                            </div>     
                                        </div>                                                     
                                        <?php 
                                        } 
                                        mysql_close($link);
                                        ?>
                                        </div>
                                    </div>
                                </div>                            
                            </div> 
                        </div>
                    </div>       
                </div> <br><br>
            </div>
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
