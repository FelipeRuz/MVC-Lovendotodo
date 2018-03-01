<!DOCTYPE html>
<html>
	<head>
		<title>Práctica 2017-2018</title>

<?php
	include '../../includes/header.php';
?>

	</head>
	<BODY style="background-color:#546e7a;">
		<!--REGION DE ANUNCIO-->
			<div class="container" style="background-color:#bbb;">
				<div class='col-md-6 col-center'>
					<IMG src="../../resources/images/ad/ad-base.png" width="80" height="80">
					<div class="btn-group">
					  	<button type="button" class="btn btn-primary" data-toggle="dropdown"> ANUNCIOS <span class="caret"></span></button>
					</div>		
				</div>
			</div>

			<div class="container" style="background-color:#ccc;">
				<div class="row">
					<div class="col-md-4">
						<IMG src="../../resources/images/ad/ad-add.png" width="80" height="80" data-toggle="collapse" data-target="#demo4">
						<b> Añadir anuncio</b>
				    </div>			

					<div class="col-md-4">
				    	<IMG src="../../resources/images/ad/ad-del.png" width="80" height="80" data-toggle="collapse" data-target="#demo7">
						<b> Borrar anuncio</b>
					</div>
				</div>
			</div>
			<br>
			<div class="container" style="background-color:#ccc;">
				<div class="row">
					<div class="col-md-3" >
				    	<IMG src="../../resources/images/ad/ad-find.png" width="80" height="80" data-toggle="collapse" data-target="#demo7">
						<b> Buscar por...  </b><i class="fa fa-eye"></i>
					</div>
					
					<div class="col-md-3" >
					<br>
						<label><b> Categoria </b></label>
						<select name="select_cat"> 
						  	<option value="1-c">Alimentación</option>
                            <option value="2-c">Tecnología</option>
                            <option value="3-c">Entretenimiento</option>
                            <option value="4-c">Hogar</option>
                            <option value="5-c">Ropa</option>
						</select>
					</div>
					
					<div class="col-md-3" >
						<br>
						<label><b> Precio </b></label>
						<select name="select_prec">
  							<option value="1-p">Busqueda <= Precio</option> 
						  	<option value="2-p">Busqueda >= Precio </option>
						</select>
				    </div>
				</div>
			</div>
			<br>
			<br>
			<div class="container" style="background-color:#eee;">
			<?php 	
					require_once("../../db/db.php");
					require_once("../../controllers/personas_controller.php");
					$controlador =new controlador(); 
					$controlador->user_anuncio('48948743m') ;
			?>
			</div>
	</BODY>
</html>

		    		

				    	

						