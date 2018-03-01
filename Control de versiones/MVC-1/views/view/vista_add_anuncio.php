<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Personas</title>
    </head>
    <body>
        <?php
            include "../../includes/header.php";
           /* echo 'Usuario | Pass', "<br/>";
            foreach ($datos as $dato) {
                echo $dato["user"],' | ',$dato["pass"]."<br/>";
            }*/
    echo '<body style="background-color:#546e7a;">';
    echo    '<div class="container" style="background-color:#bbb;">';
        echo    '<h1><IMG src="../../resources/images/ad/ad-add.png" width="80" height="80">Añadir usuario</h1>
            </div>';

        echo    '<div class="container" style="background-color:#ccc;">';
        echo    '   <form method="get" action="" >
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
                                <select name="select_introcat"> 
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

        $tit_intro = $_GET["tb_introtitulo"];
        $prec_intro = $_GET["tb_introprec"];
        $porc_intro = $_GET["tb_introporc"];

        switch ("select_introcat") {
            case '1-c':
                $categ_intro = $_GET["Alimentación"];
                break;

            case '2-c':
                $categ_intro = $_GET["Tecnología"];
                break;

            case '3-c':
                $categ_intro = $_GET["Entretenimiento"];
                break;

            case '4-c':
                $categ_intro = $_GET["Hogar"];
                break;

            case '5-c':
                $categ_intro = $_GET["Ropa"];
                break;
        }

        $info_intro = $_GET["tb_introinfo"];

        if ( isset($_POST["submit"]) && !empty($_POST[""])) {
            $controlador =new controlador(); 
            $controlador->add_anuncios(/*Pasarle el DNI a traves del $_SESSION*/$dni_creador,$tit_intro,$prec_intro,$porc_intro,$categ_intro,$info_intro);
        }
        else{

        }

        ?>
    </body>
</html>