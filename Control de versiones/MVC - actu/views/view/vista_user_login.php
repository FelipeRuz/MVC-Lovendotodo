<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Personas</title>
    </head>
    <body>
        <?php
            echo  '<div class="container" style="background-color:#bbb;">
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
                        <div class="col-md-12 col-center">
                            <div class="row">
                    </div>
';
                                    /*require_once("../../db/db.php");
                                    require_once("../../controllers/personas_controller.php");
                                    $controlador =new controlador(); 
                                    
                                    echo 'Sesion '. $_SESSION["sesion"];
                                    $controlador ->user_dni($_SESSION["sesion"]);*/
            echo            '
                            <div class="row">
                                <div class="panel panel-success">
                                    <div class="panel-heading"><IMG src="../../resources/images/user/user-edit.png" width="80" height="80" data-toggle="collapse" data-target="#demo1">
                                    <b> Editar datos del usuario</b></div>

                                    <div id="demo1" class="collapse">
                                        <table class="table">
                                            <tr>
                                                <td><div class="panel-body"><b>Usuario</b><input type="text" name="tb_introuser" class="form-control is-info"></div></td>
                                                <td><div class="panel-body"><b>Contraseña</b><input type="text" name="tb_intropass" class="form-control is-info"></div></td>
                                            </tr>
                                            <tr>
                                                <td><div class="panel-body"><b>Nombre</b> <input type="text" name="tb_intronom" class="form-control is-info"></td>
                                                <td><div class="panel-body"><b>Apellido</b> <input type="text" name="tb_introape" class="form-control is-info"></div></td>
                                                <td><div class="panel-body"><b>Teléfono</b><input type="text" name="tb_introtlf" class="form-control is-info"></div></td>
                                                <td><div class="panel-body"><b>DNI</b><input type="text" name="tb_introDNI" class="form-control is-info"></div></td>
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
                                    </div>                      
                                </div> 
                            </div>

                            <div class="row">
                                <div class="panel panel-success">
                                    <div class="panel-heading"><IMG src="../../resources/images/user/user-del.png" width="80" height="80" data-toggle="collapse" data-target="#demo2">
                                    <b> Borrar usuario</b></div>

                                    <div id="demo2" class="collapse">
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

                                <div class="col-md-4">
                                    <a href="../view/vista_add_anuncio.php"><IMG src="../../resources/images/ad/ad-add.png" width="80" height="80">
                                        <b> Añadir anuncio</b></a>
                                </div>

                                <div class="col-md-4">
                                    <IMG src="../../resources/images/ad/ad-del.png" width="80" height="80" >
                                        <b> Borrar anuncio</b>
                                </div>
                            </div>
                        </div>
                    </div>';
            
        ?>
    </body>
</html>