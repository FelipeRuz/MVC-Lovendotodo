<?php
	session_start();

	include '../include/header.php';

	include 'view-head-log.php';

echo	'
	<body style="background-color:#647e98; color: white; font-family: "Consolas"; ">
	<div class="container" style="background-color:#272f39;">
				<div class="col-md-6 col-center">
					<IMG src="../resources/ad/ad-base.png" width="80" height="80">
					<div class="btn-group">
					  	<button type="button" class="btn btn-primary" data-toggle="dropdown"> ANUNCIOS <span class="caret"></span></button>
					</div>		
				</div>
		</div>';
		
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

echo		'<div class="container" style="background-color:#374a6e;">
				<div class="row">
					<div class="col-md-12">
						<a href="view-ad-add.php">
							<IMG src="../resources/ad/ad-add.png" width="80" height="80">
							<b> Añadir anuncio</b>
						</a>
				    </div>			
				</div>
			</div>
			<div class="container" style="background-color:#456ba4; ">
				<div class="row" style="background-color:#374a6e;">
					<div class="col-md-12" >
						<a href="view-ad-del.php">
							<IMG src="../resources/ad/ad-del.png" width="80" height="80">
							<b>Borrar anuncio</b>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	
	<div class="container" style="background-color:#456ba4; color: #ffffff;">
		<div class="row" style="background-color:#374a6e;">
			<div class="col-md-9" >
		    	<IMG src="../resources/ad/ad-base.png" width="80" height="80">
				<b> Mis anuncios </b><i class="fa fa-eye"></i>
				<IMG src="../resources/ad/ad-find.png" width="80" height="80">
			</div>
		</div>';
		require_once("../db/db.php");
		require_once("../controllers/personas_controller.php");

		$Controlador =new controlador(); 
		$Controlador->user_anuncio($_SESSION["dni_usuario"]);

echo'</div>
		<br>
	</body>';
?>

		    		

				    	

						