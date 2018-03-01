<?php
	session_start();

    include ("../include/header.php");
    include ("../db/db.php");
    include ("../controllers/personas_controller.php");

    $Controlador =new controlador(); 
	$Controlador->del_anuncio_admin($_POST["delpropietario"],$_POST["delpassanuncio"],$_POST["delcodanuncio"]);		
?>
    


