

<?php
            if ( isset ( $_POST [ 'Bpla' ]))
            {                 
                if(count($_FILES) > 0) 
                {
                    if(is_uploaded_file($_FILES['imapla']['tmp_name'])) 
                    {
                        $link = mysql_connect('localhost', 'soycartelera', '654321')
                        or die('No se pudo conectar: ' . mysql_error());
                        mysql_select_db('soyunet') or die('No se pudo seleccionar la base de datos');
                        mysql_query("SET NAMES 'utf8'");
                        $N_pla=mysql_real_escape_string($_POST['nom_pla']);
                        $Des_pla=mysql_real_escape_string($_POST['desp_pla']);

                        $imgData =addslashes(file_get_contents($_FILES['imapla']['tmp_name']));
                        $imageProperties = getimageSize($_FILES['imapla']['tmp_name']);
                        $sql=mysql_query("INSERT INTO m03_plato
                        (nom_pla,
                        desp_pla,
                        output_images(tipo_ima ,img_pla))
                                 VALUES ('".$N_pla."','".$Des_pla."','{$imageProperties['mime']}', '{$imgData}')",$link); 
                        
                        $current_id = mysql_query($sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysql_error());
                        if(isset($current_id)) 
                        {
                            echo "<script type='text/javascript'>alert('AVISO: Ocurrio un Error en la inserción');</script>";  
                        }
                    }
                }
                mysql_close($link);
            }
        ?> 








 $tamanio = $_FILES["archivito"]["size"];
 $tipo    = $_FILES["archivito"]["type"];
    
 $titulo  = $_POST["titulo"];

 if ( $archivo != "none" )
 {
    $fp = fopen($archivo, "rb");
    $contenido = fread($fp, $tamanio);
    $contenido = addslashes($contenido);
    fclose($fp); 

    $qry = "INSERT INTO archivos VALUES 
            (0,'$nombre','$titulo','$contenido','$tipo')";

    mysql_query($qry);

    if(mysql_affected_rows($conn) > 0)
       print "Se ha guardado el archivo en la base de datos.";
    else
       print "NO se ha podido guardar el archivo en la base de datos.";
 }
 else
    print "No se ha podido subir el archivo al servidor";

?>