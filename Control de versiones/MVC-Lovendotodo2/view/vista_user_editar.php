<?php
    include ("../include/header.php");
    include ("../db/db.php");
    include ("../controllers/personas_controller.php");

    $Controlador =new controlador(); 
	$Controlador->alter_user($_SESSION["usuario"],$_POST["editdni"],$_POST["editpass"],$_POST["editnombre"],$_POST["editapellido"],$_POST["edittlf"],$_POST["editdireccion"],$_POST["editcp"],$_POST["editpoblacion"],$_POST["editprovincia"],$_POST["edittw"],$_POST["editblog"],$_POST["editemail"]);		
?>
    


