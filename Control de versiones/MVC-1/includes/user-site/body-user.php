<!DOCTYPE html>
<html>
	<head>
		<title>Práctica 2017-2018</title>

<?php
	include 'header.php';
	include 'controllers/function/user-function/function-validate-adduser.php';
	include 'controllers/function/control/bd-control-userlog.php';
?>
	</head>
	<BODY style="background-color:#546e7a;">
		<div class="container">
		    <div class="row">
		    <form action='' method="POST" enctype="multipart/form-data">
		    	<div class="panel panel-success">
					<div class="panel-heading"><IMG src="../../resources/images/user/user-basic.png" width="80" height="80" data-toggle="collapse" data-target="#demo"><b> Inicio de usuario</b></div>
					<div id="demo" class="collapse">
	    		 		<div class="panel-body"><b>Usuario</b> <input type="text" name="tb_log_user" class="form-control is-info"?></div>
	    		 		<div class="panel-body"><b>Contraseña</b> <input type="password" name="tb_log_passw" class="form-control is-info"?> </div>
	    		 		<div class="panel-body">
	    		 			<br><button type="submit" class="btn btn-success" name="bt_guardarusu"><b>Continuar</b></button>
							<button type="cancel" class="btn btn-warning" name="bt_cancelarusu"><b>Cancelar</b></button>
							<a href="body-user-log.php"><IMG src="../../resources/images/user/user-basic.png" width="80" height="80"></a>
						</div>
	    		 	</div>      		 	
	    		</div>
	    	</form

	    	<?php
	    		if(isset($_SESSION['sesion'])){
	    			require_once("../../views/user-site/body-user-log.php");
	    		}
				else{
					
					echo'<script type="text/javascript"> alert("Error al logear"); </script>';
					require_once("../../views/user-site/body-user.php");
				}
	    	?>

		    </div>

		    <div class="row">
		    	<div class="panel panel-success">
					<div class="panel-heading"><IMG src="../../resources/images/user/user-add.png" width="80" height="80" data-toggle="collapse" data-target="#demo1"><b>Registro de usuario</b></div>
					<div id="demo1" class="collapse">
					<form action='' method="POST" enctype="multipart/form-data">
					<?php echo Validar($errores); ?> 
						<div class="table-responsive">					
							<table class="table">
								<tr><em><b>[ Los campos marcados con un " * " son opcionales. ]</b></em></tr>
								<tr>
									<td>
										<div class="panel-body"><b>Usuario</b><input type="text" name="tb_introuser" class="form-control is-info"
											<?php if(isset( $_POST["tb_introuser"]))
												{
													echo  "value='{$_POST["tb_introuser"]}'";
												} 
											?> 
										/>            
										<?php echo  Comprobar_Campos($errores, "tb_introuser"); ?> 

										</div>

									</td>
									<td>
										<div class="panel-body"><b>Contraseña</b><input type="password" name="tb_intropass" class="form-control is-info"
										<?php if(isset( $_POST["tb_intropass"]))
												{
													echo  "value='{$_POST["tb_intropass"]}'";
												} 
											?> 
										/>            
										<?php echo  Comprobar_Campos($errores, "tb_intropass"); ?> 
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="panel-body"><b>Nombre</b> <input type="text" name="tb_intronom" class="form-control is-info"
										<?php if(isset( $_POST["tb_intronom"]))
												{
													echo  "value='{$_POST["tb_intronom"]}'";
												} 
											?> 
										/>            
										<?php echo  Comprobar_Campos($errores, "tb_intronom"); ?> 
									</td>
									<td>
										<div class="panel-body"><b>Apellido</b> <input type="text" name="tb_introape" class="form-control is-info"
										<?php if(isset( $_POST["tb_introape"]))
												{
													echo  "value='{$_POST["tb_introape"]}'";
												} 
											?> 
										/>            
										<?php echo  Comprobar_Campos($errores, "tb_introape"); ?> 
										</div>
									</td>
									<td>
										<div class="panel-body"><b>Teléfono</b><input type="text" name="tb_introtlf" class="form-control is-info"
										<?php if(isset( $_POST["tb_introtlf"]))
												{
													echo  "value='{$_POST["tb_introtlf"]}'";
												} 
											?> 
										/>            
										<?php echo  Comprobar_Campos($errores, "tb_introtlf"); ?> 
										</div>
									</td>
									<td>
										<div class="panel-body"><b>DNI</b><input type="text" name="tb_introDNI" class="form-control is-info"
										<?php if(isset( $_POST["tb_introDNI"]))
												{
													echo  "value='{$_POST["tb_introDNI"]}'";
												} 
											?> 
										/>            
										<?php echo  Comprobar_Campos($errores, "tb_introDNI"); ?> 
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="panel-body"><b>Dirección</b><input type="text" name="tb_introdir" class="form-control is-info"
										<?php if(isset( $_POST["tb_introdir"]))
												{
													echo  "value='{$_POST["tb_introdir"]}'";
												} 
											?> 
										/>            
										<?php echo  Comprobar_Campos($errores, "tb_introdir"); ?> 
									</td>
									<td>
										<div class="panel-body"><b>Código Postal</b><input type="text" name="tb_introcp" class="form-control is-info"
										<?php if(isset( $_POST["tb_introcp"]))
												{
													echo  "value='{$_POST["tb_introcp"]}'";
												} 
											?> 
										/>            
										<?php echo  Comprobar_Campos($errores, "tb_introcp"); ?> 
										</div>
									</td>
									<td>
										<div class="panel-body"><b>Población</b><input type="text" name="tb_intropobl" class="form-control is-info"
										<?php if(isset( $_POST["tb_intropobl"]))
												{
													echo  "value='{$_POST["tb_intropobl"]}'";
												} 
											?> 
										/>            
										<?php echo  Comprobar_Campos($errores, "tb_intropobl"); ?> 
										</div>
									</td>					
									<td>
										<div class="panel-body"><b>Provincia</b> <input type="text" name="tb_introprov" class="form-control is-info"
										<?php if(isset( $_POST["tb_introprov"]))
												{
													echo  "value='{$_POST["tb_introprov"]}'";
												} 
											?> 
										/>            
										<?php echo  Comprobar_Campos($errores, "tb_introprov"); ?> 
									</td>
								</tr>
								<tr>
									<td>
										<div class="panel-body"><b>Twitter *</b><input type="text" name="tb_introtw" class="form-control is-info"
										<?php if(isset( $_POST["tb_introtw"]))
												{
													echo  "value='{$_POST["tb_introtw"]}'";
												} 
											?> 
										/>            
										<?php echo  Comprobar_Campos($errores, "tb_introtw"); ?> 
									</td>
									<td>
										<div class="panel-body"><b>Blog *</b><input type="text" name="tb_introblog" class="form-control is-info"
										<?php if(isset( $_POST["tb_introblog"]))
												{
													echo  'value="' . $_POST["tb_introblog"] . '"';
												} 
											?> 
										/>
										           
										<?php echo  Comprobar_Campos($errores, "tb_introblog"); ?> 
									</td>
									<td>
										<div class="panel-body"><b>EMAIL </b><input type="text" name="tb_introemail" class="form-control is-info"
										<?php if(isset( $_POST["tb_introemail"]))
												{
													echo  "value='" . $_POST["tb_introemail"] . "'";
												} 
											?> 
										/>
										           
										<?php echo  Comprobar_Campos($errores, "tb_introemail"); ?> 
									</td>
								</tr>
							</table>

							<button type="submit" class="btn btn-success" name="bt_guardarusu"><b>Guardar</b></button>
							<button type="cancel" class="btn btn-warning" name="bt_cancelarusu"><b>Cancelar</b></button>
						</div>
	    		 		</form>
	    		 	</div>       		 	
	    		</div>
	    	</div>
		</div>
	</BODY>
</html>

		    		

	