<!--Usuario normal : "usuario" "usuario1"-->
<!--Usuario: "localhost" "localhost"-->

<?php

	$msgresultado='';

	$host= "localhost";
	$user= "root";
	$pass='';
	$BD = 'db_lovendotodo';

	global $string_conexion = new PDO("mysql:host=$host; dbname=$BD",$user, $pass);

	function Conexion_BD()
	{
		//Comprobación de la conexión a la BD
		if (!$string_conexion) 
		{
			die('<strong>No se pudo realizar la conexión con la BD.</strong> '. mysql_error());
		}
		else
		{
			mysql_select_db($BD,$string_conexion) or die (mysql_error($string_conexion));
			return $string_conexion;
		}
	}

	function Iniciar_Usuario($usuario,$pass)
	{
		$msgresultado ='';
		// Generamos el listado de los usuarios...
     	try
     	{  
	        $intro_sql = "SELECT * FROM usuario";

	        
	        $result_query = $string_conexion->query($intro_sql);
	        //Supervisamos si la inserción se realizó correctamente... 
	        if($result_query)
	        {
	          $msgresultado = '<div class="alert alert-success">' . "El listado se realizó correctamente" . '</div>';
	        }
	    }
	    catch (PDOException $dt)
	    {
	        $msgresultado = '<div class="alert alert-success">' . "El listado no pudo realizarse correctamente" .$dt->getMessage(). ')</div>';
	        die();
	    }
	}
//Pasarle los parametros.
	function Crear_usuario()
	{
		$msgresultado='';

		if(isset($_POST['submit']))
		 { // y hermos recibido las variables del formulario y éstas no están vacías...
		  if(isset($_POST) and (!empty($_POST)))
		   {
		   	$user = $_POST['tb_introuser'];
		   	$pass = sha1($_POST['tb_intropass']);

		   	$nom = $_POST['tb_intronom'];
		   	$ape = $_POST['tb_introape'];
		   	$tlf = $_POST['tb_introtlf'];

		    $dni = $_POST['tb_introDNI'];
		    $direccion = $_POST['tb_introdir'];
		    $cp = $_POST['tb_introcp'];
		    $poblacion = ($_POST['tb_intropobl']);
		    $provincia = $_POST['tb_introprov'];

		    $twitter = $_POST['tb_introtw'];
		    $blog = $_POST['tb_introblog'];
		    $fecha_reg ="". time();
		    $email = $_POST['tb_introemail'];

		    //Probamos que los datos son correctos.
		    try{  
		        	$intro_sql = "INSERT INTO usuario(dni,nom,ape,user,pass,tlf,cp,direccion,poblacion,provincia,twitter,blog,fecha_reg,email) 
		        			      VALUES (:dni,:nom,:ape,:user,:pass,:tlf,:cp,:direccion,:poblacion,:provincia,:twitter,:blog,:fecha_reg,:email)";
		        
		        	$query = $string_conexion->prepare($intro_sql); 
		    //Ejecutamos indicando los valores que tendría cada parámetro
		        	$query->execute ([
		        		'dni'=>$dni,
		        		'nom'=>$nom,
		        		'ape'=>$ape,
		        		'user'=>$user,
		        		'pass'=>$pass,
		        		'tlf'=>$tlf,
		        		'cp'=>$cp,
		        		'direccion'=>$direccion,
		        		'poblacion'=>$poblacion,
		        		'provincia'=>$provincia,
		        		'twitter'=>$twitter,
		        		'blog'=>$blog,
		        		'fecha_reg'=>$fecha_reg,
		        		'email'=>$email
		        	]);

		        if($query)
		        {
		          	$msgresultado = '<div class="alert alert-success">' . "El usuarios se registró correctamente" . '</div>';
		        }

		      	}catch (PDOException $ex){
		        	$msgresultado = '<div class="alert alert-success">' . "El usuario no pudo registrarse" . '</div>';
		        	die();
		      	}
		   }
		  }
	}

?>
