<?php
    require_once('funciones/Conectar.php');
    require_once('funciones/Error.php');
    require_once('funciones/Autentificacion.php');
    require_once('funciones/Cerrar.php');
    $NAUsuariio=autentificar('AdmCarte');

?>
<!DOCTYPE html lang="es" xml:lang="es">
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
        <title>Categoría-Agregar</title>
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
                            <img src="images/m101.jpg" alt="Image">
                        </div>                                          
                    </div>
                    <a class="carousel-control left" href="#myCarousel"  data-slide="prev"></a>
                    <a class="carousel-control right" href="#myCarousel"  data-slide="next"></a>
                </div>
            </div> <br>
        </div>        
        
        <div class="main">
            <div class="container">
                <div class="col-md-12 col-sm-12 col-xs-4 ">
                    <div class="navbar-responsive navbar-inverse" >
                        <div class="container-fluid">
                            <div class="navbar-header bs-docs-nav ">
                                <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Desplegar Navegacion</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <ul class="nav-stacked">
                                    <a class="navbar-brand navbar-home active" href="#">
                                        <img  alt= "home" class="visible-xs visible-sm visible-md" src="images/home.png" >
                                    </a>
                                    <a class="navbar-brand navbar-home active visible-md visible-xs visible-sm"><?php echo "Bienvenido: "; ?><?php echo $NAUsuariio;?></a>

                                </ul>
                            </div>
                            <div class="collapse navbar-collapse navbar-ex1-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav   nav-pills nav-stacked">
                                    <li  role="presentation"><a href="Cartelera_adm.php"><p>Inicio</p></a></li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#"  class="dropdown-toggle " data-toggle="dropdown" role="button" aria-expanded="false">
                                            <p> Adm. de Cartelera 
                                                <span class="caret"></span>
                                            </p>
                                        </a>
                                        <ul class="nav  navbar-inverse dropdown-menu nav-left" role="menu">
                                            <li  role="presentation"><a href="cartelera_adm_agregar.php"><p>Agregar Anuncio</p></a></li>
                                            <li  role="presentation"><a href="cartelera_adm_consultar.php"><p>Consultar Anuncios</p></a></li>
                                        </ul>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="active" >
                                        <a href="#"  class="dropdown-toggle " data-toggle="dropdown" role="button" aria-expanded="false">
                                            <p> Adm. de Categoría 
                                                <span class="caret"></span>
                                            </p>
                                        </a>
                                        <ul class="nav  navbar-inverse dropdown-menu nav-left" role="menu">
                                            <li class="bloxx" role="presentation"><a href="Categoria_adm_agregar.php"><p>Agregar categoría</p></a></li>
                                            <li  role="presentation"><a href="Categoria_adm_consultar.php"><p>Consultar categorías</p></a></li>
                                        </ul>
                                    </li>
                                    <li class="divider"></li>
                                    <li  role="presentation"><a href="Noticias_adm.php"><p>Agregar Noticias</p></a></li>
                                    
                                </ul>
                                <ul class="nav navbar-nav navbar-right nav-stacked">
                                    <li class="visible-lg"><a><?php echo "Bienvenido: "; ?><?php echo $NAUsuariio;?></a></li>
                                    <form class="navbar-form navbar-left " >
                                        <button name="desco1"type="submit" class="btn btn-default">Desconectar</button><p> </p> 
                                    </form>
                                </ul> 
                            </div>
                        </div>
                    </div>
                    <?php 
                    if (isset($_POST['desco1'])) 
                    {
                        cerrar();
                    }
                    ?>
                    <div class="row-fluid"><br></br>
                        <h2  class="hidden-xs" align="center">AGREGAR CATEGORÍA</h2>
                        <h3  class="visible-xs" align="center">AGREGAR CATEGORÍA</h3> 
                        <div class="col-md-12 col-sm-12 col-xs-12"> 
                            <br></br>
                            <div class="jumbotron boxx1">
                                <form method="POST" name="Texto" id="Texto" >
                                    <input type="text" required name="categoria" required  class="form-control campo" align="rigth"  placeholder=" Categoría de publicación ">
                                    <br><p>Nivel de categoría</p> 
                                    <input type="radio" name="nivel" value="1" class="alp11" checked="checked"> 
                                    Nivel 1 Descripción de categoría altamente importantes o de  atención urgentes 
                                    <br><input type="radio" name="nivel" value="2" class="alp11" > 
                                    Nivel 2 Descripción de categoría importante o de gran importancia a la comunidad
                                    <br><input type="radio" name="nivel" value="3" class="alp11" > 
                                    Nivel 3 Descripción de categoría de uso común para la comunidad universitaria
                                    <br><input type="radio" name="nivel" value="4" class="alp11" > 
                                    Nivel 4 Descripción de categoría relevante artículos perdidos, opiniones entre otros.
                                    <br><input type="radio" name="nivel" value="5" class="alp11" > 
                                    Nivel 5 Descripción de categoría baja de poca importancia.
                                    <p></p>
                                    <select name="estado" class="form-control campo"  >
                                        <option value="0">* Estado de la categoría</option>
                                        <option value="Activo">Activo</option>
                                        <option value="Inactivo">Inactivo</option>
                                    </select><br>
                                    <textarea name="contenido" required maxlenght="255" id="conte"  class="form-control campo" cols="25" rows="5" placeholder=" Descripción de categoría"></textarea>
                                    <input name="agr" type="submit" class="btn btn-default" value="Agregar categoría"><br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
        </div> 
    </div>
    <footer>
        <div class="col-md-12 col-xs-4 col-sm-12">
            <p class="boxlogin" aling="center">© 2015 Soy UNET</p>
            <p class="boxlogin" aling="center">Website Seminario <a href="http://unet.edu.ve/" target="_blank" rel="nofollow">unet.edu.ve</a></p>
        </div>
    </footer>
</body>
<?php
    if (isset($_POST [ 'agr' ])) 
    {
        $link =conectar();
        $categoria=mysql_real_escape_string($_POST['categoria']);
        $nivel=mysql_real_escape_string($_POST['nivel']); 
        $contenido=mysql_real_escape_string($_POST['contenido']);
        $estado=mysql_real_escape_string($_POST['estado']);
        if ($categoria=="" or $categoria==null or $contenido=="" or $contenido==null) 
        {
            error3();
        }
        else
        {
            if ($nivel>'5' or $nivel<'1') 
            {
                error3();
            }
            else
            {
                mysql_query("INSERT INTO m06_categoria 
                            (categoria,
                            Nivel_cate,
                            conta,
                            Des_cate,
                            estado)
                         VALUES ('".$categoria."','".$nivel."','0','".$contenido."','".$estado."')",$link);  
                Error4($link);
                ?>
            <script type="text/javascript">
                window.location="Categoria_adm_consultar.php";
            </script> 
            <?php
            }
        }
        mysql_close($link);
    }            
?> 
</html> 