<?php
class Controlador{

	private $modelo;

	public function __construct() 
	{
		//Llamada al modelo
		require_once("../models/personas_model.php");
		$this->modelo = new personas_model();
	}

  	//Mostrará todos los anuncios alojados en la BD
  	public function user_all() 
	{
		$per=new personas_model();
		$query="select * from usuario order by ape ASC";
		$datos=$per->ejecuta_consulta($query);
		 
		//Llamada a la vista
		require_once("../view/vista_user_all.php");
  	}

  	//Muestra los datos del usuario.
  	public function user_dni($nick) 
	{
		$per=new personas_model();
		$query="select dni from usuario where user='$nick'";
		$datos=$per->ejecuta_consulta($query);
		//Llamada a la vista
		//require_once("../view/vista_user_nick.php");
		return $datos;
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
			$_SESSION["usuario"]=$_POST["tb_log_user"];
			$_SESSION["password"]=$_POST["tb_log_passw"];

			if($datos[0]['tip_user']=='admin')
			{
				require_once("../view/vista_user_dni_admin.php");
			}	
			else
			{
        		require_once("../view/vista_user_nick.php");
			}
		}
		else
		{
        	$_SESSION["mensaje"]= "Ha ocurrido un error al logear, reinténtelo mas tarde.";
        	header ("Location: view-login.php");
		}
  	}


  	/*public function add_user($insertdni,$insertnom,$insertape,$insertuser,$insertpass,$inserttlf,$insertcp,$insertdireccion,$insertpoblacion,$insertprovincia,$inserttwitter,$insertblog,$insertemail)
	{
		try 
		{
			$per=new personas_model();
		
			$fecha_actual = date('y.m.d');


			$query="insert into usuario (dni,tip_user,nom,ape,user,pass,tlf,cp,direccion,poblacion,provincia,twitter,blog,fecha_reg,email) values ('$insertdni','user','$insertnom','$insertape','$insertuser','$insertpass','$inserttlf','$insertcp','$insertdireccion','$insertpoblacion','$insertprovincia','$inserttwitter','$insertblog','$fecha_actual','$insertemail')";

			$datos=$per->ejecuta_consulta($query);

			if($query)
			{
         		$_SESSION["mensaje"] = "El usuario ha sido creado";
        	}
        	require_once "../view/view-login.php";
		}
		catch (PDOException $ex)
		{
          require_once "../view/view-login.php";
          die();
      	}
  	}*/

  	  	public function add_user($insertdni,$insertnom,$insertape,$insertuser,$insertpass,$inserttlf,$insertcp,$insertdireccion,$insertpoblacion,$insertprovincia,$inserttwitter,$insertblog,$insertemail,$insertimg)
	{
		try 
		{
			$per=new personas_model();
		
			$fecha_actual = date('y.m.d');


			$query="insert into usuario (dni,tip_user,nom,ape,user,pass,tlf,cp,direccion,poblacion,provincia,twitter,blog,fecha_reg,email) values ('$insertdni','user','$insertnom','$insertape','$insertuser','$insertpass','$inserttlf','$insertcp','$insertdireccion','$insertpoblacion','$insertprovincia','$inserttwitter','$insertblog','$fecha_actual','$insertemail','$insertimg')";

			$datos=$per->ejecuta_consulta($query);

			if($query)
			{
         		$_SESSION["mensaje"] = "El usuario ha sido creado";
        	}
        	require_once "../view/view-login.php";
		}
		catch (PDOException $ex)
		{
          require_once "../view/view-login.php";
          die();
      	}
  	}


  	public function alter_user($nick_usu,$dni,$pass,$nom,$ape,$tlfn,$dir,$cp,$pob,$prov,$twt,$blog,$email) 
	{
        try 
        {
	  		$per=new personas_model();

			$query="select * from usuario where user='$nick_usu'";
			$datos=$per->ejecuta_consulta($query);

			if($dni==''){$pass=$datos['dni'];}

			if($pass==''){$pass=$datos['pass'];}

			if($nom==''){$nom=$datos['nom'];}

			if($ape==''){$ape=$datos['ape'];}

			if($tlfn==''){$tlfn=$datos['tlf'];}

			if($dir==''){$dir=$datos['direccion'];}

			if($cp==''){$cp=$datos['cp'];}

			if($pob==''){$pob=$datos['poblacion'];}

			if($prov==''){$prov=$datos['provincia'];}

			if($email==''){$mail=$datos['email'];}

			if($twt==''){$twt=$datos['twitter'];}

			if($blog==''){$blog=$datos['blog'];}


			$query="update usuario set dni='$dni', pass='$pass', nom='$nom', ape='$ape', tlf='$tlfn', direccion='$dir', cp='$cp', poblacion='$pob', provincia='$prov', email='$email', twitter='$twt', blog='$blog' where user='$nick_usu' ";

			$per->ejecuta_consulta($query);

			if($query)
			{
         		$_SESSION["mensaje"] = "El usuario ha sido creado.";
        	}

	        require_once("../view/vista_user_dni.php");
        } 
        catch (PDOException $ex) 
        {
        	$_SESSION["mensaje"] = "El usuario no pudo modificarse.";
          	require_once "../view/view-login.php";
          	die();
        }
  	}

  	//Borrar un usuario.
  	public function del_user($nick_usuario,$pass_usuario,$dni_usuario)
  	{	
  		try 
  		{
	  		$per=new personas_model();
			$query="delete from usuario where user='$nick_usuario' and pass='$pass_usuario' and dni='$dni_usuario'";

	  		$per->ejecuta_consulta($query);

	  		if($query)
			{
         		$_SESSION["mensaje"] = "El usuario ha sido creado";
        	}

	  		require_once("../view/vista_user_dni.php");	

  		} 
  		catch (PDOException $ex) 
  		{
  			$_SESSION["mensaje"] = "El usuario no se pudo borrar ";
          	require_once "../view/vista_user_nick.php";
          	die();
  		}
  		
  	}

  	  	//Borrar un usuario.
  	public function del_user_admin($nick_usuario,$pass_usuario,$dni_usuario)
  	{	
  		try 
  		{
	  		$per=new personas_model();
			$query="delete from usuario where user='$nick_usuario' and pass='$pass_usuario' and dni='$dni_usuario'";

	  		$per->ejecuta_consulta($query);

	  		if($query)
			{
         		$_SESSION["mensaje"] = "El usuario ha sido creado";
        	}

	  		require_once("../view/vista_user_dni_admin.php");	

  		} 
  		catch (PDOException $ex) 
  		{
          	require_once "../view/vista_user_dni_admin.php";
          	die();
  		}
  	}

