<?php
        include "../include/header.php";
        include 'view-head-basic.php';
       /* echo 'Usuario | Pass', "<br/>";
        foreach ($datos as $dato) {
            echo $dato["user"],' | ',$dato["pass"]."<br/>";
        }*/
    echo    '<body style="background-color:#546e7a;">
                <div class="container" style="background-color:#272f39;">
                    <h1><IMG src="../../resources/images/ad/ad-add.png" width="80" height="80">Añadir anuncio</h1>
                </div>

                <div class="container" style="background-color:#ccc;">
            <form method="POST" action="vista_ad_crear.php" >
                    <div class="row">
                        <div class="col-md-4">
                            <b>Titulo</b>
                            <input type="text" name="tb_introtitulo" maxlength="30" class="form-control is-info"> 
                        </div>                          
                    </div>        
                    <div class="row">
                        <div class="col-md-4">
                            <b>Precio </b>
                            <input type="text" name="tb_introprec" class="form-control is-info">
                        </div>
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-4">
                            <b>Porcentaje de venta </b> 
                            <input type="text" name="tb_introporc" class="form-control is-info"> 
                        </div>                          
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <b>Categoría</b>
                            <select multiple name="introcategoria[]"> 
                                <option value="1-c">Alimentación</option>
                                <option value="2-c">Tecnología</option>
                                <option value="3-c">Entretenimiento</option>
                                <option value="4-c">Hogar</option>
                                <option value="5-c">Ropa</option>
                            </select>
                        </div>
                        <div class="col-md-1">
                        </div>
                    <div class="col-md-1">
                        <td><b>Información</b><td>
                    </div>
                        <div class="col-md-3">
                            <textarea name="tb_introinfo" maxlength="150" style="width: 332px; height: 102px; resize: none; scroll: yes;" placeholder="Describa el producto..." max-width="90%" min-width="90%"></textarea>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <button type="submit" class="btn btn-success" name="bt_guardarad"><b>Guardar</b></button>
                        <button type="cancel" class="btn btn-warning" name="bt_cancelarad"><b>Cancelar</b></button></div>
                        <br>
                    </div>
            </form>
                </div>
            </body>';

?>
