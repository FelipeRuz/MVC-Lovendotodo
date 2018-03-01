<!--Usuario normal : "usuario" "usuario1"-->
<!--Usuario: "localhost" "localhost"-->

<?php
	   

    $msgresultado='';

    if(isset($_POST['submit']))
    {
        
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

          $return = [ "correcto" => FALSE, "error" => NULL];
          
        //Probamos que los datos son correctos.
            try
            {  
                $this->string_conexion->beginTransaction();
                $intro_sql = "INSERT INTO usuario(dni,nom,ape,user,pass,tlf,cp,direccion,poblacion,provincia,twitter,blog,fecha_reg,email) VALUES (:dni,:nom,:ape,:user,:pass,:tlf,:cp,:direccion,:poblacion,:provincia,:twitter,:blog,:fecha_reg,:email)";
                
                $query = $this->$string_conexion->prepare($intro_sql); 
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
                    $this->string_conexion->commit();
                    $msgresultado = '<div class="alert alert-success">' . "El usuarios se registró correctamente" . '</div>';
                }

            }
            catch (PDOException $ex)
            {
              $this->string_conexion->rollback();
              $msgresultado = '<div class="alert alert-success">' . "El usuario no pudo registrarse" . '</div>';
              die();
            }
        }
    }
      
  
?>
