<?php 
	

	include '../include/header.php'; 
	include "../controllers/personas_controller.php";

	include 'view-head-log.php';
	
	echo '<script type="text/javascript" language="javascript" >alert("El usuario ya existe").</script>';
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

		echo'<div class="container" style="background-color: #272f39"; color: #ffffff;>
					<div class="row">
						<div class="col-md-3">
			    		</div>
						<div class="col-md-6">
							<b><h4><IMG src="../resources/ad/ad-find.png" width="80" height="80" data-toggle="collapse" data-target="#login"> BUSQUEDA DEL ANUNCIO </h4></b>
			    		</div>
					</div>
					</div>
					<div class="container" style="background-color: #374a6e; color: #ffffff;">
					<form action="view-ad-see-admin.php" method="POST" enctype="multipart/form-data" id="introanuncio">
			    		<div class="row">
			    			<div class="col-md-3">
			    			</div>
				    		<div class="col-md-3">  	
								<b>Inserte el DNI para visualizar sus anuncios</b><br>
								<input type="text" name="introbuscar" maxlength="30">
								<br><br>
								<button type="submit" class="btn btn-success" name="veranuncio"><b>Buscar</b></button>
								<button type="cancel" class="btn btn-warning" name="cancelaranuncio"><b>Cancelar</b></button>
								<br><br>
							</div>
							<br> 
			    		</div>
			    	</form>
		    	</div>';
		echo'<div class="container" style="background-color: #272f39"; color: #ffffff;>';
			    if (isset($_POST["veranuncio"])) 
	       		{
					require_once("../db/db.php");
					require_once("../controllers/personas_controller.php");

					$Controlador =new controlador(); 
					$Controlador->user_anuncio($_POST["introbuscar"]);
	        	}
	    echo '</div>';

		    	

echo		    '</body>';
		    
?>