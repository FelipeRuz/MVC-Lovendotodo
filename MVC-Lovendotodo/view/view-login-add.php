<?php 
	session_start();

	include '../include/header.php'; 
	include "../controllers/personas_controller.php";

	include 'view-head-log.php';
	
	echo 	'<body style="background-color: #647e98; color: #ffffff;; font-family: "Consolas"; font-size: 16px; letter-spacing: -1px;>';

			if (isset($_SESSION["mensaje"])) 
       		{
	            echo '
	                <div class="container" style="background-color:#F3C336;>
	                    <div class="col-md-6">
	                        <h5>'.$_SESSION["mensaje"].'</h5>
	                    </div>
	                </div>
	            ';
            	unset($_SESSION["mensaje"]);
        	}		

	echo	'<div class="container" style="background-color: #272f39"; color: #ffffff;>
				<div class="row">
					<div class="col-md-3">
		    		</div>
					<div class="col-md-6">
						<b><h4><IMG src="../resources/user/user-add.png" width="80" height="80" data-toggle="collapse" data-target="#login"> CREACION DE USUARIO </h4></b>
						[Los campos marcados con "*" son opcionales]
		    		</div>
				</div>
				</div>
				<div class="container" style="background-color: #374a6e; color: #ffffff;">
				<form action="vista_user_crear.php" method="POST" enctype="multipart/form-data">
		    		<div class="row">
		    			<div class="col-md-3">
		    			</div>
			    		<div class="col-md-3">  	
							<b>Usuario</b><br>
							<input type="text" name="introusuario" maxlength="15">
							<br>
							<b>Nombre</b><br>
							<input type="text" name="intronombre"  maxlength="30">
							<br>
							<b>DNI</b><br>
							<input type="text" name="introdni"  maxlength="9">
							<br>
							<b>Dirección</b><br>
							<input type="text" name="introdireccion"  maxlength="30">
							<br>
							<b>Email*</b><br>
							<input type="text" name="introemail"  maxlength="30">
							<br>
							<b>Twitter*</b><br>
							<input type="text" name="introtwitter"  maxlength="15">
							<br>
							<b>Blog*</b><br>
							<input type="text" name="introblog"  maxlength="50">
							<br><br>
							<button type="submit" class="btn btn-success" name="bt_guardartodo"><b>Continuar</b></button>
							<button type="cancel" class="btn btn-warning" name="bt_cancelartodo"><b>Cancelar</b></button><br><br>
						</div>
						<div class="col-md-3">  
							<b>Contraseña</b><br>
							<input type="password" name="intropass"  maxlength="15">
							<br>
							<b>Apellidos</b><br>
							<input type="text" name="introapellido"  maxlength="15">
							<br>
							<b>Nº de Tlf</b><br>
							<input type="text" name="introtlf"  maxlength="9">
							<br>
							<b>Código Postal</b><br>
							<input type="text" name="introcp"  maxlength="5"><br>
							<b>Provincia</b><br>
							<input type="text" name="introprovincia"  maxlength="30">
							<br>
							<b>Población</b><br>
							<input type="text" name="intropoblacion"  maxlength="30"><br>

						<!--<b>Imagen</b><br>
							<input type="file" name="introimagen"  maxlength="30"><br>
							<br>-->

				    	</div>    
		    		</div>
		    	</form>
		    	</div>
		    </body>';
		    
?>