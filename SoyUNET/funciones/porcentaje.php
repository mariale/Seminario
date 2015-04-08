<?php
	require_once('funciones/conectar.php');
    require_once('funciones/Error.php');
	function Porcentaje_Acep_cate($link)
	{
        $total="SELECT * from m06_categoria";
        $resulS_total=mysql_query($total,$link);
        $porcentaje=0;
        while($totalT=mysql_fetch_array($resulS_total))
        {
            $porcentaje=$porcentaje+$totalT[3];
        }
		return $porcentaje;
	}
?>