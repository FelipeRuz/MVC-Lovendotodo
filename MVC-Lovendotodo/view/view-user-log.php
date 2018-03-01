<?php
	include ("../include/header.php");
	include ("../db/db.php");
	include ("../controllers/personas_controller.php");
?>

<?php 	
	echo '<body style="background-color:#647e98; color: #ffffff;">';

	if (session_status() == PHP_SESSION_NONE) {
		session_start(['cookie_lifetime'=>3600]);

		$Controlador =new controlador(); 
		$Controlador->user_login($_POST["tb_log_user"],$_POST["tb_log_passw"]);
	}
	else
	{
		include "vista_user_nick.php";
	}

	echo '</body>';		
?>

