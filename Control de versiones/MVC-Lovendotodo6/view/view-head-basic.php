<?php
	echo '<div class="container" style="text-align: center; padding: 10px 0; background-color: #37404f; color: white;">';
	echo '		<div class="row">';
	echo '			<div class="col-md-4">';
					if(!isset($_SESSION["usuario"]))
					{
						/*
						$imagen1="<a href="javascript:PopWindow()">","<img src='imagenes/list.gif' border='0' width='17' height='18'>","</a>";

						echo "<td> ","<a href='RUTA' target='_blank'>","<img src='$imagen1'>","</a>","</td>"; 
						*/
	echo '				<a href="view/view-login.php">
							<img src="resources/user/user-basic.png" width="75" height="75"></img>
							<h4> LOGIN </h4> 
						</a>';
					}

					else 
					{				 
	echo				'<a href="view-user-log.php">
							<img src="resources/images/user/user-basic.png" width="100" height="100"><h7> Bienvenido: '.$_SESSION["usuario"].'</h7> 
						</a>

						<a href="view/body-user-cerrar.php"><img src="resources/images/user/user-del.png" width="80" height="80"><h7> Cerrar Sesion </h7> </a>';				
					}				
	echo '			</div>';
	echo '			<div class="col-md-4">';
	echo '				<a href=""><h1>LOVENDOTO-DO</h1></a>';
	echo '			</div>';
	echo '			<div class="col-md-4">
						<img src="resources/ad/ad-base.png" width="75" height="75">
						<a href="view/view-ad-nolog.php"><h4> ANUNCIOS </h4> </a>';
	echo '			</div>';
	echo '		</div>';
	echo '</div>';
?>


