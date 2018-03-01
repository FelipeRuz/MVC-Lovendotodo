<?php
	include ("../include/header.php");
	include ("../db/db.php");
	include ("../controllers/personas_controller.php");
?>

<?php 
	include 'view-head-basic.php';
		
	echo '<body style="background-color:#647e98; color: #ffffff;">';
		session_start();
		
		$Controlador =new controlador(); 
		$Controlador->user_login($_POST["tb_log_user"],$_POST["tb_log_passw"]);
		
		$_SESSION["usuario"]=$_POST["tb_log_user"];
		$_SESSION["password"]=$_POST["tb_log_passw"];

	echo '</body>';		
?>

