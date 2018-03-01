<?php
	session_start();
    include ("../include/header.php");
    include ("../db/db.php");
    include ("../controllers/personas_controller.php");
    
    $msj_error = 'Error en : || ';
    $error = false;

	if (isset($_POST["submit"]))
	{
		if (!empty($_POST["introtitulo"])) 
		{

		} 
		else
		{
			$msj_error += "TITULO || ";
			$error = true;
		}

		if (!empty($_POST["introprecio"]) && (preg_match('/[0-9]{5,6}',"introprecio")))
		{
			
		} 
		else
		{
			$msj_error += "PRECIO || ";
			$error = true;
		}

		if (!empty($_POST["introporcentaje"]) && (preg_match('/[0-4]{5,6}',"introporcentaje")))
		{
			
		} 
		else
		{
			$msj_error += "PORCENTAJE || ";
			$error = true;
		}
	}

	if ($error == true) 
	{
		$_SESSION["mensaje"] = $msj_error;
		include "view-ad-log.php";

	}

	else
	{
	    $Controlador =new controlador(); 
		$Controlador->add_anuncio($_SESSION["dni_usuario"],$_POST["introtitulo"],$_POST["introprecio"],$_POST["introporcentaje"],$_POST["introinfo"],$_POST["introcategoria"],$_FILES);
	}	
?>
    


