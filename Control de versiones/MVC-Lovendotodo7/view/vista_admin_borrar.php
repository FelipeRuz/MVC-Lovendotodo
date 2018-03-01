<?php
	session_start();
    include "../include/header.php";
    include "../db/db.php";
    include "../controllers/personas_controller.php";

    $Controlador =new controlador(); 
	$Controlador->del_user_admin($_POST["deluser"],$_POST["delpass"],$_POST["deldni"]);		 
?>
    


