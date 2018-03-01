<!DOCTYPE html>
<html>
	<head>
		<title>Práctica 2017-2018</title>
<?php
	include '../../includes/header.php';
	include ("../../db/db.php");
	include ("../../controllers/personas_controller.php");

	session_start();
?>
	</head>
	<BODY style="background-color:#546e7a;">
	<?php
			try{
				$controlador =new controlador(); 
				$controlador->user_login($_POST["tb_log_user"],$_POST["tb_log_passw"]);

			}catch(Exception $e){
				die("Error: ". $e->getMessage());
				require_once 'body-user.php' ;
			}
	?>
	</BODY>
</html>

		    		

				    	

						