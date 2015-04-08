<?php
	function conectar()
	{
		$link = mysql_connect('localhost', 'root')
	    or die('No se pudo conectar: ' . mysql_error());
		mysql_select_db('soyunet') or die('No se pudo seleccionar la base de datos');
		mysql_query("SET NAMES 'utf8'");
		return $link;
	}
	function cambiarFormatoFecha($fecha)
	{ 
    	list($anio,$mes,$dia)=explode("-",$fecha); 
    	return $dia."-".$mes."-".$anio; 
	}
?>