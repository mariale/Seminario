<?php
    require_once('funciones/conectar.php');
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
                <div class="row-fluid">
                    <div class="well-none">
                        <div class"col-md-12">
                            <div class="social-icons">
                                <a href="#" class="icon-3 hidden-xs"></a>
                                <a href="#" class="icon-2 hidden-xs"></a>
                                <a href="#" class="icon-1 hidden-xs"></a>           
                            </div>
                        </div>
                            <figure>
                                <a href="index.php" ><img  src="images/Logo.png" class="img-responsive" alt="Image"></a>
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
                            <div class="row-fluid"> 
                                <br></br>
                                <h2  aling="center" class="hidden-xs" align="center">Administrar Cartelera Informativa</h2>
                                <h3  aling="center"  class="visible-xs" align="center">Administrar Cartelera Informativa</h3> 
                                <div class="col-md-8 col-sm-16 col-xs-12"> 
                                    <br></br>
                                    <div class="jumbotron boxx1">
                                        <form method="POST" name="Texto" id="Texto">
                                            <h3>Agregar Publicacion</h3> <p></p>
                                            <input type="text" name="autor"  id="auto" class="form-control campo" align="rigth"  placeholder=" Autor">
                                            <p></p>
                                            <input type="text" name="titulo"  id="titu" class="form-control campo" placeholder=" Titulo">
                                            <p></p>
                                            <textarea name="contenido" maxlenght="255" id="conte"  class="form-control campo" cols="25" rows="5" placeholder=" Contenido"></textarea>
                                            <input type="submit" class="btn btn-default" value="Publicar">
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-16 col-xs-12"> 
                                    <br></br>
                                    <div class="jumbotron boxx1">
                                        <form method="POST" name="Texto" id="Texto">
                                            <h3>Consultar Publicación</h3> <p></p>
                                            <div  class = "btn-grupo" >   
                                                <input type="radio" name="rdr" value="semana" class="alp11" >Ultima Semana
                                                <br>
                                                <input type="radio" name="rdr" value="mes" class="alp11" >Ultimo Mes
                                                <br>
                                                <input type="radio" name="rdr" value="ano" class="alp11" >Ultimo año
                                                <br>
                                                <input type="radio" name="rdr" value="todo" class="alp11" checked="checked">Todo
                                                <p></p>
                                                <input type="text" name="autorb"  id="autorb" class="form-control campo" align="rigth"  >
                                               <p></p>
                                                <input type="text" name="titulob"  id="titulob" class="form-control campo" >
                                                <input type="submit" class="btn btn-default" name="consul" value="Consultar">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="row-fluid ">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="list-group boxx ">
                                        <?php
                                            if (isset ( $_POST [ 'consul' ]))
                                            {
                                                $link = conectar('localhost', 'soycartelera', '654321');
                                                ?> <h2 class="top-1 p3" align="center">Cartelera Informativa</h2><?php
                                                if (isset($_POST [ 'autorb' ]) or isset($_POST [ 'titulob' ])  )
                                                {
                                                    echo "uno de los dos ";
                                                    if (isset($_POST [ 'autorb' ]) and isset($_POST [ 'titulob' ])  )
                                                    {
                                                        echo "los dos ";
                                                    }
                                                    else
                                                    {
                                                        if (isset($_POST [ 'autorb' ]))
                                                        {
                                                             echo "autor";
                                                        }
                                                        if (isset($_POST [ 'titulob' ]))
                                                        {
                                                            echo "titulo";
                                                        }
                                                    }     
                                                }
                                                else
                                                {
                                                    if (isset($_POST [ 'rdr' ]))
                                                    {
                                                        $vrdr=$_POST [ 'rdr' ];
                                                        if ($vrdr=='semana') {
                                                            $fechaini=date("Y/m/j");
                                                            $nuevafecha = strtotime ( '-6 day' , strtotime ( $fechaini ) ) ;
                                                            $nuevafecha = date ( 'j m Y' , $nuevafecha );
                                                            $fechaini=date("j/m/Y");
                                                            echo $nuevafecha;
                                                            echo $fechaini;
                                                            $consul_carte="SELECT * FROM t01_carte WHERE fecha_carte BETWEEN '".$nuevafecha."'  AND '".$fechaini."' ";
                                                            //$consul_carte="SELECT * FROM t01_carte WHERE fecha_carte DATEDIFF('".$nuevafecha."','".$fechaini."') ";
                                                           
                                                        }
                                                        if ($vrdr=='mes') {
                                                            $fechaini=date("Y/m/j");
                                                            $nuevafecha = strtotime ( '-1 month', strtotime ( $fechaini ) ) ;
                                                            $nuevafecha = date ( 'j/m/Y' , $nuevafecha );
                                                            $fechaini=date("j/m/Y");
                                                            echo $nuevafecha;
                                                            echo $fechaini;
                                                            $consul_carte="SELECT * FROM t01_carte WHERE fecha_carte BETWEEN '".$nuevafecha."'  AND '".$fechaini."' ";
                                                        }
                                                        if ($vrdr=='ano') {
                                                            $fechaini=date("Y/m/j");
                                                            $nuevafecha = strtotime ( '-1 year' , strtotime ( $fechaini ) ) ;
                                                            $nuevafecha = date ( 'j/m/Y' , $nuevafecha );
                                                            $fechaini=date("j/m/Y");
                                                            echo $nuevafecha;
                                                            echo $fechaini;
                                                            $consul_carte="SELECT * FROM t01_carte WHERE fecha_carte BETWEEN '".$nuevafecha."'  AND '".$fechaini."' ";
                                                        }
                                                        if ($vrdr=='todo') {
                                                            $consul_carte='select * from t01_carte';
                                                        }
                                                }
                                                $resulS_consul_cartel=mysql_query($consul_carte,$link);
                                                while($fila=mysql_fetch_array($resulS_consul_cartel))
                                                { 
                                                ?>
                                                <div class="col-md-6 col-sm-12 col-xs-12 boxx">
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
                                                <?php } mysql_close($link);
                                                }
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
    </div>
    <footer>
        <div class="col-md-12 col-xs-4">
            <p class="boxlogin">© 2015 Soy UNET</p>
            <p class="boxlogin">Website Seminario <a href="http://unet.edu.ve/" target="_blank" rel="nofollow">unet.edu.ve</a></p>
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
        $fecha=date("j/n/Y");

        mysql_query("INSERT INTO t01_carte 
            (titu_carte,
            conte_carte,
            autor_carte,
            fecha_carte)
                     VALUES ('".$titulo."','".$contenido."','".$autor."','".$fecha."')",$link);  
        $my_error = mysql_error($link);

        if(!empty($my_error)) 
        {
            echo "Ha habido un error al insertar los valores. $my_error";
        } 
        else 
        {
            echo "Los datos han sido introducidos satisfactoriamente";
        } 
         mysql_close($link);
    }
   

    ?> 
</html> 