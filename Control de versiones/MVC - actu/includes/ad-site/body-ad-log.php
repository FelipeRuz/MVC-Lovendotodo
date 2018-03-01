<!DOCTYPE html>
<html>
	<head>
		<title>Práctica 2017-2018</title>

<?php
	include '../header.php';
?>

	</head>
	<BODY style="background-color:#546e7a;">
		<!--REGION DE ANUNCIO-->
			<div class="container" style="background-color:#bbb;">
				<div class='col-md-6 col-center'>
					<IMG src="../../resources/images/ad/ad-base.png" width="80" height="80">
					<div class="btn-group">
					  	<button type="button" class="btn btn-primary" data-toggle="dropdown"> ANUNCIOS<span class="caret"></span></button>
					  	<ul class="dropdown-menu" role="menu">
							<li><a href="#">Recargar</a></li>
				  		</ul>
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
			<div class="container" ">
				<div class="row">
					<div class="col-md-6" style="background-color:#eee;">
				    	<IMG src="../../resources/images/ad/ad-find.png" width="80" height="80" data-toggle="collapse" data-target="#demo7">
						<b> Buscar anuncio  </b><i class="fa fa-eye"></i>
						<select name="select">
  							<option value="1">Categoría</option> 
						  	<option value="2">Busqueda <= Precio </option>
						 	<option value="3">Busqueda >= Precio</option>
						</select>
						
				    </div>
				</div>
				<div class="row">
					<div class="col-md-6 col-left" style="background-color:#fff;">
						<input type="text" name="tb_busqprod" placeholder="Valor" class="form-control is-info">
					</div> 
				</div>
			</div>
			<br>
			<div class="container" style="background-color:#eee;">
				<iframe id="pantalla_anuncio" src="" height="100%" width="100%" marginwidth="10px" marginheigth="10px" scrolling="yes">
					
				</iframe>
			</div>
	</BODY>
</html>

		    		

				    	

						