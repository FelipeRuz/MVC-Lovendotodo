<?php
    include ("../include/header.php");
    include ("../db/db.php");
    include ("../controllers/personas_controller.php");

    $Controlador =new controlador(); 
    //$Controlador->add_user("11111111m","","","PRUEBA","pass","","","","","","","","");
	$Controlador->add_user($_POST["introdni"],$_POST["intronombre"],$_POST["introapellido"],$_POST["introusuario"],$_POST["intropass"],$_POST["introtlf"],$_POST["introcp"],$_POST["introdireccion"],$_POST["intropoblacion"],$_POST["introprovincia"],$_POST["introtwitter"],$_POST["introblog"],$_POST["introemail"]);
?>
    


