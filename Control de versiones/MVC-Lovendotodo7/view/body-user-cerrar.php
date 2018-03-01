<?php
	session_start();

	//Para liberar todas las variables de sesión actualmente registradas.
	session_unset();
	
	//Cerrar sesion
	session_destroy();
	
    //require_once("");
	header ("Location: view-login.php");
    //print "<meta http-equiv=Refresh content=\"2 ; url=tu_pagina.php\">"; 
    for ($i=0; $i < $ciudades.count() ; $i++) 
    { 
    	echo '<option value='.$ciudades[i].'> '.$ciudades[i].'</option';
    }
?>

		    		

	