//-------------------------------------------------------- ANUNCIOS ----------------------------------------
  	//Mostrará los anuncios de que tiene publicado cada usuario
	public function user_anuncio($dni_usuario) 
	{ 
		$per=new personas_model();
		//$query="select u.*,a.* from usuario u inner join anuncio a on u.dni=a.cod_usuario where u.user='$nick'";
		$query="select * from anuncio order where cod_usuario='$dni_usuario'";
		$datos=$per->ejecuta_consulta($query);
		 
		//Llamada a la vista
		require_once("../view/view_user_anuncio.php");
  	}

  	//Adición de anuncio a la base de datos.
  	/*public function add_anuncio($dni_creador,$titulo_ins,$precprod_ins,$porc_ins,$cat_ins,$info_ins) 
	{
		try
		{
			//DATOS EXTRA A INTRODUCIR EN LA TABLA --------------------------------
			//Codigo secuenciador
			$cod_producto = 100;

			$precventa_ins = ( ($porc_ins*$precprod_ins)/100 );
			$fecha_ins =date('y.m.d');

			//---------------------------------------------------------------------
			$per=new personas_model();
			$query="insert into `anuncio` (`cod_usuario`, `cod_anuncio`, `titulo`, `prec_prod`, `prec_venta`, `porcentaje`, `categoria`, `info`, `img`, `fech_reg`) values ('".$dni_creador."', '".$cod_producto."', '".$titulo_ins."','".$precprod_ins."', '".$precventa_ins."', '".$porc_ins."', '".$cat_ins."', '".$info_ins."', '', '".$fecha_ins."')";
			$datos=$per->ejecuta_consulta($query);
			 		
			//Incremento de la secuencia
			$cod_producto=$cod_producto+1;

			//Llamada a la vista
			require_once("../view/view-ad-log.php");
		}
		catch (PDOException $ex) 
  		{
          	require_once "../view/view-ad-log.php";
          	die();
  		}
  	}*/

  	public function add_anuncio($dni_creador,$titulo_ins,$precprod_ins,$porc_ins,$cat_ins,$info_ins,$anun_img) 
	{
		try
		{
			//DATOS EXTRA A INTRODUCIR EN LA TABLA --------------------------------
			//Codigo secuenciador
			$cod_producto = 100;

			$precventa_ins = ( ($porc_ins*$precprod_ins)/100 );
			$fecha_ins =date('y.m.d');
			// -- TRATAMIENTO DE IMAGEN
			move_uploaded_file($anun_img["introimagen"]["tmp_name"],'../resources/imganuncio/'.$titulo_ins.".jpg");
			//---------------------------------------------------------------------
			$per=new personas_model();
			$query="insert into `anuncio` (`cod_usuario`, `cod_anuncio`, `titulo`, `prec_prod`, `prec_venta`, `porcentaje`, `categoria`, `info`, `img`, `fech_reg`) values ('".$dni_creador."', '".$cod_producto."', '".$titulo_ins."','".$precprod_ins."', '".$precventa_ins."', '".$porc_ins."', '".$cat_ins."', '".$info_ins."',".$anun_img.", '".$fecha_ins."')";
			$datos=$per->ejecuta_consulta($query);
			 		
			//Incremento de la secuencia
			$cod_producto=$cod_producto+1;

			//Llamada a la vista
			require_once("../view/view-ad-log.php");
		}
		catch (PDOException $ex) 
  		{
          	require_once "../view/view-ad-log.php";
          	die();
  		}
  	}

  	//Borrar un anuncio.
  	public function del_anuncio($nick_user,$cod_anuncio,$contraseña)
  	{	
  		try
  		{
  			$per=new personas_model();
			$per2=new personas_model();

			//Consulta de datos
			//$query="select * from usuario where user='$nick' and pass='$contr'";
			//$datos=$per->ejecuta_consulta($query);

			$consulta_dni = "select dni from usuario where user='$nick' and pass='$contr'";
			//Comprobacion de numero de datos en consulta
			$query_num="select count(*) from anuncio where cod_anuncio='$consulta_dni' and cod_anuncio='$cod_anuncio'";

			$array=$per2->ejecuta_consulta($query_num);

			$n_rows = $array[0]["count(*)"];

			if($n_rows != "0")
			{
	  			$per=new personas_model();
				$query="delete from anuncio where cod_anuncio='$cod_anuncio' and cod_anuncio='$consulta_dni'";
			}
			require_once("../view/view-ad-log.php");
  		}

  		catch (PDOException $ex) 
  		{
          	require_once "../view/vista_user_dni_admin.php";
          	die();
  		}
		
  	}

  	//Mostrará todos los anuncios alojados en la BD
  	public function anuncios_all() 
	{
		try {
			$per=new personas_model();
			$query="select u.*,a.* from usuario u inner join anuncio a on u.dni=a.cod_usuario order by a.cod_anuncio"; 
			$datos=$per->ejecuta_consulta($query);
		 
		//Llamada a la vista
		require_once("../view/view_user_anuncio.php");
		} catch (PDOException $ex) {
			
		}
		
  	}

  	public function anuncios_categoria($categoria) 
	{
		$per=new personas_model();
		$query="select * from anuncio order by '$categoria'";
		$datos=$per->ejecuta_consulta($query);
		 
		//Llamada a la vista
		require_once("../view/vista_anuncio_all.php");
  	}

}

?>