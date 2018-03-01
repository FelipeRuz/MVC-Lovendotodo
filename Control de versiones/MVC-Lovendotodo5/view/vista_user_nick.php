<?php
            include "../include/header.php";
            /*echo 'Usuario | DNI', "<br/>";
            foreach ($datos as $dato) {
                echo $dato["nom"],' | ',$dato["ape"],'<br>';
                echo $dato["dni"],' | ',$dato["user"],' | ',$dato["pass"],' | ',$dato["tlf"],' | ', $dato["email"]."<br/>";
                echo $dato["direccion"],' | ',$dato["poblacion"],' | ',$dato["provincia"],' | ',$dato["cp"],' | ', $dato["pass"]."<br/>";
                echo $dato["twitter"],' | ',$dato["blog"],'<br><br>';
            }*/
echo '<bodystyle="background-color: #647e98; color: white; font-family: "Consolas";>';

        if (isset($_SESSION["mensaje"])) 
        {
            echo '
                <div class="container" style="background-color:#272f39;>
                    <div class="col-md-6">
                        <h5>'.$_SESSION["mensaje"].'</h5>
                    </div>
                </div>
            ';
            unset($_SESSION["mensaje"]);
        }

            echo'   <div class="container" style="background-color:#272f39;">
                        <div class="col-md-6 col-center">
                            <IMG src="../resources/user/user-basic.png" width="80" height="80">
                            <button type="button" class="btn btn-primary" data-toggle="dropdown"> PERFIL; '.  $_SESSION["usuario"] .' <span class="caret"></span></button> 
                            <a href="body-user-cerrar.php"><button type="button" class="btn btn-danger"> CERRAR SESIÓN </button> </a> 
                        </div>
                    </div>';
                    
            if (isset($_SESSION["mensaje"])) 
            {
                echo '
                    <div class="container" style="background-color:#272f39;>
                        <div class="col-md-6">
                            <h5>'.$_SESSION["mensaje"].'</h5>
                        </div>
                    </div>
                ';
                unset($_SESSION["mensaje"]);
            }           

echo            '<div class="container" style="background-color:#374a6e; color: #ffffff;"> 
                    <div class="row"> 
                        <div class="col-md-12 col-center">
                            <div class="panel panel-success">
                                <div class="panel-heading"><IMG src="../resources/user/user-basic.png" width="80" height="80" data-toggle="collapse" data-target="#demo_usu">
                                    <b> Datos del usuario</b>
                                </div>';

                                foreach ($datos as $dato) 
                                {
            echo                  '<div id="demo_usu" class="collapse">
                                    <div class="panel-body" bgcolor="#ccc"><b>Usuario : </b> <span class="label label-primary">'.$dato["user"].'</span></div>
                                    <div class="panel-body" bgcolor="#ccc"><b>Tipo usuario : </b> <span class="label label-primary">'.$dato["tip_user"].'</span></div>
                                    <div class="panel-body"><b>Nombre : </b> <span class="label label-primary">'.$dato["nom"].'</span></div>
                                    <div class="panel-body"><b>Apellidos : </b> <span class="label label-primary">'.$dato["ape"].'</span></div>
                                    <div class="panel-body"><b>E-Mail : </b> <span class="label label-primary">'.$dato["email"].'</span></div>
                                    <div class="panel-body"><b>DNI : </b> <span class="label label-primary">'.$dato["dni"].'</span></div>
                                    <div class="panel-body"><b>Código postal : </b> <span class="label label-primary">'.$dato["cp"].'</span></div>
                                    <div class="panel-body"><b>Dirección : </b> <span class="label label-primary">'.$dato["direccion"].'</span></div>
                                    <div class="panel-body"><b>Población : </b> <span class="label label-primary">'.$dato["poblacion"].'</span></div>
                                    <div class="panel-body"><b>Provincia : </b> <span class="label label-primary">'.$dato["provincia"].'</span></div>
                                    <div class="panel-body"><b>Twitter : </b> <span class="label label-primary">'.$dato["twitter"].'</span></div>
                                    <div class="panel-body"><b>Blogg : </b> <span class="label label-primary">'.$dato["blog"].'</span></div>';
                                }
        echo                    '</div>  
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-center">
                        <a href="view-user-log-edit.php">
                            <IMG src="../resources/user/user-edit.png" width="80" height="80">
                            <b>Editar datos del usuario</b> 
                        </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-center">
                            <a href="view-user-log-del.php">
                                <div class="panel-heading"><IMG src="../resources/user/user-del.png" width="80" height="80" data-toggle="collapse" data-target="#demo_del">
                                    <b> Borrar usuario</b>
                                </div>
                            </a>
                        </div>
                    </div>
        </div>

                    <!--REGION DE ANUNCIO-->
                <div class="container" style="background-color:#272f39; ">
                    <div class="col-md-6 col-center">
                        <IMG src="../resources/ad/ad-base.png" width="80" height="80">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary"> ANUNCIOS </button>
                        </div>      
                    </div>
                </div>

                <div class="container" style="background-color:#374a6e; color: #ffffff;">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="view-ad-log.php"><IMG src="../resources/ad/ad-find.png" width="80" height="80">
                            <b> Tus anuncios</b></a>
                        </div>
                    </div> 
                </div>
            </div>
        </body>';           
?>
    


