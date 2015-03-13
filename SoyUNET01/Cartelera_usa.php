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
        <script>
            $(document).ready(function() {
                $('#myCarousel').carousel({
                    interval: 2000
                })
                $('#myCarousel').on('slid.bs.carousel', function() {
               //   alert("slid");
                });   
            });
        </script>
    </head>
    <body>    
        <div class="main">
            <div class="container">
                <div class="row-fluid">
                    <div class="well-none">
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
                        <div class"col-md-12 col-xs-4">
                            <div class="well-none">
                                <div id="myCarousel" class="carousel slide"> 
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="row">
                                                 <div class="col-sm-12 hidden-xs">
                                                    <a href="#x col-xs-6" class="thumbnail">
                                                        <img src="images/slider-1-car.jpg" alt="Image" class="img-responsive six-din-img"></a>
                                                </div>
                                            </div>
                                            <!--/row-->
                                        </div>
                                        <!--/item-->
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-sm-12 hidden-xs">
                                                    <a href="#x col-xs-6" class="thumbnail">
                                                        <img src="images/slider-1-c.jpg" alt="Image" class="img-responsive"></a>
                                                </div>  
                                            </div>
                                            <!--/row-->
                                        </div>
                                        <!--/item-->
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-sm-12 hidden-xs">
                                                    <a href="#x" class="thumbnail">
                                                        <img src="images/slider-2-car.jpg" alt="Image" class="img-responsive"></a>
                                                </div>
                                            </div>
                                            <!--/row-->
                                        </div>
                                        <!--/item-->
                                    </div>
                                    <!--/carousel-inner--> 
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="fa fa-chevron-left fa-4"></i></a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="fa fa-chevron-right fa-4"></i></a>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-4 ">
                           <!--div class="col-md-12 "-->
                                <div class="row-fluid"> 
                                <!--Bienvenido -->
                                    <div class="col-md-6 col-sm-12 col-xs-12" >
                                        <?php
                                            if (isset($_GET['error'])) {
                                                echo '<p class="error">Error Logging In!</p>';
                                            }
                                        ?>
                                        <h2 class="top-1 p3"  ALIGN="center"></h2>
                                        <div class="jumbotron boxlogin">
                                            <form method="POST" name="Texto" id="Texto">
                                                <label >(*)Autor:</label>
                                                <input type="text" name="autor"  id="auto" class="form-control" align="rigth">
                                                <label >(*)Titulo:</label>
                                                <input type="text" name="titulo"  id="titu" class="form-control">
                                                <label >(*)Contenido:</label>
                                                <textarea name="contenido" maxlenght="450" id="conte"  class="form-control" cols="45" rows="9"></textarea>
                                                <input type="submit" class="btn btn-default" value="Publicar">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                <div class="row-fluid"> 
                                <!--Bienvenido -->
                                    <div class="col-md-6 col-sm-12 col-xs-12" >
                                        
                                    </div>
                                </div>
                                <br></br>
                                <br></br>
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
            echo 'conecto';
            mysql_select_db('soyunet') or die('No se pudo seleccionar la base de datos');

            $autor=mysql_real_escape_string($_POST['autor']);
            $titulo=mysql_real_escape_string($_POST['titulo']); 
            $contenido=mysql_real_escape_string($_POST['contenido']);
            $fecha=date("j,n,Y");

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
               
        }
    ?>
</html> 