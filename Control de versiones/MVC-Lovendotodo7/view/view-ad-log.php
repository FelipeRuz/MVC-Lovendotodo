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
		</div>
		<div class="container" style="background-color:#374a6e;">
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
<!--	<div class="container" style="background-color:#456ba4;">
		<div class="row" style="background-color:#374a6e; color: #ffffff;">
			<div class="col-md-3" >
		    	<IMG src="../resources/ad/ad-find.png" width="80" height="80" data-toggle="collapse" data-target="#demo7">
				<b> Buscar por...  </b><i class="fa fa-eye"></i>
			</div>
		</div>
		<div class="row">
			<form action="" method="POST" enctype="multipart/form-data">	
				<div class="col-md-12">
					<label><b> Categoria </b></label>
					<select name="select_cat"> 
					  	<option value="1-c">Alimentación</option>
	                    <option value="2-c">Tecnología</option>
	                    <option value="3-c">Entretenimiento</option>
	                    <option value="4-c">Hogar</option>
	                    <option value="5-c">Ropa</option>
	                    <option value="6-p">Busqueda <= Precio</option> 
					  	<option value="7-p">Busqueda >= Precio </option>
					</select>

			    	<label><b> Precio </b></label>
					<select name="select_prec">
						<option value="1-p">Busqueda <= Precio</option> 
					  	<option value="2-p">Busqueda >= Precio </option>
					</select>	
			    	<input type="button" class="btn btn-info" type="submit" name="bt_buscar" value="Buscar">
			  </div>
			</form>
		</div>
		<br>
	</div>	-->
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

		    		

				    	

						