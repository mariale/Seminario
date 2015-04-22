<?php
    require_once('funciones/Conectar.php');
    require_once('funciones/Error.php');
    require_once('funciones/Autentificacion.php');
    $NAUsuariio=autentificar('AdmCarte');

?>
<!DOCTYPE html lang="es" xml:lang="es">
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
        <title>Cartelera</title>
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
                                    <li class="active" role="presentation"><a href="Cartelera_adm.php"><p>Inicio</p></a></li>
                                    <li class="divider"></li>
                                    <li >
                                        <a href="#"  class="dropdown-toggle " data-toggle="dropdown" role="button" aria-expanded="false">
                                            <p> Adm. de Cartelera 
                                                <span class="caret"></span>
                                            </p>
                                        </a>
                                        <ul class="nav  navbar-inverse dropdown-menu nav-left" role="menu">
                                            <li  role="presentation"><a href="cartelera_adm_agregar.php"><p>Agregar Anuncio</p></a></li>
                                            <li role="presentation"><a href="cartelera_adm_consultar.php"><p>Consultar Anuncios</p></a></li>
                                        </ul>
                                    </li>
                                    <li class="divider"></li>
                                    <li  >
                                        <a href="#"  class="dropdown-toggle " data-toggle="dropdown" role="button" aria-expanded="false">
                                            <p> Adm. de Categoría 
                                                <span class="caret"></span>
                                            </p>
                                        </a>
                                        <ul class="nav  navbar-inverse dropdown-menu nav-left" role="menu">
                                            <li  role="presentation"><a href="Categoria_adm_agregar.php"><p>Agregar categoría</p></a></li>
                                            <li   role="presentation"><a href="Categoria_adm_consultar.php"><p>Consultar categorías</p></a></li>
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
                        <h2  class="hidden-xs" align="center">ADMINISTRACIÓN DE CARTELERA INFORMATIVA</h2>
                        <h3  class="visible-xs" align="center">ADMINISTRACIÓN DE CARTELERA INFORMATIVA</h3> 
                        <div class="col-md-12 col-sm-12 col-xs-12"><br></br>
                            <div class="jumbotron boxx1">
                                <form method="POST" name="Texto" id="Texto">
                                    <h3  aling="center" align="center">Publicaciones</h3> <p></p>
                                    <div  class = "btn-grupo" >   
                                        <input type="radio" name="rdr" value="semana" class="alp11" >Ultima Semana
                                        <br>
                                        <input type="radio" name="rdr" value="mes" class="alp11" >Ultimo Mes
                                        <br>
                                        <input type="radio" name="rdr" value="ano" class="alp11" >Ultimo año
                                        <br>
                                        <input type="radio" name="rdr" value="todo" class="alp11" checked="checked">Todo
                                        <p></p>
                                        <input type="text" name="autorb"  id="autorb" class="form-control campo" align="rigth"  placeholder=" Buscar por Autor">
                                       <p></p>
                                        <input type="text" name="titulob"  id="titulob" class="form-control campo" placeholder=" Buscar por Titulo">
                                        <input type="submit" name="consul" class="btn btn-default" name="consul" value="Consultar">
                                    </div>
                                </form>
                            </div><br><br>
                        </div><br>
                        
                            <?php
                                if (isset ( $_POST [ 'consul' ]))
                                {
                                    $link = conectar('localhost', 'soycartelera', '654321');?> 
                                    <h2  aling="center" class="hidden-xs ctop-1 " align="center">Cartelera Informativa</h2><br>
                                    <h3  aling="center"  class="visible-xs ctop-1" align="center">Cartelera Informativa</h3> 
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="list-group boxx ">
                                    <?php
                                    $fechaini=date("Y-m-j");
                                    $nuevafecha = strtotime ( '-6 day' , strtotime ( $fechaini ) ) ;
                                    $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
                                    $fechaini=date("Y-m-j");
                                    if ($_POST [ 'autorb' ]=='' AND $_POST [ 'titulob' ]=='')
                                    {
                                        if (isset($_POST [ 'rdr' ]))
                                        {
                                            $vrdr=$_POST [ 'rdr' ];
                                            if ($vrdr=='semana') 
                                            {
                                                $nuevafecha = strtotime ( '-6 day' , strtotime ( $fechaini ) ) ;
                                                $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
                                                $fechaini=date("Y-m-j");
                                                $consul_carte="SELECT * FROM t01_carte WHERE fecha_carte BETWEEN '".$nuevafecha."'  AND '".$fechaini."' ORDER BY fecha_carte  DESC";
                                            }
                                            if ($vrdr=='mes') 
                                            {
                                                $nuevafecha = strtotime ( '-1 month' , strtotime ( $fechaini ) ) ;
                                                $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
                                                $fechaini=date("Y-m-j");
                                                $consul_carte="SELECT * FROM t01_carte WHERE fecha_carte BETWEEN '".$nuevafecha."'  AND '".$fechaini."' ORDER BY fecha_carte DESC";
                                            }
                                            if ($vrdr=='ano') 
                                            {
                                                $nuevafecha = strtotime ( '-1 year' , strtotime ( $fechaini ) ) ;
                                                $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
                                                $fechaini=date("Y-m-j");
                                                $consul_carte="SELECT * FROM t01_carte WHERE fecha_carte BETWEEN '".$nuevafecha."'  AND '".$fechaini."' ORDER BY fecha_carte DESC ";
                                            }
                                            if ($vrdr=='todo') 
                                            {
                                                $consul_carte='SELECT * from t01_carte ORDER BY fecha_carte DESC';
                                            }
                                        }
                                    }
                                    $vertitulo=$_POST [ 'titulob' ];
                                    $verautor=$_POST [ 'autorb' ];  
                                    if ($verautor and !$vertitulo)
                                    {
                                        $consul_carte="SELECT * from t01_carte WHERE autor_carte ='".$verautor."' ORDER BY fecha_carte DESC";
                                    }
                                    if ($vertitulo AND !$verautor)
                                    {
                                        $consul_carte="SELECT * from t01_carte WHERE titu_carte ='".$vertitulo."' ORDER BY fecha_carte DESC";
                                    }


                                    if($verautor AND $vertitulo)
                                    {
                                       $consul_carte="SELECT * from t01_carte WHERE titu_carte ='".$vertitulo."' AND autor_carte ='".$verautor."' ORDER BY fecha_carte DESC";
                                    }
                                    $result=mysql_query($consul_carte) or die (mysql_error()); 
                                    if (mysql_num_rows($result)==0)
                                    {
                                        ?><br>
                                        <h2  aling="center" class="hidden-xs ctop-1 " align="center">AVISO: No existe Registro</h2><br>
                                        <h3  aling="center"  class="visible-xs ctop-1" align="center">AVISO: No existe Registro</h3> <br>
                                        <?php
                                    }
                                    $resulS_consul_cartel=mysql_query($consul_carte,$link);
                                    while($fila=mysql_fetch_array($resulS_consul_cartel))
                                    { 
                                    ?><br>
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxx">
                                            <div class="panel panel-default ">
                                                <div class="panel-heading ">
                                                   <span class="glyphicon glyphicon-remove  alp1" aria-hidden="true">
                                                        <?php echo $fila[1];?> 
                                                    </span>
                                                        
                                                   
                                                        
                                             
                                                </div>
                                                <div class="panel-body">
                                                    <p class="alp">
                                                        <?php echo $fila[3]; ?>
                                                    </p>
                                                    <p>
                                                        <?php echo $fila[2]; ?>
                                                    </p>
                                                    <p class="alp">
                                                        <?php echo cambiarFormatoFecha($fila[4]); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php 
                                    } 
                                    mysql_close($link);  
                                }?>   
                            </div>
                        </div>  
                    </div>
                </div>
                    </div>    
                </div> 
            </div>
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
    if ( isset ( $_POST [ 'autor' ])  && isset ( $_POST [ 'titulo' ]) && isset ( $_POST [ 'contenido' ]))
    { 
        $link = mysql_connect('localhost', 'soycartelera', '654321')
        or die('No se pudo conectar: ' . mysql_error());
        mysql_select_db('soyunet') or die('No se pudo seleccionar la base de datos');
        $autor=mysql_real_escape_string($_POST['autor']);
        $titulo=mysql_real_escape_string($_POST['titulo']); 
        $contenido=mysql_real_escape_string($_POST['contenido']);
        $fecha=date("Y-m-j");
        mysql_query("INSERT INTO t01_carte 
            (titu_carte,
            conte_carte,
            autor_carte,
            fecha_carte)
                     VALUES ('".$titulo."','".$contenido."','".$autor."','".$fecha."')",$link);  
        $my_error = mysql_error($link); 
        mysql_close($link);
    }
?> 
</html> 
