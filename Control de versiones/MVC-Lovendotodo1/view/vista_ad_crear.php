<?php
    include ("../include/header.php");
    include ("../db/db.php");
    include ("../controllers/personas_controller.php");

    $Controlador =new controlador(); 
	$Controlador->add_anuncio('rowr'/*USAR NICK AQUI*/,$_POST["introtitulo"],$_POST["introprecio"],$_POST["introporcentaje"],$_POST["introinfo"],$_POST["select_introcat"]);

	//--
	
?>
    


