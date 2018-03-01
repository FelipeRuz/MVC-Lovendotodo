<?php
    include '../include/header.php';
    //include '../controllers/user-function/function-validate-adduser.php';
?>

<?php
    include 'view-head-basic.php';
echo '<body style="background-color:#647e98; color: white; font-family: "Consolas";">
        <div class="container" style="background-color:#272f39;">
            <IMG src="../resources/user/user-del.png" width="80" height="80"> 
            <b>Borrado de perfil</b>
        </div>
        <div class="container" style="background-color:#374a6e; color: #ffffff;"> 
            <form method="POST" action="vista_user_borrar.php" >
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-3">      
                        <b>Usuario</b><br>
                        <input type="text" name="deluser"  maxlength="30">
                        <br>
                        <b>Contraseña</b><br>
                        <input type="text" name="delpass"  maxlength="30">
                        <br>
                        <b>DNI</b><br>
                        <input type="text" name="deldni"  maxlength="30">
                        <br><br>
                        <button type="submit" class="btn btn-success" name="bt_guardartodo"><b>Continuar</b></button>
                        <button type="cancel" class="btn btn-warning" name="bt_cancelartodo"><b>Cancelar</b></button>
                        <br><br>
                    </div>
                </div>
            </form> 
        </div>';
?>
