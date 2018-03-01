<!DOCTYPE html>
<html>
	<head>
		<title>Práctica 2017-2018</title>
<?php
	include '../header.php';
?>
	</head>
	<BODY style="background-color:#546e7a;">
	<div class="container" style="background-color:#bbb;">
		<div class='col-md-6 col-center'>
				<IMG src="../../resources/images/user/user-basic.png" width="80" height="80">

				<button type="button" class="btn btn-primary" data-toggle="dropdown"> PERFIL<span class="caret"></span></button>
				  	<ul class="dropdown-menu" role="menu">
						<li><a href="#">CERRAR SESIÓN</a></li>
				  	</ul>	
		</div>
	</div>
		<div class="container" style="background-color:#ccc;">
			<div class="col-md-12 col-center">
				<div class="row">
					<div class="panel panel-success">
						<div class="panel-heading"><IMG src="../../resources/images/user/user-basic.png" width="80" height="80" data-toggle="collapse" data-target="#demo">
						<b> Datos del usuario</b></div>
						<div id="demo" class="collapse">
		    		 		<div class="panel-body" bgcolor="#ccc"><b>Usuario : </b> <span class="label label-primary">"NOMBRE USUARIO"</span></div>
		    		 		<div class="panel-body"><b>Nombre : </b> <span class="label label-primary">"NOMBRE REAL"</span></div>
		    		 		<div class="panel-body"><b>Apellidos : </b> <span class="label label-primary">"APELLIDO REAL"</span></div>
		    		 		<div class="panel-body"><b>E-Mail : </b> <span class="label label-primary">"E-MAIL"</span></div>
		    		 		<div class="panel-body"><b>DNI : </b> <span class="label label-primary">"DNI"</span></div>
		    		 		<div class="panel-body"><b>Código postal : </b> <span class="label label-primary">"DIRECCIÓN REAL"</span></div>
		    		 		<div class="panel-body"><b>Dirección : </b> <span class="label label-primary">"DIRECCIÓN REAL"</span></div>
		    		 		<div class="panel-body"><b>Población : </b> <span class="label label-primary">"POBLACIÓN"</span></div>
		    		 		<div class="panel-body"><b>Provincia : </b> <span class="label label-primary">"PROVINCIA"</span></div>
		    		 		<div class="panel-body"><b>Twitter : </b> <span class="label label-primary">"@TWITTER"</span></div>
		    		 		<div class="panel-body"><b>Blogg : </b> <span class="label label-primary">"BLOGG"</span></div>
		    		 	</div>  
			    	</div> 
				</div>
				<div class="row">
					<div class="panel panel-success">
						<div class="panel-heading"><IMG src="../../resources/images/user/user-edit.png" width="80" height="80" data-toggle="collapse" data-target="#demo1">
						<b> Editar datos del usuario</b></div>

						<div id="demo1" class="collapse">
		 					<table class="table">
								<tr>
									<td><div class="panel-body"><b>Usuario</b><input type="text" name="tb_introuser" class="form-control is-info"></div></td>
									<td><div class="panel-body"><b>Contraseña</b><input type="text" name="tb_intropass" class="form-control is-info"></div></td>
								</tr>
								<tr>
									<td><div class="panel-body"><b>Nombre</b> <input type="text" name="tb_intronom" class="form-control is-info"></td>
									<td><div class="panel-body"><b>Apellido</b> <input type="text" name="tb_introape" class="form-control is-info"></div></td>
									<td><div class="panel-body"><b>Teléfono</b><input type="text" name="tb_introtlf" class="form-control is-info"></div></td>
									<td><div class="panel-body"><b>DNI</b><input type="text" name="tb_introDNI" class="form-control is-info"></div></td>
								</tr>
								<tr>
									<td><div class="panel-body"><b>Dirección</b><input type="text" name="tb_introdir" class="form-control is-info"></td>
									<td><div class="panel-body"><b>Código Postal</b><input type="text" name="tb_introcp" class="form-control is-info"></div></td>
									<td><div class="panel-body"><b>Población</b><input type="text" name="tb_intropobl" class="form-control is-info"></div></td>					
									<td><div class="panel-body"><b>Provincia</b> <input type="text" name="tb_introprov" class="form-control is-info"></td>
								</tr>
								<tr>
									<td><div class="panel-body"><b>E-mail </b><input type="text" name="tb_introemail" class="form-control is-info"></td>
									<td><div class="panel-body"><b>Twitter </b><input type="text" name="tb_introtw" class="form-control is-info"></td>
									<td><div class="panel-body"><b>Blog </b><input type="text" name="tb_introblog" class="form-control is-info"></div></td>
								</tr>
								<tr>
									<td>
										<button type="button" class="btn btn-success" name="bt_guardarusu"><b>Guardar</b></button>
										<button type="button" class="btn btn-warning" name="bt_cancelarusu"><b>Cancelar</b></button>
									</td>
								</tr>						
							</table>
						</div> 					    
					</div> 
				</div>

				<div class="row">
					<div class="panel panel-success">
						<div class="panel-heading"><IMG src="../../resources/images/user/user-del.png" width="80" height="80" data-toggle="collapse" data-target="#demo2">
						<b> Borrar usuario</b></div>

						<div id="demo2" class="collapse">
		 					<table class="table">
								<tr>
									<td><div class="panel-body"><b>Usuario</b><input type="text" name="tb_introuser" class="form-control is-info"></div></td>
									<td><div class="panel-body"><b>Contraseña</b><input type="text" name="tb_intropass" class="form-control is-info"></div></td>
								</tr>	
								<tr>
									<td>
										<button type="button" class="btn btn-success" name="bt_guardarusu"><b>Guardar</b></button>
										<button type="button" class="btn btn-warning" name="bt_cancelarusu"><b>Cancelar</b></button>
									</td>
								</tr>					
							</table>
						</div> 					    
					</div> 
				</div>
			</div>
		</div>

		<!--REGION DE ANUNCIO-->
			<div class="container" style="background-color:#bbb;">
				<div class='col-md-6 col-center'>
					<IMG src="../../resources/images/ad/ad-base.png" width="80" height="80">
					<div class="btn-group">
					  	<button type="button" class="btn btn-primary"> ANUNCIOS </button>
					</div>		
				</div>
			</div>

			<div class="container" style="background-color:#ccc;">
				<div class="row">
					<div class="col-md-4">
						<a href="../ad-site/body-ad-log.php"><IMG src="../../resources/images/ad/ad-base.png" width="80" height="80" data-toggle="collapse" data-target="#demo3">
						<b> Tus anuncios</b></a>
					</div>

					<div class="col-md-4">
						<div class="panel-heading"><IMG src="../../resources/images/ad/ad-add.png" width="80" height="80" data-toggle="collapse" data-target="#demo4">
							<b> Añadir anuncio</b></div>

							<div id="demo4" class="collapse">
			 					<table class="table">
									<tr>
										-Acceso a la página de anuncios del usuario-
									</tr>								
								</table>
							</div> 
					</div> 
				

					<div class="col-md-4">
						<div class="panel panel-success">
							<div class="panel-heading"><IMG src="../../resources/images/ad/ad-edit.png" width="80" height="80" data-toggle="collapse" data-target="#demo5">
							<b> Editar anuncio</b></div>

							<div id="demo5" class="collapse">
			 					<table class="table">
									<tr>
										-Acceso a la página de anuncios del usuario-
									</tr>								
								</table>
							</div> 					    
						</div> 
					</div>
				</div>
			</div>

			<div class="container" style="background-color:#ccc;">
				<div class="row">
					<div class="col-md-4">
						<div class="panel panel-success">
							<div class="panel-heading"><IMG src="../../resources/images/ad/ad-find.png" width="80" height="80" data-toggle="collapse" data-target="#demo6">
							<b> Buscar anuncios</b></div>
							<div id="demo6" class="collapse">
									mostrar en otra pantalla
			    		 	</div>  
				    	</div>
				    </div>

					<div class="col-md-4">
						<div class="panel-heading"><IMG src="../../resources/images/ad/ad-del.png" width="80" height="80" data-toggle="collapse" data-target="#demo7">
							<b> Borrar anuncio</b></div>

							<div id="demo7" class="collapse">
			 					<table class="table">
									<tr>
										-Acceso a la página de anuncios del usuario-
									</tr>								
								</table>
							</div> 
					</div> 
				</div>
			</div>
		</div>
	</BODY>
</html>

		    		

				    	

						