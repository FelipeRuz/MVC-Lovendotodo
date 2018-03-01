<!DOCTYPE html>
<html>
	<head>
		<title>Práctica 2017-2018</title>

	</head>
<?php
	include '../include/header.php';

	include 'view-head-basic.php';

echo	'
	<body style="background-color:#647e98; color: white; font-family: "Consolas"; ">
	<div class="container" style="background-color:#272f39;">
				<div class="col-md-6 col-center">
					<IMG src="../resources/user/user-basic.png" width="80" height="80">
					<div class="btn-group">
					  	<button type="button" class="btn btn-primary" data-toggle="dropdown"> ADMINISTRADOR <span class="caret"></span></button>
					</div>		
				</div>
		</div>
		<div class="container" style="background-color:#374a6e;">
			<!--	<div class="row">
					<div class="col-md-12">
						<IMG src="../resources/ad/ad-add.png" width="80" height="80">
						<a href="../view/vista_add_anuncio.php"><IMG src="../../resources/images/ad/ad-add.png" width="80" height="80">
						<b> Añadir anuncio</b></a>
				    </div>			
				</div>-->
			</div>
			<br>
			<div class="container" style="background-color:#456ba4; ">
				<div class="row" style="background-color:#374a6e;">
					<div class="col-md-12" >
						<IMG src="../resources/user/user-del.png" width="80" height="80">
						<b>Borrar usuario</b>
					</div>
				</div>

				<div class="row">
					<form action="" method="POST" enctype="multipart/form-data">
							<div class="col-md-12">
			                    <b>Nick del usuario :</b>
								<input type="text" name="tb_intro_nick_del" class="form-control is-info">

								<b>DNI del usuario :</b>
								<input type="text" name="tb_intro_dni_del" class="form-control is-info">

                          		<br>
                          	</div>
							<div class="col-md-12">
	                        	<button type="button" class="btn btn-success" name="bt_guardarusu"><b>Guardar</b></button>
	                        	<button type="button" class="btn btn-warning" name="bt_cancelarusu"><b>Cancelar</b></button> 
	                  		</div>
					</form>
				</div>
				<br>
			</div>
		</div>
	</div>
	<br>
	<div class="container" style="background-color:#456ba4;">
		<div class="row" style="background-color:#374a6e; color: #ffffff;">
			<div class="col-md-3" >
		    	<IMG src="../resources/user/user-find.png" width="80" height="80" data-toggle="collapse" data-target="#demo7">
				<b> Buscar por...  </b><i class="fa fa-eye"></i>
			</div>
		</div>
		<div class="row">
			<form action="" method="POST" enctype="multipart/form-data">	
				<div class="col-md-12">
					<label><b> Categoria de búsqueda </b></label>
					<select name="select_cat"> 
					  	<option value="1-c">DNI</option>
	                    <option value="2-c">NOMBRE</option>
	                    <option value="3-c">APELLIDO</option>
	                    <option value="4-c">USUARIO</option>
					</select>
					<br>
					<br>
					<label><b> Escriba el parámetro de búsqueda </b></label>
					<input type="text" name="tb_intro_busq" class="form-control is-info">
					<br>
			    	<input type="button" class="btn btn-info" name="bt_buscar" value="Buscar">
			  </div>
			</form>
		</div>
		<br>
	</div>
		
	<div class="container" style="background-color:#456ba4; color: #ffffff;">
		<div class="row" style="background-color:#374a6e;">
			<div class="col-md-9" >
		    	<IMG src="../resources/user/user-basic.png" width="80" height="80">
				<b> Todos los usuarios  </b>
				<IMG src="../resources/user/user-find.png" width="80" height="80">
			</div>
		</div>';
		require_once("../db/db.php");
		require_once("../controllers/personas_controller.php");

		$Controlador =new controlador(); 
		$Controlador->user_all();

echo'</div>
		<br>
	</body>';
?>

		    		

				    	

						