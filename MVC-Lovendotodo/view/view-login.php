<?php 
	session_start();
	include '../include/header.php'; 
	
	include 'view-head-log.php';

	echo 	'<body style="background-color: #647e98; color: white; font-family: "Consolas"; font-size: 16px; letter-spacing: -1px;>';
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

	echo		'<div class="container" style="background-color: #374a6e">
		    		<div class="row">
		    			<div class="col-md-3">
		    			</div>
			    		<div class="col-md-3">
					    		<div class="panel panel-success">
									<div class="panel-heading">
										<IMG src="../resources/user/user-basic.png" width="80" height="80" data-toggle="collapse" data-target="#login"><b>Inicio de usuario</b>
									</div>

									<div id="login" class="collapse">
								<form action="view-user-log.php" method="POST" enctype="multipart/form-data">
								    	<div class="panel-body"><b>Usuario</b> <input type="text" name="tb_log_user" class="form-control is-info></div>
								    	<div class="panel-body"><b>Contraseña</b> <input type="password" name="tb_log_passw" class="form-control is-info> </div>
								    	<div class="panel-body">
										<br>
											<button type="submit" class="btn btn-success" name="bt_guardarusu"><b>Continuar</b></button>
											<button type="cancel" class="btn btn-warning" name="bt_cancelarusu"><b>Cancelar</b></button>
										</div>
								</form>';
							
	echo							'</div>      		 	
				    			</div>
				    	</div>
				    	<div class="col-md-3">
				    		<a href="view-login-add.php"><IMG src="../resources/user/user-add.png" width="80" height="80"><b>Crear usuario</b></a>';

	echo			    '</div>
		    		</div>
		    	</div>';
echo		'</body>';
?>

