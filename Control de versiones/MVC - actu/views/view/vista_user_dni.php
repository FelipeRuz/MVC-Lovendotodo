<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Personas</title>
    </head>
    <body>
        <?php

            //HAcer comprobaciond e usuario para que permanezca en login.
            //Min 8.03  https://www.youtube.com/watch?v=N1HITfGqW74&index=60&list=PLU8oAlHdN5BkinrODGXToK9oPAlnJxmW_
            /*session_start();

            //Definimos:
            $_SESSION["id_usuario"] = $_POST[$datos['dni']];
            if (!isset($_SESSION["id_sesion"])) 
            {
                //Redirigirlo al login
                required_once ('../body-user.php');
            }*/




            include "../../includes/header.php";
            /*echo 'Usuario | DNI', "<br/>";
            foreach ($datos as $dato) {
                echo $dato["nom"],' | ',$dato["ape"],'<br>';
                echo $dato["dni"],' | ',$dato["user"],' | ',$dato["pass"],' | ',$dato["tlf"],' | ', $dato["email"]."<br/>";
                echo $dato["direccion"],' | ',$dato["poblacion"],' | ',$dato["provincia"],' | ',$dato["cp"],' | ', $dato["pass"]."<br/>";
                echo $dato["twitter"],' | ',$dato["blog"],'<br><br>';
            }*/
            foreach ($datos as $dato) {
                echo'<div class="container" style="background-color:#bbb;">
                        <div class="col-md-6 col-center">
                            <IMG src="../../resources/images/user/user-basic.png" width="80" height="80">
                            <button type="button" class="btn btn-primary" data-toggle="dropdown"> PERFIL<span class="caret"></span></button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">CERRAR SESIÓN</a></li>
                                    <!-- PARA CERRAR LA SESION : session_destroy() y volvemos al indice.-->
                                </ul>   
                        </div>
                    </div>
                 
        <div class="container" style="background-color:#ccc;"> 
                    <div class="row"> 
                        <div class="col-md-12 col-center">
                            <div class="panel panel-success">
                                <div class="panel-heading"><IMG src="../../resources/images/user/user-basic.png" width="80" height="80" data-toggle="collapse" data-target="#demo_usu">
                                    <b> Datos del usuario</b>
                                </div>

                                <div id="demo_usu" class="collapse">
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
                                    <div class="panel-body"><b>Blogg : </b> <span class="label label-primary">'.$dato["blog"].'</span></div>
                                </div>   
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-center">
                            <div class="panel panel-success">
                                <div class="panel-heading"><IMG src="../../resources/images/user/user-edit.png" width="80" height="80" data-toggle="collapse" data-target="#demo_edit">
                                    <b>Editar datos del usuario</b>
                                </div>

                                <div id="demo_edit" class="collapse">
                    <form action="" method="POST" enctype="multipart/form-data">  
                                    <table class="table">
                                        <tr>
                                            <td><div class="panel-body"><b>Contraseña</b><input type="text" name="tb_intropass" class="form-control is-info"></div></td>
                                        </tr>
                                        <tr>
                                            <td><div class="panel-body"><b>Nombre</b> <input type="text" name="tb_intronom" class="form-control is-info"></td>
                                            <td><div class="panel-body"><b>Apellido</b> <input type="text" name="tb_introape" class="form-control is-info"></div></td>
                                            <td><div class="panel-body"><b>Teléfono</b><input type="text" name="tb_introtlf" class="form-control is-info"></div></td>
                                        </tr>
                                        <tr>
                                            <td><div class="panel-body"><b>Dirección</b><input type="text" name="tb_introdir" class="form-control is-info"></td>
                                            <td><div class="panel-body"><b>Código Postal</b><input type="text" name="tb_introcp" class="form-control is-info"></div></td>
                                            <td><div class="panel-body"><b>Población</b><input type="text" name="tb_intropobl" class="form-control is-info"></div></td>                 
                                            <td><div class="panel-body"><b>Provincia</b> <input type="text" name="tb_introprov" class="form-control is-info"></td>
                                        </tr>
                                        <tr>
                                            <td><div class="panel-body"><b>E-mail </b><input type="text" name="tb_introemail" class="form-control is-info"></td>
                                            <td><div class="panel-body"><b>Twitter </b><input type="text" name="tb_introtw" class="form-control is-info"></td>
                                            <td><div class="panel-body"><b>Blog </b><input type="text" name="tb_introblog" class="form-control is-info"></div></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <button type="button" class="btn btn-success" name="bt_guardarusu"><b>Guardar</b></button>
                                                <button type="button" class="btn btn-warning" name="bt_cancelarusu"><b>Cancelar</b></button>
                                            </td>
                                        </tr>                       
                                    </table>
                    </form>
                                </div>                      
                            </div>    
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-center">
                            <div class="panel panel-success">
                                <div class="panel-heading"><IMG src="../../resources/images/user/user-del.png" width="80" height="80" data-toggle="collapse" data-target="#demo_del">
                                    <b> Borrar usuario</b>
                                </div>

                                <div id="demo_del" class="collapse">
                    <form action="" method="POST" enctype="multipart/form-data">  
                                    <table class="table">
                                        <tr>
                                            <td><div class="panel-body"><b>Usuario</b><input type="text" name="tb_introuser" class="form-control is-info"></div></td>
                                            <td><div class="panel-body"><b>Contraseña</b><input type="text" name="tb_intropass" class="form-control is-info"></div></td>
                                        </tr>   
                                        <tr>
                                            <td>
                                                <button type="button" class="btn btn-success" name="bt_guardarusu"><b>Guardar</b></button>
                                                <button type="button" class="btn btn-warning" name="bt_cancelarusu"><b>Cancelar</b></button>
                                            </td>
                                        </tr>                   
                                    </table>
                    </form>
                                </div>                      
                            </div> 
                        </div>
                    </div>
        </div>

                    <!--REGION DE ANUNCIO-->
                        <div class="container" style="background-color:#bbb;">
                            <div class="col-md-6 col-center">
                                <IMG src="../../resources/images/ad/ad-base.png" width="80" height="80">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary"> ANUNCIOS </button>
                                </div>      
                            </div>
                        </div>

                        <div class="container" style="background-color:#ccc;">
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="../ad-site/body-ad-log.php"><IMG src="../../resources/images/ad/ad-base.png" width="80" height="80">
                                    <b> Tus anuncios</b></a>
                                </div>
                            </div> 
                           <!-- <div class="row">       
                                <div class="col-md-4">
                                    <a href="../view/vista_add_anuncio.php"><IMG src="../../resources/images/ad/ad-add.png" width="80" height="80">
                                        <b> Añadir anuncio</b></a>
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-md-4">
                                    <IMG src="../../resources/images/ad/ad-del.png" width="80" height="80" >
                                        <b> Borrar anuncio</b>
                                </div>

                            </div>-->
                        </div>
                    </div>';
            }
        ?>
    </body>
</html>


