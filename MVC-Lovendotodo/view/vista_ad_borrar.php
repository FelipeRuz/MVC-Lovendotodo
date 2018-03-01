<?php
	session_start();

    include ("../include/header.php");
    include ("../db/db.php");
    include ("../controllers/personas_controller.php");

    $Controlador =new controlador(); 
	$Controlador->del_anuncio($_SESSION["usuario"],$_POST["delpassanuncio"],$_POST["delcodanuncio"]);		
?>
    


