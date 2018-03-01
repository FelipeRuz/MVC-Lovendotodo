<?php
	$errores = [];

	$user= "";
	$password= "";

	$nom="";
	$ape="";
	$tlf="";
	$dni="";

	$dir="";
	$cp="";
	$pob="";
	$prov="";
	$img="";

	$twitter="";
	$blog="";
	$email="";

	function Comprobar_Campos($errores, $campo)
	{
		$notificar= "";
		
		if (isset($errores[$campo])&& (!empty($campo)))
		{
			$notificar= '<div class="alert alert-danger" style="margin-top:5px;">' .$errores[$campo] . '</div>';
		}

		return $notificar;
	}

	function Mostrar_Valores() 
	{   
		global $user, $password, $nom, $ape, $tlf, $dni, $dir, $cp, $pob, $prov, $twitter, $blog, $email; 
   		echo  "<h4>Valores obtenidos mediante el formulario</h4><br/>"; 

   		echo  "<strong>Titulo :</strong>" . $user . "<br/>";  
   		echo  "<strong>Precio :</strong>" . $password . "<br/>"; 

   		echo  "<strong>Porcentaje de venta :</strong>" . $nom . "<br/>";  
   		echo  "<strong>Información :</strong>" . $ape . "<br/>";   
   		echo  "<strong>Teléfono :</strong>" . $tlf . "<br/>";
   		echo  "<strong>Imagen:</strong>" . $_FILES["image"]["tmp_name"] . "<br/>";

   		echo  "<strong>Twitter :</strong>" . $twitter . "<br/>";  
   		echo  "<strong>Blog :</strong>" . $blog . "<br/>";   
   		echo  "<strong>E-mail :</strong>" . $email . "<br/>";
    		 
   	} 
 

