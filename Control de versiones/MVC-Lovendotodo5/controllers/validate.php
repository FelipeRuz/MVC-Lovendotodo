<?php
	$errores = [];

	/*$user= "";
	$password= "";

	$nombre="";
	$apellido="";
	$tlf="";
	$dni="";

	$direccion="";
	$cp="";
	$poblacion="";
	$provincia="";
	$img="";

	$twitter="";
	$blog="";
	$email="";*/

	function mostrar_errores($errores, $campo) 
	{
		$alerta = "";
		if (isset($errors[$campo]) && (!empty($campo))) 
		{
			$alerta = '<div class="alert alert-danger" style="margin-top:5px;">'. $errors[$campo] . '</div>';
		}
		return $alerta;
	}

	function validez($errores)
	{
		if(isset($_POST["submit"]) && (count($errors)==0)) 
		{
			//return '<div class="alert alert-success" style="margin-top:5px;"> Formulario validado correctamente!! :) </div>';
			echo '<script>alert("Los campos han sido validados correctamente.")</script>'; 
			//INSERTAR AQUI LA ORDEN SQL PARA INSERCION
			$Controlador =new controlador(); 
			$Controlador->user_login($_POST["tb_log_user"],$_POST["tb_log_passw"]);
		}
	}

	if (isset($_POST["submit"]))
	{
		if (!empty($_POST["introusuario"])) 
		{
			$usuario = trim($_POST["introusuario"]);
			$usuario = filter_var($usuario,FILTER_SANITIZE_STRING); //Morralla seguridad
		}
		else
		{
			$errores["introusuario"]= "El campo usuario no es válido.";
		}

		//---------------------------------------------------------------------------
		if (!empty($_POST["intronombre"])) 
		{
			$nombre = trim($_POST["intronombre"]);
			$nombre = filter_var($nombre,FILTER_SANITIZE_STRING);
		}
		else
		{
			$errores["intronombre"]= "El campo nombre no es válido.";
		}

		//---------------------------------------------------------------------------
		if (!empty($_POST["introdni"])) 
		{
			$dni = trim($_POST["introdni"]);
			$dni = filter_var($dni,FILTER_SANITIZE_STRING);
		}
		else
		{
			$errores["introdni"]= "El campo DNI no es válido.";
		}

		//---------------------------------------------------------------------------
		if (!empty($_POST["introdireccion"])) 
		{
			$direccion = trim($_POST["introdireccion"]);
			$direccion = filter_var($direccion,FILTER_SANITIZE_STRING);
		}
		else
		{
			$errores["introdireccion"]= "El campo direccion no es válido.";
		}

		//---------------------------------------------------------------------------
		if (!empty($_POST["intropass"])) 
		{
			$password = trim($_POST["intropass"]);
			$password = filter_var($password,FILTER_SANITIZE_STRING);
		}
		else
		{
			$errores["intropass"]= "El campo contraseña no es válido.";
		}

		//---------------------------------------------------------------------------
		if (!empty($_POST["introapellido"])) 
		{
			$apellido = trim($_POST["introapellido"]);
			$apellido = filter_var($apellido,FILTER_SANITIZE_STRING);
		}
		else
		{
			$errores["introapellido"]= "El campo apellido no es válido.";
		}

		//---------------------------------------------------------------------------
		if (!empty($_POST["introtlf"])) 
		{
			$tlf = trim($_POST["introtlf"]);
			$tlf = filter_var($tlf,FILTER_SANITIZE_STRING);
		}
		else
		{
			$errores["introtlf"]= "El campo teléfono no es válido.";
		}

		//---------------------------------------------------------------------------
		if (!empty($_POST["introcp"])) 
		{
			$cp = trim($_POST["introcp"]);
			$cp = filter_var($cp,FILTER_SANITIZE_STRING);
		}
		else
		{
			$errores["introcp"]= "El campo código postal no es válido.";
		}

		//---------------------------------------------------------------------------
		if (!empty($_POST["introprovincia"])) 
		{
			$provincia = trim($_POST["introprovincia"]);
			$provincia = filter_var($provincia,FILTER_SANITIZE_STRING);
		}
		else
		{
			$errores["introprovincia"]= "El campo provincia no es válido.";
		}

		//---------------------------------------------------------------------------
		if (!empty($_POST["intropoblacion"])) 
		{
			$poblacion = trim($_POST["intropoblacion"]);
			$poblacion = filter_var($poblacion,FILTER_SANITIZE_STRING);
		}
		else
		{
			$errores["intropoblacion"]= "El campo poblacion no es válido.";
		}

		//---------------------------------------------------------------------------
		if (!empty($_POST["introimagen"])) 
		{
			//$img = trim($_POST["introimagen"]);
			//$img = filter_var($img,FILTER_SANITIZE_STRING);
			$img = "IMAGEN";
		}
		else
		{
			$errores["introimagen"]= "El campo imagen no es válido.";
		}

		//CAMPOS OPCIONALES ***
		//---------------------------------------------------------------------------
		if (!empty($_POST["introemail"])) 
		{
			$email = trim($_POST["introemail"]);
			$email = filter_var($email,FILTER_SANITIZE_STRING);
		}
		else if (empty($_POST["introemail"]))
		{
			$email = "No insertado";
		}
		else
		{
			$errores["introemail"]= "El campo email no es válido.";
		}

		//---------------------------------------------------------------------------
		if (!empty($_POST["introtwitter"])) 
		{
			$twitter = trim($_POST["introtwitter"]);
			$twitter = filter_var($twitter,FILTER_SANITIZE_STRING);
		}
		else if (empty($_POST["introtwitter"]))
		{
			$twitter = "No insertado";
		}
		else
		{
			$errores["introtwitter"]= "El campo twitter no es válido.";
		}	

		//---------------------------------------------------------------------------
		if (!empty($_POST["introblog"])) 
		{
			$blog = trim($_POST["introblog"]);
			$blog = filter_var($blog,FILTER_SANITIZE_STRING);
		}
		else if (empty($_POST["introblog"]))
		{
			$blog = "No insertado";
		}
		else
		{
			$errores["introblog"]= "El campo blog no es válido.";
		}		
	}


?>
