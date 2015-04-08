<?php
	require_once('funciones/conectar.php');
    require_once('funciones/Error.php');
	function autentificar($tipo)
	{
		session_start();
        if (isset($_SESSION['login'])){$lon=$_SESSION['login'];}else{$lon='';}
        if (isset($_SESSION['nom'])){$nomm=$_SESSION['nom'];}else{$nomm='';}
        if (isset($_SESSION['ape'])){$apee=$_SESSION['ape'];}else{$apee='';}
        if (isset($_SESSION['band'])){$baft=$_SESSION['band'];}else{$baft='false';}
        if ($baft=="false") 
        {
            session_unset();
            session_destroy(); 
            ?>
            <script type="text/javascript">
                window.location="index.php";
            </script> 
            <?php 
        }
        else
        {
            $link = conectar();
            $querys = mysql_query("SELECT * FROM m04_usu WHERE email_usu LIKE '".$lon."' "); 
            $rows=mysql_fetch_assoc($querys); 
            $my_error = mysql_error($link);
            if ($my_error) 
            {
                session_unset();
                session_destroy();
                ?>
                <script type="text/javascript">
                    window.location="index.php";
                </script> 
                <?php 
            }
            else
            {
                if($rows['email_usu']==$lon)
                {
                    $sqls=mysql_query("SELECT * FROM m05_tip_usu WHERE id_TU = '".$rows['id_fk_usu_tip']."'  ");
                    $my_error = mysql_error($link);
                    if ($my_error) 
                    {
                        session_unset();
                        session_destroy();
                        ?>
                        <script type="text/javascript">
                            window.location="index.php";
                        </script> 
                        <?php      
                    }
                    else
                    {
                        $ro2=mysql_fetch_assoc($sqls);
                        if($ro2['TU']!=$tipo)
                        {
                            session_unset();
                            session_destroy();
                            ?>
                            <script type="text/javascript">
                                window.location="index.php";
                            </script> 
                            <?php 
                        }
                    }
                }
                else
                {
                    session_unset();
                    session_destroy();
                    ?>
                    <script type="text/javascript">
                        window.location="index.php";
                    </script> 
                    <?php    
                }
            }
             mysql_close($link);  
        } 
        return $nomm." ".$apee;
	}

?>