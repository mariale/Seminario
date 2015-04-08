<?php
	function conectar($host, $user, $clav)
	{
		$link = mysql_connect('localhost', 'yrjsoyunet', '654321')
	    or die('No se pudo conectar: ' . mysql_error());
		mysql_select_db('soyunet') or die('No se pudo seleccionar la base de datos');
		return $link;
	}
?>