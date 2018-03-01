<?php
class personas_model{
    private $conexion;
    private $personas;
 
    public function __construct(){
        $this->conexion=Conectar::conexion();
        $this->personas=array();

    }
    
    public function ejecuta_consulta($query){
        $consulta=$this->conexion->prepare($query);
        $consulta->execute();
        while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
            $this->personas[]=$filas;
        }
        return $this->personas;
    } 
}
?>