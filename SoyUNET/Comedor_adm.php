<?php
    require_once('funciones/conectar.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
    <head >
        <title>Administrador de Comedor</title>
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
                        <figure>
                            <a href="index.php" ><img  src="images/Logo.png" class="img-responsive col-xs-responsive" alt="Image"></a>
                        </figure>
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
                                    <li class="active"><a href="Comedor_abm.php"><p>Administración de Servicio Comedor</p></a></li>
                                    <li ><a href="Comedor_abm_plato.php"><p>Administración de Plato</p></a></li>
                                    <li><a href="Noticias_abm.php"><p>Administración de Noticias</p></a></li>
                                    <li><a href="#"><p>Ayuda</p></a></li>
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
                                <h2 class="hidden-xs" align="center">Administrar Servicio de Comedor</h2>
                                <h3 class="visible-xs" align="center">Administrar Servicio de Comedor</h3> 
                                <div class="col-md-6 col-sm-12 col-xs-12"> 
                                    <br></br>
                                    <div class="jumbotron boxx">
                                        <form method="POST" name="Textos" id="Textos">
                                            <h3>Agregar Servicio</h3> <p></p>
                                            <input type="text" name="serv"  required id="serv" class="form-control campo" align="rigth"  placeholder=" Servicio ">
                                            <p></p>
                                            <textarea name="dserv"required  maxlenght="255" id="dserv"  class="form-control campo" cols="25" rows="5" placeholder=" Descripcion de Servicio"></textarea><br>
                                             <input type="file" name="fil"  required id="fil" class="btn btn-default form-control campo" >
                                            <input type="submit" class="btn btn-default form-control campo" name="aserv" value="Agregar Servicio">
                                        </form>
                                    </div>
                                    <br>
                                </div>
                                <div class="col-md-8 col-sm-16 col-xs-12"> 
                                    <br></br>
                                    <div class="jumbotron boxx">
                                        <form method="POST" name="Textoe" id="Textoe" >
                                            <h3>Agregar Especialista</h3> <p></p>
                                            <select name="cars" class="form-control campo" placeholder="Servicio o Especialidad Medica ">
                                                <option value="0">Servicio o Especialidad Medica</option>
                                                <?php
                                                $link = mysql_connect('localhost', 'soycartelera', '654321')
                                                or die('No se pudo conectar: ' . mysql_error());
                                                mysql_select_db('soyunet') or die('No se pudo seleccionar la base de datos');
                                                $consul_carte="SELECT * from m02_espe";
                                                $resulS_consul_cartel=mysql_query($consul_carte,$link);
                                                while($fila=mysql_fetch_array($resulS_consul_cartel))
                                                { 
                                                ?>
                                                  <option  value=<?php echo $fila[0]; ?> ><?php echo $fila[1]; ?> </option>                                                    
                                                <?php 
                                                } 
                                                mysql_close($link);
                                                ?>
                                            </select>
                                            <p></p>
                                            <input type="text" name="nomdrr"  required title="INGRESANDO EL NOMBRE DEL ESPECIALISTA" id="nomdr" class="form-control campo" align="rigth"  placeholder=" * Nombre del Especialista ">
                                            <p></p>
                                            <input type="text" name="cidr" required title="INGRESANDO LA CEDULA DE IDENTIDAD DEL ESPECIALISTA" id="cia" class="form-control campo" align="rigth"  placeholder=" * Cedula de Identidad ">
                                            <p></p>
                                            <input type="number" name="teldr"  required title="INGRESANDO EL TELEFONO LOCAL DE OFICINA" id="teldr" class="form-control campo" align="rigth" placeholder="  * Telefono Local de Oficina">
                                            <p></p>
                                            <input type="text" name="centro" required title="INGRESANDO EL NOMBRE DEL CENTRO ASISTENCIAL" id="centro" class="form-control campo" align="rigth" placeholder=" * Cenro Asistencial">
                                            <p></p>
                                            <textarea   name="direc" maxlenght="255" id="direc" class="form-control campo" cols="25"  rows="5"  placeholder="* Direccion del centro Asistencial: AV/Calle/Urba/Sector/Edificio/Piso/Consulorio" required  title="Ingresando La dirección del centro asistencial AV/Calle/Urba/Sector/Edificio/Piso/Consulorio"></textarea>
                                            <p></p>
                                            <select name="ncita" class="form-control campo"  >
                                                <option value="0">* N° de Citas Asignadas</option>
                                                <option value="1">1 Cita</option>
                                                <option value="2">2 Cita</option>
                                                <option value="3">3 Cita</option>
                                                <option value="4">4 Cita</option>
                                                <option value="5">5 Cita</option>
                                                <option value="6">6 Cita</option>
                                                <option value="7">7 Cita</option>
                                                <option value="8">8 Cita</option>
                                                <option value="9">9 Cita</option>
                                                <option value="10">10 Cita</option>
                                            </select>
                                            <p></p>
                                            <select name="tllegada" class="form-control campo" >
                                                <option value="0">* Modalidad de Apartado de Cita</option>
                                                <option value="Previa Cita">Previa Cita</option>
                                                <option value="Orden de Llegada">Orden de Llegada</option>
                                                <option value="Previa Cita - Orden de Llegada">Previa Cita - Orden de Llegada</option>
                                                <option value="Anotarce en la Mañana">Anotarce en la Mañana</option>
                                                <option value="Llamar con Anticipación">Llamar con Anticipación</option>
                                            </select>
                                            <p></p>
                                            <div class="row-fluid ">
                                                <div class="col-md-6 col-sm-5 col-xs-12"> 
                                                    <h3  align="center">Disas Diasponibles de Consulta</h3> <br>
                                                    <div  class = "btn-grupo form-group boxlogin" >   
                                                        <input type="checkbox" name="Lunes" value="Lunes" class="alp" > Lunes <br> 
                                                        <input type="checkbox" name="Martes" value="Martes" class="alp" > Martes <br> 
                                                        <input type="checkbox" name="Miercoles" value="Miercoles" class="alp" > Miercoles <br> 
                                                        <input type="checkbox" name="Jueves" value="Jueves" class="alp" > Jueves  <br>
                                                        <input type="checkbox" name="Viernes" value="Viernes" class="alp" > Viernes <br> 
                                                        <input type="checkbox" name="Sabado" value="Sabado" class="alp" > Sabado  <br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row-fluid ">
                                                <div class="col-md-6 col-sm-7 col-xs-12"> 
                                                    <br>
                                                    <h3  align="center">Horario de Atencion</h3> <br>
                                                    <select name="hi" class="form-control campo" >
                                                        <option value="0">* Hora Inicial</option>
                                                        <option value="7:00 am">7:00 am</option>
                                                        <option value="7:30 am">7:30 am</option>
                                                        <option value="8:00 am">8:00 am</option>
                                                        <option value="8:30 am">8:30 am</option>
                                                        <option value="9:00 am">9:00 am</option>
                                                        <option value="9:30 am<">9:30 am</option>
                                                        <option value="10:00 am">10:00 am</option>
                                                        <option value="10:30 am">10:30 am</option>
                                                        <option value="11:00 am">11:00 am</option>
                                                        <option value="11:30 am">11:30 am</option>
                                                        <option value="12:00 am">12:00 am</option>
                                                        <option value="12:30 am">12:30 am</option>
                                                        <option value="1:00 pm">1:00 pm</option>
                                                        <option value="1:30 pm">1:30 pm</option>
                                                        <option value="2:00 pm">2:00 pm</option>
                                                        <option value="2:30 pm">2:30 pm</option>
                                                        <option value="3:00 pm">3:00 pm</option>
                                                        <option value="3:30 pm">3:30 pm</option>
                                                        <option value="4:00 pm">4:00 pm</option>
                                                        <option value="4:30 pm">4:30 pm</option>
                                                        <option value="5:00 pm">5:00 pm</option>
                                                        <option value="5:30 pm">5:30 pm</option>
                                                        <option value="6:00 pm">6:00 pm</option>
                                                        <option value="6:30 pm">6:30 pm</option>
                                                        <option value="7:00 pm">7:00 pm</option>
                                                        <option value="7:30 pm">7:30 pm</option>
                                                        <option value="8:00 pm">8:00 pm</option>
                                                        <option value="8:30 pm">8:30 pm</option>
                                                        <option value="9:00 pm">9:00 pm</option>
                                                    </select>
                                                    <br><h3  align="center">Hasta</h3><br>
                                                    <select name="hf" class="form-control campo" >
                                                        <option value="0"> Hora Final</option>
                                                        <option value="7:00 am">7:00 am</option>
                                                        <option value="7:30 am">7:30 am</option>
                                                        <option value="8:00 am">8:00 am</option>
                                                        <option value="8:30 am">8:30 am</option>
                                                        <option value="9:00 am">9:00 am</option>
                                                        <option value="9:30 am<">9:30 am</option>
                                                        <option value="10:00 am">10:00 am</option>
                                                        <option value="10:30 am">10:30 am</option>
                                                        <option value="11:00 am">11:00 am</option>
                                                        <option value="11:30 am">11:30 am</option>
                                                        <option value="12:00 am">12:00 am</option>
                                                        <option value="12:30 am">12:30 am</option>
                                                        <option value="1:00 pm">1:00 pm</option>
                                                        <option value="1:30 pm">1:30 pm</option>
                                                        <option value="2:00 pm">2:00 pm</option>
                                                        <option value="2:30 pm">2:30 pm</option>
                                                        <option value="3:00 pm">3:00 pm</option>
                                                        <option value="3:30 pm">3:30 pm</option>
                                                        <option value="4:00 pm">4:00 pm</option>
                                                        <option value="4:30 pm">4:30 pm</option>
                                                        <option value="5:00 pm">5:00 pm</option>
                                                        <option value="5:30 pm">5:30 pm</option>
                                                        <option value="6:00 pm">6:00 pm</option>
                                                        <option value="6:30 pm">6:30 pm</option>
                                                        <option value="7:00 pm">7:00 pm</option>
                                                        <option value="7:30 pm">7:30 pm</option>
                                                        <option value="8:00 pm">8:00 pm</option>
                                                        <option value="8:30 pm">8:30 pm</option>
                                                        <option value="9:00 pm">9:00 pm</option>
                                                    </select>
                                                    <br>
                                                   <br>
                                                </div>
                                            </div>
                                            <br>
                                            <input type="submit" class="btn btn-default form-control campo" name="BAE" value="Agregar Especialista">
                                        </form>
                                    </div><br>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="list-group boxx ">
                                    <?php 
                                        if (isset($_POST['consultar']))
                                        {
                                            $link = conectar('localhost', 'soycartelera', '654321'); 
                                            $nombrecomsulta=$_POST['nomcon'];
                                            $cedulacom=$_POST['cicon'];
                                            if (!$nombrecomsulta and !$cedulacom and $_POST['cars']=='0') 
                                            {
                                                //echo "<script type='text/javascript'>alert('AVISO: Debe Seleccionar uno de los Datos');</script>";
                                                $consul_med="SELECT * from t02_med  ORDER BY id_fk_med_espe DESC"; 
                                            }
                                            else
                                            {
                                                $nombrecomsulta=mysql_real_escape_string($_POST['nomcon']);
                                            }
                                            ?> 
                                            <h2  aling="center" class="hidden-xs ctop-1 " align="center">Especialistas Disponibles</h2>
                                            <h3  aling="center"  class="visible-xs ctop-1" align="center">Especialistas Disponibles</h3> 
                                            <br>
                                            <?php
                                            $result=mysql_query($consul_med) or die (mysql_error()); 
                                            if (mysql_num_rows($result)==0)
                                            {
                                                ?>
                                                <h2  aling="center" class="hidden-xs ctop-1 " align="center">AVISO: No existe Registro</h2>
                                                <h3  aling="center"  class="visible-xs ctop-1" align="center">AVISO: No existe Registro</h3> <p></p>
                                                <?php
                                            }
                                            $resulS_consul_med=mysql_query($consul_med,$link);
                                            while($fila_med=mysql_fetch_array($resulS_consul_med))
                                            { 
                                                $consul_espe="SELECT * from m02_espe WHERE id_espe='".$fila_med[10]."' ";
                                                $resulS_consul_espe=mysql_query($consul_espe,$link);
                                                $fila_espe=mysql_fetch_array($resulS_consul_espe);
                                            ?>
                                                <div class="col-md-6 col-sm-12 col-xs-12 boxx">
                                                    <div class="panel panel-default ">
                                                        <div class="panel-heading ">
                                                            <p class="alp1">
                                                                <?php echo $fila_espe[1];?> 
                                                            </p>
                                                        </div>
                                                        <div class="panel-body">
                                                            <p class="alpx">
                                                                <?php echo $fila_med[1]; ?> (<?php echo $fila_med[0]; ?>)<br><br>
                                                            </p>
                                                            <p align="center">
                                                                <?php echo $fila_med[4]; ?><br><br>
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
                                                </div>
                                            <?php 
                                            }
                                        }
                                    ?>
                                    </div>
                                </div> 
                            </div>                           
                        </div>
                    </div>   
                </div> 
            </div><br><br>
        </div>
        <br>       
        <?php
            if ( isset ( $_POST [ 'serv' ])  && isset ( $_POST [ 'dserv' ]))
            { 
                $link = mysql_connect('localhost', 'soycartelera', '654321')
                or die('No se pudo conectar: ' . mysql_error());
                mysql_select_db('soyunet') or die('No se pudo seleccionar la base de datos');
                $serv=mysql_real_escape_string($_POST['serv']);
                $dserv=mysql_real_escape_string($_POST['dserv']); ;
                mysql_query("INSERT INTO m02_espe
                    (nom_espe,
                    desp_espe)
                             VALUES ('".$serv."','".$dserv."')",$link);  
                $my_error = mysql_error($link);
                if ($my_error) 
                {
                    echo "<script type='text/javascript'>alert('AVISO: Ocurrio un Error en la inserción');</script>";  
                } 
                mysql_close($link);
            }
        ?> 
        <?php
        if (isset($_POST['BAE'])) 
        {
            $link = mysql_connect('localhost', 'soycartelera', '654321')
            or die('No se pudo conectar: ' . mysql_error());
            mysql_select_db('soyunet') or die('No se pudo seleccionar la base de datos');
            $serv=$_POST['cars'];
            $hinicial=$_POST['hi'];
            $hfinal=$_POST['hf'];
            $ncita=$_POST['ncita'];
            $apartadcita=mysql_real_escape_string($_POST['tllegada']);
            $nombredr=mysql_real_escape_string($_POST['nomdrr']);
            $consuldr=mysql_real_escape_string($_POST['centro']);
            $direccdr=mysql_real_escape_string($_POST['direc']);
            $cidr=mysql_real_escape_string($_POST['cidr']);
            $telfdr=$_POST['teldr'];
            $diax='';
            if (isset($_POST['Lunes'])) 
            {
                $lunesc=mysql_real_escape_string($_POST['Lunes']);
                $diax=$lunesc;
            }
            if (isset($_POST['Martes'])) {
                $martesc=mysql_real_escape_string($_POST['Martes']);
                $diax=$diax." / ".$martesc;
            }
            if (isset($_POST['Miercoles'])) 
            {
                $miercolesc=mysql_real_escape_string($_POST['Miercoles']);
                $diax=$diax." / ".$miercolesc;
            }
            if (isset($_POST['Jueves']))
            {
                $juevesc=mysql_real_escape_string($_POST['Jueves']);
                $diax=$diax." / ".$juevesc;
            }
            if (isset($_POST['Viernes'])) 
            {
                $viernesc=mysql_real_escape_string($_POST['Viernes']);
                $diax=$diax." / ".$viernesc;
            }
            if (isset($_POST['Sabado'])) 
            {
                $sabadoc=mysql_real_escape_string($_POST['Sabado']);
                $diax=$diax." / ".$sabadoc;
            }
            //echo "<script type='text/javascript'>alert('".$diax."');</script>"; 
            if ($serv=='0' or $ncita=='0' or $apartadcita=='0' or $hinicial=='0'or $diax=='')
            {
                echo "<script type='text/javascript'>alert('AVISO: Debe de completar todos los datos');</script>"; 
            } 
            else
            {
                $diax=mysql_real_escape_string($diax);
                $httx=$hinicial." ".$hfinal;
                $apartadcita=mysql_real_escape_string($_POST['tllegada']);
                $desp_med='';
                $desp_med=mysql_real_escape_string($desp_med);
                //echo "<script type='text/javascript'>alert('".$cidr.''.$nombredr.''.$ncita.''.$telfdr.''.$consuldr.''.$direccdr.''.$diax.''.$httx.''.$apartadcita.''.$serv."');</script>"; 
                mysql_query("INSERT INTO t02_med
                                (id_ci_med,
                                 nom_med,
                                 num_cita_med,
                                 telef_med,
                                 consul_med,
                                 direc_med,
                                 dia_med,
                                 hora_med,
                                 orden_cita_med,
                                 desp_med,
                                 id_fk_med_espe)
                                 VALUES ('".$cidr."',
                                     '".$nombredr."',
                                     '".$ncita."',
                                     '".$telfdr."',
                                     '".$consuldr."',
                                     '".$direccdr."',
                                     '".$diax."',
                                     '".$httx."',
                                     '".$apartadcita."',
                                     '".$desp_med. "',
                                     '".$serv."')",$link);  
                $my_error = mysql_error($link);
                if ($my_error) 
                {
                    echo "<script type='text/javascript'>alert('AVISO: Ocurrio un Error en la inserción');</script>";  
                } 
            }
            mysql_close($link); 
        }   
        ?>
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
    </body>
</html> 