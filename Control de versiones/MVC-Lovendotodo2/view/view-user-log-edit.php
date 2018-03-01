<?php
    include '../include/header.php';
    //include '../controllers/user-function/function-validate-adduser.php';
?>


<?php
    include 'view-head-basic.php';
echo '<body style="background-color:#647e98; color: white; font-family: "Consolas";">
        <div class="container" style="background-color:#272f39;">
            <IMG src="../resources/user/user-edit.png" width="80" height="80"> 
            <b>Edición de perfil $_SESSION["usuario"]</b>
        </div>
        <div class="container" style="background-color:#374a6e; color: #ffffff;"> 
            <form action="vista_user_editar.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-3">   
                    <b>DNI</b><br>
                    <input type="text" name="editdni"  maxlength="30">   
                    <b>Nombre</b><br>
                    <input type="text" name="editnombre"  maxlength="30">
                    <br>
                    <b>Dirección</b><br>
                    <input type="text" name="editdireccion"  maxlength="30">
                    <br>
                    <b>Email</b><br>
                    <input type="text" name="editemail"  maxlength="30">
                    <br>
                    <b>Twitter</b><br>
                    <input type="text" name="edittw"  maxlength="15">
                    <br>
                    <b>Blog</b><br>
                    <input type="text" name="editblog"  maxlength="50">
                    <br><br>
                    <button type="submit" class="btn btn-success" name="bt_guardartodo"><b>Continuar</b></button>
                    <button type="cancel" class="btn btn-warning" name="bt_cancelartodo"><b>Cancelar</b></button><br><br>
                </div>
                <div class="col-md-3">  
                    <b>Contraseña</b><br>
                    <input type="password" name="editpass"  maxlength="15">
                    <br>
                    <b>Apellidos</b><br>
                    <input type="text" name="editapellido"  maxlength="15">
                    <br>
                    <b>Nº de Tlf</b><br>
                    <input type="text" name="edittlf"  maxlength="9">
                    <br>
                    <b>Código Postal</b><br>
                    <input type="text" name="editcp"  maxlength="5"><br>
                    <b>Provincia</b><br>
                    <input type="text" name="editprovincia"  maxlength="30">
                    <br>
                    <b>Población</b><br>
                    <input type="text" name="editpoblacion"  maxlength="30"><br>

                <!--<b>Imagen</b><br>
                    <input type="file" name="editimagen"  maxlength="15">
                    <br>-->

                </div>    
            </div>
            </form>
        </div>';
?>