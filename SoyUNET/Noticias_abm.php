<?php
    require_once('funciones/conectar.php');
?>
<!DOCTYPE html lang="es" xml:lang="es">
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
        <title>Noticias</title>
        <meta name="viewport" content="width=device-width, initial-escale=1.0">        
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
                            <a href="index.php" >
                                <img  src="images/Logo.png" class="img-responsive col-xs-responsive" alt="Image">
                            </a>
                        </div>
                           
                        </div>
                        <div class"col-md-12 col-sm-12">
                            <div class="container">
                                <div id="myCarousel" class="carousel hidden-xs"> 
                                    <div class="carousel-inner">
                                        <div class="item active">                                     
                                            <img src="images/SC2.PNG" alt="Image">
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
                                        <span class="sr-only">Desplegar Navegacion</span>
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
                                        <li class="active"><a href="Cartelara_abm.php"><p>Administración de Noticias</p></a></li>
                                        
                                    </ul>
                                    <ul class="nav navbar-nav navbar-right hidden-xs">
                                        <form class="navbar-form navbar-left hidden-xs" role="search">
                                            <button type="submit" class="btn btn-default hidden-xs">Desconectar</button>
                                        </form>
                                    </ul>
                                </div>
                            </div>
                            <div class="row-fluid"> 
                                <br></br>
                                <h2   class="hidden-xs" align="center">ADMINISTRACIÓN DE NOTICIAS</h2>
                                <h3   class="visible-xs" align="center">ADMINISTRACIÓN DE NOTICIAS</h3> 
                                <div class="col-md-12 col-sm-12 col-xs-12"> 
                                    <br></br>
                                    <div class="jumbotron boxx1">
                                        <form method="POST" name="Texto" id="Texto" >
                                            <h3 >Agregar Noticia</h3> <p></p>
                                            <input type="text" name="titulo" required id="titu" class="form-control campo" placeholder=" Titulo de la Noticia">
                                            <p></p>
                                            <textarea name="contenido" required maxlenght="255" id="conte"  class="form-control campo" cols="25" rows="5" placeholder=" Contenido"></textarea>
                                            <input type="submit" class="btn btn-default" value="Publicar"><br>
                                        </form>
                                    </div>
                                </div>
                                
                                
                                               
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>    
                </div><br> 
            </div>
        </div> 
    </div><br>
    <footer>
        <div class="col-md-12 col-xs-4 col-sm-12">
            <p class="boxlogin" aling="center">© 2015 Soy UNET</p>
            <p class="boxlogin" aling="center">Website Seminario <a href="http://unet.edu.ve/" target="_blank" rel="nofollow">unet.edu.ve</a></p>
        </div>
    </footer>
</body>
<?php
    if ( isset ( $_POST [ 'autor' ])  && isset ( $_POST [ 'titulo' ]) && isset ( $_POST [ 'contenido' ]))
    { 
        $link = mysql_connect('localhost', 'soycartelera', '654321')
        or die('No se pudo conectar: ' . mysql_error());
        mysql_select_db('soyunet') or die('No se pudo seleccionar la base de datos');
        $titulo=mysql_real_escape_string($_POST['titulo']); 
        $contenido=mysql_real_escape_string($_POST['contenido']);
        $fecha=date("Y-m-j");
        mysql_query("INSERT INTO t01_carte 
            (titu_carte,
            conte_carte,
            fecha_carte)
                     VALUES ('".$titulo."','".$contenido."','".$fecha."')",$link);  
        $my_error = mysql_error($link); 
        mysql_close($link);
    }
?> 
</html> 