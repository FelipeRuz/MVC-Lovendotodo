<?php
	session_start();
    include ("../include/header.php");
    include ("../db/db.php");
    include ("../controllers/personas_controller.php");

    $Controlador =new controlador(); 

	$Controlador->add_anuncio($_SESSION["dni_usuario"],$_POST["introtitulo"],$_POST["introprecio"],$_POST["introporcentaje"],$_POST["introinfo"],$_POST["introcategoria"],$_FILES);

	//--
	
?>
    


