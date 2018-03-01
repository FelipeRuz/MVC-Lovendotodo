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
  		$per=new personas_model();
		$per2=new personas_model();

		//Consulta de datos
		$query="select * from usuario where user='$nick' and pass='$contr'";
		$datos=$per->ejecuta_consulta($query);

		//Comprobacion de numero de datos en consulta
		$query_num="select count(*) from usuario where user='$nick' and pass='$contr'";
		$array=$per2->ejecuta_consulta($query_num);
		$n_rows = $array[0]["count(*)"];

		if($n_rows != "0")
		{
			//EN ESTE APARTADO DIFERENCIAR USUARIO : "user"  y USUARIO : "admin".
        	require_once("../../views/view/vista_user_dni.php");
		}
		else
		{
			
        	require_once("../../views/user-site/body-user.php");
		}
  	}

  	public function alter_user($dni_usu,$pass,$nom,$ape,$tlfn,$dir,$cp,$pob,$prov,$correo,$twt,$blog,$mail) 
	{
  		$per=new personas_model();
		$query="select * from usuario where dni='$dni_usu'";
		$datos=$per->ejecuta_consulta($query);

		if($pass==''){$pass=$datos['pass'];}

		if($nom==''){$nom=$datos['nom'];}

		if($ape==''){$ape=$datos['ape'];}

		if($tlfn==''){$tlfn=$datos['tlf'];}

		if($dir==''){$dir=$datos['direccion'];}

		if($cp==''){$cp=$datos['cp'];}

		if($pob==''){$pob=$datos['poblacion'];}

		if($prov==''){$prov=$datos['provincia'];}

		if($mail==''){$mail=$datos['email'];}

		if($twt==''){$twt=$datos['twitter'];}

		if($blog==''){$blog=$datos['blog'];}


		$query2="update usuario set pass='$pass', nom='$nom', ape='$ape', tlf='$tlfn', direccion='$dir', cp='$cp', poblacion='$pob', provincia='$prov', email='$corre', twitter='$twt', blog='$blog' where dni='$dni_usu' ";

		$per2->ejecuta_consulta($query2);

        require_once("../../views/view/vista_user_dni.php");
  	}

  	/*public function comprob_user($nick,$contr)
  	{
  		$result_query = false;
  		$per=new personas_model();
		$query="select * from usuario where user='$nick' and pass='$contr'";
		$datos=$per->ejecuta_consulta($query);

  		if(mysql_num_rows($datos) > 0) { 
  			$result_query = true;
  		} 
  		else{ 
  			$result_query = false;
  		}
  	}*/

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
		 		
		//Incremento de la secuencia
		$cod_producto=$cod_producto+1;


		//Llamada a la vista
		require_once("../../views/view/vista_anuncio_all.php");
  	}

  	//Borrar un anuncio.
  	public function del_anuncio($titulo_anuncio,$cod_anuncio)
  	{
  		//Se borra el usuario mismo y se cierra la session.
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