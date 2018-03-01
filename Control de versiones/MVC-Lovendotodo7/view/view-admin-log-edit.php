<?php
    include '../include/header.php';
    //include '../controllers/user-function/function-validate-adduser.php';
?>


<?php
    include 'view-head-log.php';
    
echo '<body style="background-color:#647e98; color: white; font-family: "Consolas";">
        <div class="container" style="background-color:#272f39;">
            <IMG src="../resources/user/user-edit.png" width="80" height="80"> 
            <b>Edición de perfil</b>
        </div>
        <div class="container" style="background-color:#374a6e; color: #ffffff;"> 
            <form action="" method="POST" enctype="multipart/form-data">  
                <table class="table">
                    <tr>
                        <td><div class="panel-body"><b>Contraseña</b><input type="text" name="tb_intropass" class="form-control is-info"></div></td>
                    </tr>
                    <tr>
                        <td><div class="panel-body"><b>Nombre</b><input type="text" name="tb_intronom" class="form-control is-info"></td>
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
        </div>';
?>