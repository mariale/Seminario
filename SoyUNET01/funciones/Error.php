<?php
	function Error1(){echo "<script type='text/javascript'>alert('AVISO: Error de sistema');</script>";}
	function Error2(){echo "<script type='text/javascript'>alert('AVISO: Usuario o contraseña invalida ');</script>";}
	function Error3(){echo "<script type='text/javascript'>alert('AVISO: Debe ingresar valor valido en los campos ');</script>";}
	function Error4($link)
	{
		$my_error = mysql_error($link);
        if ($my_error) 
        {
            echo "<script type='text/javascript'>alert('AVISO: Ocurrio un Error en la inserción');</script>";  
        }
        else
        {
        	echo "<script type='text/javascript'>alert('AVISO: Inserción exitosa');</script>"; 
        }
	}
	function Error5($link)
	{
		$my_error = mysql_error($link);
        if ($my_error) 
        {
            echo "<script type='text/javascript'>alert('AVISO: Ocurrio un Error en la eliminación');</script>";  
        }
        else
        {
        	echo "<script type='text/javascript'>alert('AVISO: Eliminacion exitosa');</script>"; 
        }
	}
    function Error6()
    { 
    ?>  <script>
            var a=confirm('NOTA: Recuerda que si decides eliminar esta categoría todas las publicaciones asociadas a ella serán eliminadas');
                if ( !a ) 
                    window.location="Categoria_adm_consultar.php";
        </script>
    <?php
    }
    function Error7(){echo "<script type='text/javascript'>alert('AVISO: El anuncio fue activado ');</script>";}

    
?>