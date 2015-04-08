<?php
    $link = mysql_connect('localhost', 'yrjsoyunet', '654321')
        or die('?>No se pudo conectar: ' . mysql_error());
        echo 'conecto';
        mysql_select_db('soyunet') or die('No se pudo seleccionar la base de datos');
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
                            <div class="container">
                                <div id="myCarousel" class="carousel "> 
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="item active ">                                     
                                                  <img src="images/slider-1-t.jpg" alt="Image" >
                                        </div>  
                                        <!--/item-->
                                        <div class="item">                                           
                                                <img src="images/slider-1-c.jpg" alt="Image" >                                                                                             
                                        </div>
                                        <!--/item-->
                                        <div class="item">                                            
                                                 <img src="images/slider-2-car.jpg" alt="Image" >
                                         </div>
                                        <!--/item-->
                                    </div>
                                    <!--/carousel-inner--> 
                                    <a class="carousel-control left" href="#myCarousel"  data-slide="prev">
                                                                  <span class="glyphicon glyphicon-chevron-left"></span></a>
                                    <a class="carousel-control right" href="#myCarousel"  data-slide="next">
                                                                  <span class="glyphicon glyphicon-chevron-right"></span></a>
                                </div>
                            </div><!--/containers-->
                        <!--Menu pincipal -->
                        <div class="col-md-12 col-sm-12 col-xs-4 ">
                            <div class="navbar-responsive navbar-inverse" role="navigation">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle " data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                        <span class="sr-only">Desplegar navegación</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                       <ul class"active">
                                            <a class="navbar-brand navbar-home active" href="#">
                                                <img  alt= "home" class="visible-xs" src="images/home.png" >
                                            </a>
                                            
                                    </ul>
                              </div>
                              <div class="collapse navbar-collapse navbar-ex1-collapse">
                                    <ul class="nav navbar-nav navbar-inverse">
                                        <li class="active">
                                            <a href="#"><p>Inicio</p></a>
                                        </li>
                                        <li >
                                            <a href="#"><p>Cartelera</p></a>
                                        </li>
                                        <li>
                                            <a href="#">Comedor</a>
                                        </li>
                                        <li >
                                            <a href="#">Transporte</a>
                                        </li>
                                        <li>
                                            <a href="#">Serv. Medico</a>
                                        </li>
                                    </ul>
                                    
                                    <ul class="nav navbar-nav navbar-right hidden-xs">
                                        <form class="navbar-form navbar-left hidden-xs" role="search">
                                            <div class="form-group ">
                                                <input type="text" class="form-control hidden-xs" placeholder="Buscar">
                                            </div>
                                            <button type="submit" class="btn btn-default hidden-xs">Enviar</button>
                                        </form>
                                    </ul>
                                </div>
                           </div>
                           <div class="col-md-12 ">
                                <div class="row-fluid">
                                <!--Bienvenido -->
                                    <div class="col-md-8 col-sm-7 col-xs-12">
                                        <h2 class="top-1 p3">Bienvenidos a Soy UNET</h2> 
                                        <p> 
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur voluptate soluta eveniet quo voluptatibus! Eaque reiciendis natus animi obcaecati hic, rerum voluptatibus dolores placeat reprehenderit ipsam similique cupiditate distinctio, laboriosam.
                                            Lorem ipsu Mdolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi 
                                        </p> 
                                        <br></br>   
                                    </div>
                                    <!--Inicio de sesión-->
                                    <div class="col-md-4 col-sm-5 col-xs-12" >
                                        <?php
                                            if (isset($_GET['error'])) {
                                                echo '<p class="error">Error Logging In!</p>';
                                            }
                                        ?>
                                        <h2 class="top-1 p3"  ALIGN="center">Inicio de Sesion</h2>
                                        <div class="jumbotron boxlogin">
                                            <form method="POST" name="flogin" id="flogin">
                                                <label >E-mail</label>
                                                <input type="text" name="usarname"  id="usarname" class="form-control"
                                                pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">
                                                <label >Contraseña</label>
                                                <input type="password" name="password" id="password"  class="form-control">
                                                <input type="submit" class="btn btn-default" value="Iniciar">                                                
                                            </form>
                                        </div>
                                    </div>
                                    <p> Si no tiene una cuenta, por favor<a href="register.php">regístrese.</a></p>
        <p> Si ha terminado, por favor<a href="includes/logout.php">cierre la sesión.</a></p>
        <p>Está conectado.<?php //echo $logged ?>.</p>
                                </div>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script> $('.carousel').carousel({  interval: 1000 }) </script>
    </body>
    <?php
        if ( isset ( $_POST [ 'usarname' ])  && isset ( $_POST [ 'password' ]))
        { 
            $login=mysql_real_escape_string($_POST['usarname']);
            $pass =$_POST['password']; 
        }
    ?>
    <?php
        $query = mysql_query("SELECT * FROM m01_usa WHERE email_usa LIKE '".$login."' and pas_usa='".$pass."' "); $pass=sha1(md5($pass));    
        if ($query===FALSE) 
        {
            die(mysql_error());
        } 
        while($row=mysql_fetch_assoc($query)) 
        {
            $_SESSION["cedula"]= $row["id_usa"]; 
            $_SESSION["Nombre_usa"]= $row["nom_usa"];
            $_SESSION["apellido_usa"]= $row["ape_usu"];
            $_SESSION["email"]= $row["email_usa"];
            echo $row['id_usa'];
            echo $row['nom_usa'];
            echo $row['ape_usu'];
            echo $row['email_usa'];
        }
    ?>
</html> 