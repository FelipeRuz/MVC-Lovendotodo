<?php
	$errores = [];

	$expediente= "";
	$nombreap= "";

	$universidad="";
	$civil="";

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
		global $expediente, $nombreap, $universidad, $civil; 
   		echo  "<h4>Valores obtenidos mediante el formulario</h4><br/>"; 

   		echo  "<strong>Expediente :</strong>" . $expediente . "<br/>";  
   		echo  "<strong>Nombre y Apellidos :</strong>" . $nombreap . "<br/>"; 

   		echo  "<strong>Universidad :</strong>" . $universidad . "<br/>";  
   		echo  "<strong>Estado civil :</strong>" . $civil . "<br/>";   
   	} 
 

// Verificamos si todos los campos han sido validados
	function Validar($errores)
	{
		if(isset($_POST["submit"])&& (count($errores)==0))
		{
			global $expediente, $nombreap, $universidad, $civil; 
			
	   		echo  "<h4>Valores obtenidos mediante el formulario</h4><br/>"; 
	   		echo  "<strong>Expediente :</strong>" . $expediente . "<br/>";  
	   		echo  "<strong>Nombre y Apellidos :</strong>" . $nombreap . "<br/>"; 
	   		echo  "<strong>Universidad :</strong>" . $universidad . "<br/>";  
	   		echo  "<strong>Estado civil :</strong>" . $civil . "<br/>";  

			return'<divclass="alert alert-success" style="margin-top:5px;">Los datos introducidos son correctos.</div>';
		}
	}

	if (isset($_POST["submit"]))
	{
		//Comprobacion del expediente 
		if (!empty($_POST["tb_expediente"]) && (preg_match('/([0-9]{1,2})-[0-9]{3,4}/[H || M]',$_POST["tb_expediente"]))) 
		{
			$expediente= trim($_POST["tb_expediente"]);
			$expediente= filter_var($expediente, FILTER_SANITIZE_STRING);
		
			echo "Expediente :" . $expediente. "<br/>";
		} 
		else
		{
			$errores["tb_expediente"] = "El expediente introducido no es válido";
		}

		//Comprobacion de la nombre y apellidos
		if (!empty($_POST["tb_nomap"]) && strlen($_POST["tb_nomap"])> 31 ) 
		{
			$nombreap= trim($_POST["tb_nomap"]);
			$nombreap= filter_var($nombreap, FILTER_SANITIZE_STRING);
		
			echo "Nombre y apellidos :" . $nombreap. "<br/>";
		} 
		else
		{
			$nombreap["tb_nomap"] = "Error en nombre y apellidos";
		}


		//Comprobacion de la universidad
		if (!empty($_POST["tb_uni"])) 
		{
			$universidad= trim($_POST["tb_uni"]);
			$universidad= filter_var($universidad, FILTER_SANITIZE_STRING);
		
			echo "Universidad :" . $universidad. "<br/>";
		} 
		else
		{
			$errores["tb_uni"] = "El nombre introducido no es válido";
		}


		//Comprobacion del estado civil
		if (!empty($_POST["tb_civil_1"]) )
		{
			$civil= trim($_POST["Varón"]);
			$civil= filter_var($civil, FILTER_SANITIZE_STRING);
		
			echo "Estado Civil :" . $civil. "<br/>";
		} 

		else if (!empty($_POST["tb_civil_2"]))
		{
			$civil= trim($_POST["Mujer"]);
			$civil= filter_var($civil, FILTER_SANITIZE_STRING);
		
			echo "Estado Civil :" . $civil. "<br/>";
		}

		else if (empty($_POST["tb_civil_2"]) || empty($_POST["tb_civil_1"]))
		{
			$errores["tb_introape"] = "El apellido introducido no es válido";
		}
	}
?>
