<?php
    require_once('funciones/Conectar.php');
    require_once('funciones/Error.php');
   // require_once('funciones/Autentificacion.php');
    require_once('funciones/Cerrar.php');
    $NAUsuariio=autentificar('AdmCarte');
    if (!isset($_GET['xtpaz'])) 
    {
         ?>
        <script type="text/javascript">
            window.location="Cartelera_adm.php";
        </script> 
        <?php 
    }
    else
    {
        $valor=base64_decode($_GET['xtpaz']);
        $link1=conectar();
        mysql_query("UPDATE t01_carte set estado='Activo' WHERE id_carte='$valor'"); 
        mysql_close($link1);
         error7();
        ?>
        <script type="text/javascript">
            window.location="Cartelera_adm.php";
        </script> 
        <?php
       
    } 
    
        
                
?>