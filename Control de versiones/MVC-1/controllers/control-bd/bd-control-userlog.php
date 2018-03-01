<!--Usuario normal : "usuario" "usuario1"-->
<!--Usuario: "localhost" "localhost"-->

<?php

	require_once 'bd-control-connect.php';

	$msgresultado='';

 	try
 	{  
 		global $string_conexion;
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
	
?>
