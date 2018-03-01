<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Personas</title>
    </head>
    <body>
        <?php
            include "../../includes/header.php";
            /*echo 'Usuario | DNI', "<br/>";
            foreach ($datos as $dato) {
                echo $dato["nom"],' | ',$dato["ape"],'<br>';
                echo $dato["dni"],' | ',$dato["user"],' | ',$dato["pass"],' | ',$dato["tlf"],' | ', $dato["email"]."<br/>";
                echo $dato["direccion"],' | ',$dato["poblacion"],' | ',$dato["provincia"],' | ',$dato["cp"],' | ', $dato["pass"]."<br/>";
                echo $dato["twitter"],' | ',$dato["blog"],'<br><br>';
            }*/
        foreach ($datos as $dato) {
        echo   '<div class="panel panel-success">
                    <div class="panel-heading"><IMG src="../../resources/images/user/user-basic.png" width="80" height="80" data-toggle="collapse" data-target="#demo">
                        <b> Datos del usuario</b></div>
                        <div id="demo" class="collapse">

                        <div class="panel-body" bgcolor="#ccc"><b>Usuario : </b> <span class="label label-primary">'.$dato["user"].'</span></div>
                            <div class="panel-body"><b>Nombre : </b> <span class="label label-primary">'.$dato["nom"].'</span></div>
                            <div class="panel-body"><b>Apellidos : </b> <span class="label label-primary">'.$dato["ape"].'</span></div>
                            <div class="panel-body"><b>E-Mail : </b> <span class="label label-primary">'.$dato["email"].'</span></div>
                            <div class="panel-body"><b>DNI : </b> <span class="label label-primary">'.$dato["dni"].'</span></div>
                            <div class="panel-body"><b>Código postal : </b> <span class="label label-primary">'.$dato["cp"].'</span></div>
                            <div class="panel-body"><b>Dirección : </b> <span class="label label-primary">'.$dato["direccion"].'</span></div>
                            <div class="panel-body"><b>Población : </b> <span class="label label-primary">'.$dato["poblacion"].'</span></div>
                            <div class="panel-body"><b>Provincia : </b> <span class="label label-primary">'.$dato["provincia"].'</span></div>
                            <div class="panel-body"><b>Twitter : </b> <span class="label label-primary">'.$dato["twitter"].'</span></div>
                            <div class="panel-body"><b>Blogg : </b> <span class="label label-primary">'.$dato["blog"].'</span></div>
                        </div>
                </div>';
            }
        ?>
    </body>
</html>


