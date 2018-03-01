<?php
	echo '<div class="container" style="text-align: center; padding: 10px 0; background-color: #37404f; color: white;">';
	echo '		<div class="row">';
	echo '			<div class="col-md-4">';
					if(!isset($_SESSION["usuario"]))
					{
	echo '				<a href="view-login.php">
							<img src="../resources/user/user-basic.png" width="75" height="75"></img>
							<h4> LOGIN </h4> 
						</a>';
					}

					else 
					{				 
	echo				'<a href="view-user-log.php">
							<img src="../resources/user/user-basic.png" width="60" height="60"><h7> Bienvenido: '.$_SESSION["usuario"].'</h7> 
						</a>
						<br>
						<a href="body-user-cerrar.php"><img src="../resources/user/user-del.png" width="60" height="60"><h7> Cerrar Sesion </h7> </a>';				
					}	
								
	echo '			</div>';
	echo '			<div class="col-md-4">';
	echo '				<a href="view-body-basic"><h1>LOVENDOTO-DO</h1></a>';
	echo '			</div>';
	echo '			<div class="col-md-4">
						<img src="../resources/ad/ad-base.png" width="75" height="75">
						<a href="view-ad-nolog.php"><h4> ANUNCIOS </h4> </a>';
	echo '			</div>';
	echo '		</div>';
	echo '</div>';
?>