// Verificamos si todos los campos han sido validados
	function Validar($errores)
	{
		if(isset($_POST["submit"])&& (count($errores)==0))
		{
			global 	$user, $password, $nom, $ape, $tlf, $dni, $dir, $cp, $pob, $prov, $twitter,$blog;
			
			echo "<h4>Valores obtenidos mediante el formulario</h4><br/>";
			echo "<strong>Usuario :</strong>" . $user. "<br/>";
			echo "<strong>Password :</strong>" . $password. "<br/>";
			echo "<strong>Nombre :</strong>" . $nom. "<br/>";
			echo "<strong>Apellidos :</strong>" . $ape. "<br/>";
			echo "<strong>Teléfono :</strong>" . $tlf. "<br/>";
			echo "<strong>DNI :</strong>" . $dni. "<br/>";
			echo "<strong>Dirección :</strong>" . $dir. "<br/>";
			echo "<strong>Codigo Postal :</strong>" . $cp. "<br/>";
			echo "<strong>Poblacion :</strong>" . $pob. "<br/>";
			echo "<strong>Provincia :</strong>" . $prov. "<br/>";
			echo "<strong>Twitter :</strong>" . $twitter. "<br/>";
			echo "<strong>Blog :</strong>" . $blog. "<br/>";
			echo "<strong>E-mail :</strong>" . $email. "<br/>";
			echo "<strong>Imagen de perfil :</strong>" . $_FILES["image"]["tmp_name"]. "<br/>";	

			return'<divclass="alert alert-success" style="margin-top:5px;">Los datos introducidos son correctos.</div>';
		}
	}

	if (isset($_POST["submit"]))
	{
		//Comprobacion del user 
		if (!empty($_POST["tb_introuser"]) && (strlen($_POST["tb_introuser"]) < 10)) 
		{
			$user= trim($_POST["tb_introuser"]);
			$user= filter_var($user, FILTER_SANITIZE_STRING);
		
			echo "Usuario :" . $user. "<br/>";
		} 
		else
		{
			$errores["tb_introuser"] = "El usuario introducido no es válido";
		}

		//Comprobacion de la contraseña
		if (!empty($_POST["tb_intropass"]) && (strlen($_POST["tb_intropass"])> 6) && (strlen($_POST["tb_intropass"])<= 10)) 
		{
			echo "Contraseña :" . sha1($_POST["tb_intropass"]). "<br/>";
		} 
		else
		{
			$errores["tb_intropass"] = "Introduzca una contraseña válida (6-10 caracteres)";
		}


		//Comprobacion de la nombre
		if (!empty($_POST["tb_intronom"]) && (strlen($_POST["tb_intronom"]) < 16)) 
		{
			$nom= trim($_POST["tb_intronom"]);
			$nom= filter_var($nom, FILTER_SANITIZE_STRING);
		
			echo "Nombre :" . $nom. "<br/>";
		} 
		else
		{
			$errores["tb_intronom"] = "El nombre introducido no es válido";
		}


		//Comprobacion del apellido
		if (!empty($_POST["tb_introape"]) && (strlen($_POST["tb_introape"]) < 31)) 
		{
			$ape= trim($_POST["tb_introape"]);
			$ape= filter_var($ape, FILTER_SANITIZE_STRING);
		
			echo "Apellidos :" . $ape. "<br/>";
		} 
		else
		{
			$errores["tb_introape"] = "El apellido introducido no es válido";
		}

		//Comprobacion del tlf
		if( !empty($_POST["tb_introtlf"]) && (preg_match('/^((\+?34([ \t|\-])?)?[9|6|7]((\d{1}([ \t|\-])?[0-9]{3})|(\d{2}([ \t|\-])?[0-9]{2}))([ \t|\-])?[0-9]{2}([ \t|\-])?[0-9]{2})$/', $_POST["tb_introtlf"])))

		{ 
			$tlf= trim($_POST["tb_introape"]);
			$tlf= filter_var($tlf, FILTER_SANITIZE_STRING);
		
			echo "Teléfono :" . $tlf. "<br/>"; 
		}
		else
		{ 
			$errores["tb_introtlf"] = "El teléfono introducido no es válido";
		}

		//Comprobacion del DNI
		if ( !empty($_POST["tb_introDNI"]) && (preg_match('/[0-9]{7,8}[A-Z]/',$_POST["tb_introDNI"])) && (strlen($_POST["tb_introDNI"]) < 10))
	    {
			$dni= trim($_POST["tb_introape"]);
			$dni= filter_var($dni, FILTER_SANITIZE_STRING);
			
			echo "DNI :" . $dni. "<br/>"; 
	    }
	    else
	    {
	        $errores["tb_introDNI"] = "El DNI introducido no es válido";
	    }


		//Comprobacion de la dirección
		if (!empty($_POST["tb_introdir"])&&(preg_match("/[0-30]/",$_POST["tb_introdir"])) && (strlen($_POST["tb_introdir"]) < 31)) 
		{
			$dir= trim($_POST["tb_introdir"]);
			$dir= filter_var($dir, FILTER_SANITIZE_STRING);
		
			echo "Dirección :" . $dir. "<br/>";
		} 
		else
		{
			 $errores["tb_introdir"] = "La dirección introducida no es válida";
		}
		

		//Comprobacion del Codigo POSTAL
		if (!empty($_POST["tb_introcp"])&& preg_match('/^[0-9]{5}$/i', $_POST["tb_introcp"])) 
		{			
			$cp= trim($_POST["tb_introcp"]);
			$cp= filter_var($cp, FILTER_SANITIZE_STRING);
		
			echo "Código postal :" . $cp. "<br/>";
		}
		else
		{
			 $errores["tb_introcp"] = "El código postal introducido no es válido";
		}

		//Comprobacion del Población
		if (!empty($_POST["tb_intropobl"]) && (preg_match("/[0-20]/",$_POST["tb_intropobl"]))&& (strlen($_POST["tb_intropobl"]) < 20)) 
		{
			$pob= trim($_POST["tb_intropobl"]);
			$pob= filter_var($pob, FILTER_SANITIZE_STRING);
		
			echo "Población :" . $pob. "<br/>";
		} 
		else
		{
			$errores["tb_intropobl"] = "La población introducida no es válida";
		}

		//Comprobacion del provincia
		if ((preg_match("/[0-20]/",$_POST["tb_introprov"])) && (strlen($_POST["tb_introprov"]) < 20)) 
		{
			$prov= trim($_POST["tb_introprov"]);
			$prov= filter_var($pob, FILTER_SANITIZE_STRING);
		
			echo "Provincia :" . $prov. "<br/>";
		} 
		else
		{
			$errores["tb_introprov"] = "La provincia introducida no es válida";
		}


		//Comprobacion del EMAIL
		if ( !empty($_POST["tb_introemail"]) && preg_match('/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/', $_POST["tb_introemail"]))
		{
			$email= trim($_POST["tb_introemail"] );
			$email= filter_var($email, FILTER_SANITIZE_STRING);
		
			echo "E-mail :" . $email. "<br/>";
		}
		else
		{
			$errores["tb_introemail"] = "El correo introducido no es válido";
		}
		
		//Comprobacion del twitter
		if (preg_match('/^(https?:\/\/)?((w{3}\.)?)twitter\.com\/(#!\/)?[a-z0-9_]+$/','tb_introtw')) 
		{
			$twitter= trim($_POST["tb_introtw"]);
			$twitter= filter_var($twitter, FILTER_SANITIZE_STRING);
		
			echo "Twitter :" . $twitter. "<br/>";
		} 
		else
		{
			$errores["tb_introtw"] = "La dirección de Twitter introducida no es válida";
		}	

		//Comprobacion del blog
		if (!empty($_POST["tb_introblog"]) /*&& preg_match('/^(https?:\/\/)?((w{3}\.)?)twitter\.com\/(#!\/)?[a-z0-9_]+$/','tb_introtw')*/) 
		{
			$blog= trim($_POST["tb_introblog"]);
			$blog= filter_var($blog, FILTER_SANITIZE_STRING);
		
			echo "Blog :" . $blog. "<br/>";
		} 
		else
		{
			$errores["tb_introblog"] = "La dirección de Twitter introducida no es válida";
		}	


		//Comprobacion de la imagen de perfil
		if (isset($_FILES["tb_introimg"])&& !empty($_FILES["tb_introimg"]["tmp_name"]))
		{
			echo "Fotografía:" . "La imagen nos ha llegado ;)";
		} 
		else
		{
			$errores["tb_introimg"] = "Seleccione una imagen válida :(";
		}
	}
