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

<div class="col-md-4 col-sm-12 col-xs-12"><br></br>
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
                                }?>                        </div>
                        </div>  
                    </div>
                </div>