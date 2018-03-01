<?php
    include '../include/header.php';
?>

<?php
    include 'view-head-log.php';

echo '<body style="background-color:#647e98; color: white; font-family: "Consolas";">
        <div class="container" style="background-color:#272f39;">
            <IMG src="../resources/ad/ad-del.png" width="80" height="80"> 
            <b>Borrado de anuncios</b>
        </div>
        <div class="container" style="background-color:#374a6e; color: #ffffff;"> 
            <form action="vista_ad_borrar.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-3">
                    <b>Dni del propietario del anuncio</b><br>
                    <input type="text" name="delpropietario"  maxlength="9">
                    </div>
                    <div class="col-md-3">      
                    <br>
                    <b>Codigo del anuncio</b><br>
                    <input type="text" name="delcodanuncio"  maxlength="30">
                    <br>
                    <b>Contraseña</b><br>
                    <input type="text" name="delpassanuncio"  maxlength="15">
                    <br><br>
                 

                    <button type="button" class="btn btn-danger " data-toggle="modal" data-target="#myModal2">
                                <i class="fa fa-trash" aria-hidden="true"></i>  
                             <b> Borrar anuncio </b>
                            </button>

                        <div id="myModal2" class="modal fade" role="dialog">
                            <div class="modal-dialog modal-md">
                             <form role="form" action="index.php" method="post">
                              <div class="modal-content">
                               <div class="modal-body">
                                <center>
                                    <button type="submit" id="submit" name="deluserconfirm" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal"><b> Borrar anuncio</b></button>
                                    <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal"><i class="fa fa-arrow-left"></i><b> Cancelar</b></button>
                                </center>
                               </div>
                              </div> 
                            </div>
                        </div>


                    <!-- //////////////////////////////////// -->

                <a href="vista_user_nick.php"> <button type="button"  class="btn btn-info" name="bt_volver"><b>Volver</b></button></a>';
                if(isset($_POST["bt_volver"]))
                {
                   //header ("Location: view-login.php");
                    require_once "view-user-log.php";
                }
                
echo            '<br><br>
                    </div>
                </div>
                <div class="modal fade" id="modaldel" role="dialog">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Modal Header</h4>
                            </div>
                            <div class="modal-body">
                              <p>¿Desea borrar este usuario?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                                <button type="button" class="btn btn-default" >Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>';

?>