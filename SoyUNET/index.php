<?php
    require_once('funciones/conectar.php');
    require_once('funciones/Error.php');
    require_once('funciones/Iniciar.php');
    session_unset();
    session_start();
?>
<!DOCTYPE html>
<html>
    <head lang="es">
        <title>Soy UNET</title>
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
                    <div class="item active ">                                     
                        <img src="images/si1.png" alt="Image" >
                    </div>  
                    <div class="item">                                           
                        <img src="images/si2.png" alt="Image" >                                                                                             
                     </div>
                    <div class="item">                                            
                        <img src="images/si3.png" alt="Image" >
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
                                <ul class="nav navbar-nav navbar-inverse  ">
                                    <li class="active"><a href="index.php"><p>Inicio</p></a></li>
                                    <li><a href="#">Noticias</a></li>
                                    <li><a href="Cartelera.php"><p>Cartelera</p></a></li>
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
                        <div class="col-md-12 p111 ">
                            <div class="row-fluid">
                                <div class="col-md-8 col-sm-7 col-xs-12 p111">
                                    <h2 class="top-1 p111" align"center">Bienvenidos a Soy UNET</h2> 

                                        Soy UNET  tiene como finalidad una aplicación de fácil manejo 
                                        que pueda ayudar a informar a la comunidad  UNETENSE, sobre el día a día 
                                        en la universidad manteniendo a los usuarios informado sobre: noticias,  
                                        servicios tales como transporte, comedor, pagos de becas, servicio médico.
                                        Debido a las tendencias  tecnológicas y el uso constante de teléfonos inteligentes 
                                        que permiten el uso de aplicaciones de gran alcance, se plante la creación de
                                         esta aplicación con el fin de informar, ayudar, solventar situaciones que 
                                        se presentan en la universidad por la falta de información.

                                        Este proyecto permitirá que los usuarios posean la aplicación en su teléfono inteligente puedan ver 
                                        el menú del comedor y su horario de atención, el servicio de transporte, las  rutas disponibles 
                                        y su horario, se describirán las paradas obligatorias, el trazado de ruta, alertas si las unidades 
                                        no pueda cumplir con su ruta asignada. Se podrá disponer de información sobre los servicios médicos y
                                        odontológicos su horario de atención, las citas médicas disponibles (Especialistas). Además contara con un espacio 
                                        para las agrupaciones estudiantiles asociaciones grupo de carrera, con información y noticias acerca de ellas.
                                    
                                    <br></br>  
                                </div>
                                <div class="col-md-4 col-sm-5 col-xs-12" >
                                    <h2 class="top-1 p3"  ALIGN="center">Inicio de Sesión</h2>
                                    <div class="jumbotron boxlogin">
                                        <form method="POST" name="flogin" id="flogin">
                                            <label >E-mail</label>
                                            <input type="text" name="usarname" value="foskert@gmail.com" id="usarname" class="form-control" onclick="valida_envia()"
                                            pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required >
                                            <label >Contraseña</label>
                                            <input type="password" name="password" id="password" value="123456789" class="form-control" required>
                                            <input type="submit" class="btn btn-default" value="Iniciar" name="xp">
                                        </form>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                    </div>         
                </div>
            </div><br>
        </div> 
        <p></p><br>
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
<?php
    if(isset($_POST['xp']))
    {
        $linkx = conectar(); 
        $loginx=mysql_real_escape_string($_POST['usarname']);
        $passx =$_POST['password']; 
        iniciar($loginx, $passx, $linkx);  
        mysql_close($linkx);
    }     
?>
</html> 
