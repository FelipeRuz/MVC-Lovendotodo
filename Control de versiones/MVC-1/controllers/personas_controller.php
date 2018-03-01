<?php
class Controlador{

	private $modelo;

	public function __construct() 
	{
		//Llamada al modelo
		require_once("../../models/personas_model.php");
		$this->modelo = new personas_model();
	}

  	//Muestra los datos del usuario.
  	public function user_dni($dni_ins) 
	{
		$per=new personas_model();
		$query="select * from usuario where dni='$dni_ins'";
		$datos=$per->ejecuta_consulta($query);
		//Llamada a la vista
		require_once("../../views/view/vista_user_dni.php");
  	}

  	//Comprobación del login a través
  	public function user_login($nick,$contr) 
	{
		echo'<script type="text/javascript"> alert("Usuario o Contraseña Incorrecta"); </script>';  
  		$per=new personas_model();
		$query="select * from usuario where user='$nick' and pass='$contr'";
		var_dump($query);
		echo'HOLA';
	
		$datos=$per->ejecuta_consulta($query);

		if( comprob_user($nick,$contr) == true)
        {
        	$reg = mysqli_fetch_assoc($query);
        	
            session_start();
            $_SESSION["sesion"] = $reg["dni"];  
        }
 
        //En otro caso
        //En $reg se guarda el resultado de la consulta
        //Al segundo posición de SESION se le asigna el id del usuario
        //Redirige a página logueada
        else {
			echo'<script type="text/javascript"> alert("Usuario o Contraseña Incorrecta"); </script>';   
			require_once("../../views/user-site/body-user.php");
        }	
  	}

  	public function comprob_user($nick,$contr)
  	{
  		$result_query = false;
  		$per=new personas_model();
		$query="select * from usuario where user='$nick' and pass='$contr'";
		$datos=$per->ejecuta_consulta($query);

  		if(mysql_num_rows($datos) == 0) { 
  			$result_query = false;		
  		} 
  		else{ 
  			$result_query = true;
  		}

  		return $result_query;
  	}

  	//-------------------------------------------------------- ANUNCIOS ----------------------------------------
  	//Mostrará los anuncios de que tiene publicado cada usuario
	public function user_anuncio($dni) 
	{ 
		$per=new personas_model();
		$query="select u.*,a.* from usuario u inner join anuncio a on u.dni=a.cod_usuario where u.dni='$dni'";
		$datos=$per->ejecuta_consulta($query);
		 
		//Llamada a la vista
		require_once("../../views/view/vista_user_anuncio.php");
  	}

  	//Adición de anuncio a la base de datos.
  	public function add_anuncios($dni_creador,$titulo_ins,$precprod_ins,$porc_ins,$cat_ins,$info_ins) 
	{
		//DATOS EXTRA A INTRODUCIR EN LA TABLA --------------------------------

		//Codigo secuenciador
		$cod_producto = 100;

		$precventa_ins = ( ($porc_ins*$precprod_ins)/100 );
		$fecha_ins ="". date();
		//---------------------------------------------------------------------
		$per=new personas_model();
		$query="insert into `anuncio` (`cod_usuario`, `cod_anuncio`, `titulo`, `prec_prod`, `prec_venta`, `porcentaje`, `categoria`, `info`, `img`, `fech_reg`) values ('".$dni_creador."', '".$cod_producto."', '".$titulo_ins."','".$precprod_ins."', '".$precventa_ins."', '".$porc_ins."', '".$cat_ins."', '".$info_ins."', '', '".$fecha_ins."')";
		$datos=$per->ejecuta_consulta($query);
		 
		//Llamada a la vista
		require_once("../../views/view/vista_anuncio_all.php");

		//Incremento de la secuencia
		$cod_producto=$cod_producto+1;
  	}

  	//Borrar un anuncio.
  	public function del_anuncio($titulo_anuncio,$cod_anuncio)
  	{
  		
  	}

  	//Mostrará todos los anuncios alojados en la BD
  	public function anuncios_all() 
	{
		$per=new personas_model();
		$query="select u.*,a.* from usuario u inner join anuncio a on u.dni=a.cod_usuario";
		$datos=$per->ejecuta_consulta($query);
		 
		//Llamada a la vista
		require_once("../../views/view/vista_anuncio_all.php");
  	}

}

?>