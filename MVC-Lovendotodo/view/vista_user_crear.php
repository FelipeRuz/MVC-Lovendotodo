<?php
    include ("../include/header.php");
    include ("../db/db.php");
    include ("../controllers/personas_controller.php");

    $msj_error = 'Error en : || ';
    $error = false;

	if (isset($_POST["submit"]))
	{
		//Comprobacion del user 
		if (!empty($_POST["introusuario"]) && (strlen($_POST["introusuario"]) < 16)) 
		{

		} 
		else
		{
			$msj_error += "USUARIO || ";
			$error = true;
		}

		if (!empty($_POST["intronombre"]) && (strlen($_POST["intronombre"]) < 31)) 
		{
			
		} 
		else
		{
			$msj_error += "NOMBRE || ";
			$error = true;
		}

		if (!empty($_POST["introapellido"]) && (strlen($_POST["introapellido"]) < 31)) 
		{

		} 
		else
		{
			$msj_error += "APELLIDO || ";
			$error = true;
		}


		if (!empty($_POST["intropass"]) && (strlen($_POST["intropass"])> 6) && (strlen($_POST["intropass"])<= 10)) 
		{
			
		} 
		else
		{
			$msj_error += "CONTRASEÑA || ";
			$error = true;
		}

		if ( !empty($_POST["introdni"]) && (preg_match('/[0-9]{7,8}[A-Z]/',$_POST["introdni"])) && (strlen($_POST["introdni"]) < 10))
	    {

	    }
	    else
	    {
	        $msj_error += "DNI || ";
			$error = true;
	    }

	    if (!empty($_POST["introdireccion"])&&(preg_match("/[0-30]/",$_POST["introdireccion"])) && (strlen($_POST["introdireccion"]) < 31)) 
		{

		} 
		else
		{
			$msj_error += "DIRECCION || ";
			$error = true;
		}


		if ( !empty($_POST["introemail"]) && preg_match('/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/', $_POST["introemail"]))
		{

		}
		else
		{
			$msj_error += "EMAIL || ";
			$error = true;
		}

		if (preg_match('/^(https?:\/\/)?((w{3}\.)?)twitter\.com\/(#!\/)?[a-z0-9_]+$/','introtwitter')) 
		{

		} 
		else
		{
			$msj_error += "TWITTER || ";
			$error = true;
		}	

		if( !empty($_POST["introtlf"]) && (preg_match('/^((\+?34([ \t|\-])?)?[9|6|7]((\d{1}([ \t|\-])?[0-9]{3})|(\d{2}([ \t|\-])?[0-9]{2}))([ \t|\-])?[0-9]{2}([ \t|\-])?[0-9]{2})$/', $_POST["tb_introtlf"])))
		{ 

		}
		else
		{ 
			$msj_error += "TLF || ";
			$error = true;
		}

		if (!empty($_POST["introcp"]) && preg_match('/^[0-9]{5}$/i', $_POST["introcp"])) 
		{			

		}
		else
		{
			$msj_error += "CP || ";
			$error = true;
		}

		if (!empty($_POST["introprovincia"]) && (strlen($_POST["introprovincia"]) < 20)) 
		{

		} 
		else
		{
			$msj_error += "PROVINCIA || ";
			$error = true;
		}


		if (!empty($_POST["intropoblacion"]) && (strlen($_POST["intropoblacion"]) < 20)) 
		{

		} 
		else
		{
			$msj_error += "POBLACIÓN || ";
			$error = true;
		}

	}

	if ($error == true) 
	{
		$_SESSION["mensaje"] = $msj_error;
		include "view-login-add.php";
	}
	else
	{
		$Controlador =new controlador(); 
    	//$Controlador->add_user("11111111m","","","PRUEBA","pass","","","","","","","","");
		$Controlador->add_user($_POST["introdni"],$_POST["intronombre"],$_POST["introapellido"],$_POST["introusuario"],$_POST["intropass"],$_POST["introtlf"],$_POST["introcp"],$_POST["introdireccion"],$_POST["intropoblacion"],$_POST["introprovincia"],$_POST["introtwitter"],$_POST["introblog"],$_POST["introemail"]);
	}
   
	//--
	
?>
    


