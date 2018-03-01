<?php
	session_start();

	//Para liberar todas las variables de sesión actualmente registradas.
	session_unset();
	
	//Cerrar sesion
	session_destroy();
		
    require_once("../index.php");
	//header ("Location: index.php")
    //print "<meta http-equiv=Refresh content=\"2 ; url=tu_pagina.php\">"; 

?>

		    		

	