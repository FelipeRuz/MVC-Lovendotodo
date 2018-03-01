<?php
	// Activamos el uso de sesiones
	session_start();   

 	// Libera todas las variables de sesión
	session_unset();       

	// Destruimos la sesión 
	session_destroy();      

	header("location:../body-user.php");
?>