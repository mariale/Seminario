<?php
require_once('funciones/Cerrar.php');
    require_once('funciones/Conectar.php');
    require_once('funciones/Error.php');
    require_once('funciones/Autentificacion.php');
    require_once('funciones/porcentaje.php');
    $NAUsuariio=autentificar('AdmCarte');
?>
<!DOCTYPE html lang="es" xml:lang="es">
    <head>    
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
        <title>Categoría-Consultar</title>
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
        <script>
        $('#openBtn').click(function()
        {
            $('#myModal').modal({show:true});
            $('#modal').modal('toggle');
            $('#bookId').val($(this).data('id'));
        });
        </script>
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
                             <img src="images/SC2.PNG" alt="Image">
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
                                    <li class="active">
                                        <a href="#"  class="dropdown-toggle " data-toggle="dropdown" role="button" aria-expanded="false">
                                            <p> Adm. de Cartelera 
                                                <span class="caret"></span>
                                            </p>
                                        </a>
                                        <ul class="nav  navbar-inverse dropdown-menu nav-left" role="menu">
                                            <li  role="presentation"><a href="cartelera_adm_agregar.php"><p>Agregar Anuncio</p></a></li>
                                            <li class="bloxx" role="presentation"><a href="cartelera_adm_consultar.php"><p>Consultar Anuncios</p></a></li>
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
                                            <li  role="presentation"><a href="Categoria_adm_consultar.php"><p>Consultar categorías</p></a></li>
                                        </ul>
                                    </li>
                                    <li class="divider"></li>
                                    <li  role="presentation"><a href="Noticias_adm.php"><p>Agregar Noticias</p></a></li>
                                    <li class="divider"></li>
                                    <li  role="presentation"><a href="Noticias_adm.php"><p>Ayuda</p></a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right nav-stacked">
                                    <li class="visible-lg"><a><?php echo "Bienvenido: "; ?><?php echo $NAUsuariio;?></a></li>
                                    <form class="navbar-form navbar-left " >
                                        <button name="deo1"type="submit" class="btn btn-default">Desconectar</button><p> </p> 
                                    </form>
                                </ul> 
                            </div>
                        </div>
                    </div>
                    <?php 
                    if (isset($_POST['deo1'])) 
                    {
                        cerrar();
                    }
                    ?>
                    <div class="row-fluid"><br></br>
                        <h2  class="hidden-xs" align="center">CONSULTA DE ANUNCIOS</h2>
                        <h3  class="visible-xs" align="center">CONSULTA DE ANUNCIOS</h3> 
                        <div class="col-md-12 col-sm-12 col-xs-12"> 
                            <br></br>
                            <div class="jumbotron boxx">
                                <div class="table-responsive">
                                    <table class="table  table-responsive  ">
                                    <?php 
                                        $link=conectar();
                                        //SELECT * FROM tabla1, tabla2 WHERE tabla1.id_tabla2=tabla2.id
                                        $S="SELECT * FROM  t01_carte, m06_categoria
                                            WHERE t01_carte.fk_carte_cate=m06_categoria.id and t01_carte.estado='Activo'
                                            ORDER by m06_categoria.Nivel_cate ASC";
                                        
                                        
                                        $resulS_S=mysql_query($S,$link);
                                    ?>
                                        <thead>
                                            <?php $cate="dispo"; 
                                            while($filap=mysql_fetch_array($resulS_S))
                                            {
                                                if ($filap['categoria']!=$cate or $cate=='dispo') 
                                                {   $i=1;
                                                    $cate=$filap['categoria'];
                                                ?>
                                                    <tr >
                                                        <th></th>
                                                        <th> <?php echo strtoupper($filap['categoria']); ?></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>

                                                    <tr class="bloxx">
                                                        <th>#</th>
                                                        <th>Autor</th>
                                                        <th>Titulo</th>
                                                        <th>Contenido</th>
                                                        <th>Estado</th>
                                                        <th>Detalle</th>
                                                        <th>Editar</th>
                                                        <th>Eliminar</th>
                                                    </tr>
                                                    
                                                <?php  
                                                }?>
                                                <tr class="active">
                                           
                                            <td align="center"><?php echo $i; ; ?></td>
                                            <td ><?php echo $filap['autor_carte'];?></td>
                                            <td ><?php echo $filap['titu_carte'];?></td>
                                            <td><?php echo $filap['conte_carte'];?></td>
                                            <td align="center"><?php echo $filap['estado'];?></td>
                                            <td type="submit" align="center"><a href="Cartelera_adm_detalle.php?xtpaz=<?php echo base64_encode($filap['id_carte']);?>" class="btn glyphicon glyphicon-list-alt"></a></td>
                                            <td type="submit" align="center"><a href="Cartelera_adm_modificar.php?xtpa=<?php echo base64_encode($filap['id_carte']);?>" class="btn glyphicon glyphicon-folder-close"></a></td>
                                            <td type="submit" align="center"><a href="Cartelera_adm_eliminar.php?xtpa=<?php echo base64_encode($filap['id_carte']);?>"  class="btn  glyphicon glyphicon-remove"></a></td>   
                                         </tr>    
                                        <?php $i++;} ?>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <?php mysql_close($link); ?>
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
</html> 