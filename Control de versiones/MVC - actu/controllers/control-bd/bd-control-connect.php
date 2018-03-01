<!--Usuario normal : "usuario" "usuario1"-->
<!--Usuario: "localhost" "localhost"-->

<?php

	$msgresultado='';

    $host = 'localhost';
    $BD = 'db_lovendotodo';
    $user = 'root';
    $pass= '';

	$string_conexion;

	try
	{
	    $string_conexion = new PDO("mysql:host=localhost;dbname=db_lovendotodo",'root','');
	    $string_conexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    echo '<div class="alert alert-success">' . "Conectado a la Base de Datos de usuarios" . '</div>';
  	}

  	catch (PDOException $ex)
  	{
	    echo '<div class="alert alert-danger">' . "No se pudo conectar a la Base de Datos de usuarios <br/>" .$ex->getMessage(). '</div>';
	}
	
?>
