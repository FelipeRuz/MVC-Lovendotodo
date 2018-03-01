<?php
class Conectar{
    public static function conexion(){
        $conexion = new PDO("mysql:host=localhost;dbname=db_lovendotodo",'root','');
		    $conexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexion;
    }
}
?>