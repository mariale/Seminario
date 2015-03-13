<?php
	function conectar()
	{
		$link = mysql_connect('localhost', 'yrjsoyunet', '654321')
	    or die('?>No se pudo conectar: ' . mysql_error());
		echo 'conecto';
		mysql_select_db('soyunet') or die('No se pudo seleccionar la base de datos');
	}
	function isesion($Login, $pass)
	{
		if ($stmt = $mysqli->prepare("SELECT id_usa, nom_usa, pas_usa, salt FROM m01_usa WHERE email_usa = ?LIMIT 1"))		
		{
			return 'exito'; 
		}else
		{
			return 'fracaso';
		}
	}
?>