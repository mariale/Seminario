<?php
	function cerrar()
	{
		session_unset();
        ?>
        <script type="text/javascript">
            window.location="index.php";
        </script> 
        <?php 
	}
?>