<?php
    include ("../include/header.php");
    include ("../db/db.php");
    include ("../controllers/personas_controller.php");

    $Controlador =new controlador(); 
	$Controlador->del_user($_SESSION["usuario"],$_POST["delcodanuncio"],$_POST["delpassanuncio"]);		
?>
    


