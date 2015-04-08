<?php
	require_once('funciones/conectar.php');
    require_once('funciones/Error.php');
	function iniciar($login, $pass, $link)
	{
		$query = mysql_query("SELECT * FROM m04_usu WHERE email_usu LIKE '".$login."' and contra_usu='".$pass."' "); 
        $row=mysql_fetch_assoc($query);  
        $my_error = mysql_error($link);
        if ($my_error) 
        {
           Error1();
        } 
        else
        {
            if($row['email_usu']==$login and $row['contra_usu']==$pass )
            {
                session_start();
                $_SESSION['login']=$login;
                $_SESSION['nom']=$row['nom_usu'];
                $_SESSION['ape']=$row['ape_usu'];

                $qm05=mysql_query("SELECT * FROM m05_tip_usu WHERE id_TU = '".$row['id_fk_usu_tip']."'  ");
                $my_error = mysql_error($link);
                if ($my_error) 
                {
                   Error1(); 
                }
                else
                {
                    $ro2=mysql_fetch_assoc($qm05);
                    $_SESSION['band']="true";
                    if($ro2['TU']=='AdmUsa')
                    {
                        ?><script type="text/javascript">
                         window.location="";
                        </script> 
                        <?php 
                    }
                    if($ro2['TU']=='Adm_SM')
                    {
                       ?><script type="text/javascript">
                         window.location="Smedico_adm.php";
                        </script> 
                        <?php
                    }
                    if($ro2['TU']=='AdmCarte')
                    {
                        ?><script type="text/javascript">
                         window.location="Cartelera_adm.php";
                        </script> 
                        <?php
                    }
                    if($ro2['TU']=='AdmComer')
                    {
                        ?><script type="text/javascript">
                         window.location="Comedor_adm.php";
                        </script> 
                        <?php 
                    }
                    if($ro2['TU']=='AdmTra')
                    {
                    	?><script type="text/javascript">
                         window.location="";
                        </script> 
                        <?php 
                    }
                }
            }
            else
            {
                Error2();
            }
        }    
	}
?>