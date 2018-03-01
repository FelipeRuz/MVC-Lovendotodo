<?php 
	include '../include/header.php'; 
	include "../controllers/personas_controller.php";

	include 'view-head-basic.php';
	echo '<script type="text/javascript" language="javascript" >alert("El usuario ya existe").</script>';
	echo 	'<body style="background-color: #647e98; color: #ffffff;; font-family: "Consolas"; font-size: 16px; letter-spacing: -1px;>
				
				<div class="container" style="background-color: #272f39"; color: #ffffff;>
				<div class="row">
					<div class="col-md-3">
		    		</div>
					<div class="col-md-6">
						<b><h4><IMG src="../resources/ad/ad-add.png" width="80" height="80" data-toggle="collapse" data-target="#login"> CREACION DEL ANUNCIO </h4></b>
		    		</div>
				</div>
				</div>
				<div class="container" style="background-color: #374a6e; color: #ffffff;">
				<form action="vista_user_crear.php" method="POST" enctype="multipart/form-data">
		    		<div class="row">
		    			<div class="col-md-3">
		    			</div>
			    		<div class="col-md-3">  	
							<b>Titulo</b><br>
							<input type="text" name="introtitulo" maxlength="30">
							<br>
							<b>Precio </b><br>
							<input type="text" name="introprecio"  maxlength="10">
							<br>
							<b>Porcentaje de venta </b> <br>
							<input type="text" name="introporcentaje"  maxlength="3">
							<br>
							<td><b>Información</b><td>
							<textarea name="introinfo" maxlength="150" style="width: 332px; height: 102px; resize: none; scroll: yes;" placeholder="Describa el producto..." max-width="90%" min-width="90%"></textarea>
							<br><br>
							<button type="submit" class="btn btn-success" name="bt_guardartodo"><b>Continuar</b></button>
							<button type="cancel" class="btn btn-warning" name="bt_cancelartodo"><b>Cancelar</b></button><br><br>
						</div>
						<br>
						<div class="col-md-3">            
                        	<b>Categoría</b>
                        	<br>
                            	<select name="select_introcat"> 
                                    <option value="1-c">Alimentación</option>
                                    <option value="2-c">Tecnología</option>
                                    <option value="3-c">Entretenimiento</option>
                                    <option value="4-c">Hogar</option>
                                    <option value="5-c">Ropa</option>
                            	</select>
                        </div>                         
						<br>

						<!--<b>Imagen</b><br>
							<input type="file" name="introimagen"  maxlength="15"><br>-->
		    		</div>
		    	</form>
		    	</div>
		    </body>';
		    
?>