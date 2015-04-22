<?php
    require_once('funciones/conectar.php');
?>
<!DOCTYPE html lang="es" xml:lang="es">
    <head >
        <title>Administrador de Platos</title>
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
                                        <img src="images/slider-1-comedor.jpg" alt="Image">
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
                                    <li><a href="Comedor_abm.php"><p>Administración de Servicio Comedor</p></a></li>
                                    <li class="active"><a href="Comedor_abm_plato.php"><p>Administración de Plato</p></a></li>
                                    <li><a href="Noticias_abm.php"><p>Administración de Noticias</p></a></li>
                                </ul>
                                </ul>
                                    <ul class="nav navbar-nav navbar-right hidden-xs">
                                        <form class="navbar-form navbar-left hidden-xs" role="search">
                                            <button type="submit" class="btn btn-default hidden-xs">Desconectar</button>
                                        </form>
                                    </ul>
                                <ul class="nav navbar-nav navbar-right visible-md">
                                    <form class="navbar-form navbar-left visible-md" role="search">
                                        <div class="form-group ">
                                            <input type="text" class="form-control visible-md" placeholder="Buscar">
                                        </div>
                                        <button type="submit" class="btn btn-default visible-md">Desconectar</button>
                                    </form>
                                </ul>
                            </div>
                        </div>
                        <div class="row-fluid ">
                            <div class="col-md-12 col-sm-12 col-xs-12"> 
                                <br></br>
                                <h2 class="hidden-xs" align="center">ADMINISTRAR PLATILLOS</h2>
                                <h3 class="visible-xs" align="center">ADMINISTRAR PLATILLOS</h3> 
                                <div class="col-md-8 col-sm-12 col-xs-12"> 
                                    <br></br>
                                    <div class="jumbotron boxx">
                                        <form  action="" enctype="multipart/form-data"method="POST" name="Pla">
                                            <h3>Agregar Platillo</h3> <p></p>
                                             <select name="tipla" class="form-control campo" placeholder="Platillos disponibles ">
                                                    <option value="0">Seleccione el tipo de platillo</option>
                                            <?php
                                                    $link = mysql_connect('localhost', 'soycartelera', '654321')
                                                    or die('No se pudo conectar: ' . mysql_error());
                                                    mysql_query("SET NAMES 'utf8'");
                                                    mysql_select_db('soyunet') or die('No se pudo seleccionar la base de datos');
                                                    $consul_tipla="SELECT * from ti_pla";
                                                    $resulS_consul_tipla=mysql_query($consul_tipla,$link);
                                                    while($filatipla=mysql_fetch_array($resulS_consul_tipla))
                                                    { 
                                                    ?>
                                                      <option  value=<?php echo $filatipla[0]; ?> ><?php echo $filatipla[1]; ?> </option>                                                    
                                                    <?php 
                                                    } 
                                                    mysql_close($link);
                                            ?>
                                        </select><br>
                                            <input type="text" name="nom_pla"  required id="serv" class="form-control campo" align="rigth"  placeholder=" Nombre del plato "><br>
                                            <textarea name="desp_pla"required  maxlenght="255" id="dserv"  class="form-control campo" cols="25" rows="5" placeholder=" Descripción del plato"></textarea><br>
                                             <span class="btn btn-default btn-file form-control campo">
                                                Examinar Imagen
                                                <input type="file" name="imagen"  required>
                                            </span>
                                            <input type="submit" class="btn btn-default form-control campo" name="Bpla" value="Agregar Plato">
                                        </form>
                                    </div>
                                    <br>
                                </div>
                                <?php
                                if ( isset ( $_POST [ 'Bpla' ]))
                                { 
                                    $ruta="phppot_uploads";
                                    $archivo = $_FILES["imagen"]["tmp_name"]; 
                                    $nombreArchivo  = $_FILES["imagen"]["name"];
                                    move_uploaded_file($archivo,$ruta."/".$nombreArchivo);
                                    $ruta=$ruta."/".$nombreArchivo;

                                    $link = mysql_connect('localhost', 'soycartelera', '654321')
                                    or die('No se pudo conectar: ' . mysql_error());
                                    mysql_select_db('soyunet') or die('No se pudo seleccionar la base de datos');
                                    
                                    $N_pla=mysql_real_escape_string($_POST['nom_pla']);
                                    $Des_pla=mysql_real_escape_string($_POST['desp_pla']);
                                    $ti_pla=mysql_real_escape_string($_POST['tipla']);

                                     mysql_query("SET NAMES 'utf8'");
                                    mysql_query("INSERT INTO m03_plato
                                                (nom_pla,
                                                desp_pla,
                                                img_pla,
                                                fk_tipla_pla)
                                                VALUES ('".$N_pla."','".$Des_pla."','".$ruta."','".$ti_pla."')",$link);
                                     $my_error = mysql_error($link);
                                    if ($my_error) 
                                    {
                                        echo "<script type='text/javascript'>alert('AVISO: Ocurrio un Error en la inserción');</script>";  
                                    }
                                    mysql_close($link);
                                }
                                ?>
                                <div class="col-md-4 col-sm-12 col-xs-12"><br></br>
                                    <div class="jumbotron boxx1">
                                        <h3>Consultar Platillos</h3> <br>
                                        <form method="POST" name="Texto" id="Texto">
                                            <div  class = "btn-grupo" > <br> <br>
                                                <input type="radio" name="todo" value="todo" class="alp11" checked="checked">Todos los platillos<br> <br><br>
                                                <select name="pla" class="form-control campo" placeholder="Platillos disponibles ">
                                                    <option value="0">Seleccione el platillo</option>
                                                    <?php
                                                    $link = mysql_connect('localhost', 'soycartelera', '654321')
                                                    or die('No se pudo conectar: ' . mysql_error());
                                                    mysql_query("SET NAMES 'utf8'");
                                                    mysql_select_db('soyunet') or die('No se pudo seleccionar la base de datos');
                                                    $consul_plato="SELECT * from m03_plato";
                                                    $resulS_consul_plato=mysql_query($consul_plato,$link);
                                                    while($fila=mysql_fetch_array($resulS_consul_plato))
                                                    { 
                                                    ?>
                                                      <option  value=<?php echo $fila[0]; ?>> <?php echo $fila[1]; ?> </option>                                                    
                                                    <?php 
                                                    } 
                                                    mysql_close($link);
                                                    ?>
                                                </select><br> 
                                                 <select name="tiplab" class="form-control campo" placeholder="Platillos disponibles ">
                                                    <option value="0">Seleccione el tipo de platillo</option>
                                            <?php
                                                    $link = mysql_connect('localhost', 'soycartelera', '654321')
                                                    or die('No se pudo conectar: ' . mysql_error());
                                                    mysql_query("SET NAMES 'utf8'");
                                                    mysql_select_db('soyunet') or die('No se pudo seleccionar la base de datos');
                                                    $consul_tipla="SELECT * from ti_pla";
                                                    $resulS_consul_tipla=mysql_query($consul_tipla,$link);
                                                    while($filatipla=mysql_fetch_array($resulS_consul_tipla))
                                                    { 
                                                    ?>
                                                      <option  value=<?php echo $filatipla[0]; ?> ><?php echo $filatipla[1]; ?> </option>                                                    
                                                    <?php 
                                                    } 
                                                    mysql_close($link);
                                            ?>
                                                </select><br><br>
                                                <input type="submit" class="btn btn-default form-control campo" name="consul" value="Consultar platillo">
                                            </div>
                                        </form>
                                    </div><br>
                                </div>
                                <?php  
                                if ( isset ( $_POST [ 'consul' ]))
                                { 
                                
                                    ?><br>
                                    <?php

                                    $link = mysql_connect('localhost', 'soycartelera', '654321')
                                    or die('No se pudo conectar: ' . mysql_error());
                                    mysql_query("SET NAMES 'utf8'");
                                    mysql_select_db('soyunet') or die('No se pudo seleccionar la base de datos');
                                     mysql_query("SET NAMES 'utf8'");
                                     if ($_POST['tiplab']=='0' and $_POST['pla']=='0') 
                                     {
                                         $consul_p="SELECT * from m03_plato ORDER BY nom_pla ASC ";
                                         $resulS_consul_p=mysql_query($consul_p,$link);
                                         $bannn=true;
                                     }
                                    if ($_POST['tiplab']>'0' and $_POST['pla']=='0') 
                                     {
                                         $consul_p="SELECT * from m03_plato WHERE fk_tipla_pla='".$_POST['tiplab']."' ORDER BY nom_pla ASC ";
                                         $resulS_consul_p=mysql_query($consul_p,$link);
                                         $bannn=true;
                                     }
                                     if ($_POST['tiplab']=='0' and $_POST['pla']>'0') 
                                     {
                                         $consul_p="SELECT * from m03_plato  WHERE  id='".$_POST['pla']."' ORDER BY nom_pla ASC ";
                                         $resulS_consul_p=mysql_query($consul_p,$link); 
                                         $bannn=true; 
                                     }
                                    if ($_POST['tiplab']>'0' and $_POST['pla']>'0') 
                                     {
                                         echo "<script type='text/javascript'>alert('AVISO: Debe seleccionar entre tipo de platillo o platillo');</script>";  
                                        $bannn=false;
                                     }
                                     if ($bannn==true) 
                                     {
                                        ?>
                                        <h2 class="hidden-xs" align="center">PLATILLOS DISPONIBLES</h2>
                                        <h3 class="visible-xs" align="center">PLATILLOS DISPONIBLES</h3>
                                        <br><div class="row-fluid ">
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxx1"><br>
                                        <?php
                                         if (mysql_num_rows($resulS_consul_p)==0)
                                        {
                                            ?>
                                            <h2  aling="center" class="hidden-xs ctop-1 " align="center">AVISO: No se tienen publicaciones</h2>
                                            <h3  aling="center"  class="visible-xs ctop-1" align="center">AVISO: No se tienen publicaciones</h3> <p></p>
                                            <br><br>
                                            <?php
                                        }
                                        else
                                        {
                                            while($filax=mysql_fetch_array($resulS_consul_p))
                                            { 
                                            ?>
                                            <div class="col-md-12 col-sm-12 col-xs-12 boxx">
                                                <div class="panel panel-default ">
                                                    <div class="panel-heading ">
                                                        <p class="alp1"><?php echo $filax[1];?> </p>
                                                    </div>
                                                    <div class="panel-body">
                                                        <p class="alp"><?php echo $filax[2]; ?></p>
                                                        <img src="<?php echo $filax[3]; ?>" width="250px" align="center" borde="3">  <br>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                        <?php } 
                                        }
                                     }  
                                    mysql_close($link);?> 
                                           
                                        </div>  
                                    </div>
                                </div><br>

                                <?php 
                                }
                                ?>
                            </div>                           
                        </div>
                    </div>   <br><br>
                </div> 
            </div>
        </div>
        <br>       
        <footer>
            <div class="row-fluid ">
            <div class="col-md-12 col-xs-4 col-sm-12">
                <p class="boxlogin">© 2015 Soy UNET</p>
                <p class="boxlogin">Website Seminario <a href="http://unet.edu.ve/" target="_blank" rel="nofollow">unet.edu.ve</a></p>
            </div>
        </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script> $('.carousel').carousel({  interval: 3000 }) </script>
        <script src="js/bootstrap-filestyle.min.js"> </script>
        <script >$(":file").filestyle({buttonText: "Find file"});</script>
        
    </body>
</html> 