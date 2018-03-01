<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Personas</title>
    </head>
    <body>
        <?php
            
           /* echo 'Datos del anuncio', "<br/>";
            foreach ($datos as $dato) {
                echo $dato["titulo"],' | ',$dato["prec_prod"],' | ',$dato["prec_venta"],' | '.$dato["porcentaje"]."<br/>";
                echo $dato["categoria"]."<br/>".$dato["info"]."<br/><br/>";
            }*/
        $n_reg=1;
        foreach ($datos as $dato) {
        echo   '<div class="panel panel-success">
                    <div class="panel-heading"><IMG src="../resources/arrows/arrow-right.png" width="30" height="30" data-toggle="collapse" data-target="#demo_anuncio1'.$n_reg.'">
                        <b> '.$dato["user"].'</b> ||<b> '.$dato["ape"].'</b> ||<b> '.$dato["nom"].'</b>||<b> '.$dato["fecha_reg"].'</b></div>
                        <div class="row">
                            <div id="demo_anuncio1'.$n_reg.'" class="collapse">
                                <div class="col-md-12">
                                    <div class="panel-body">
                                    <b> DNI: '.$dato["dni"].'</b> ||<b> TLF: '.$dato["tlf"].'</b> ||<b> Correo: '.$dato["email"].'<br><b> Dirección: '.$dato["poblacion"].'</b>;<b> '.$dato["provincia"].'</b>; <b> '.$dato["direccion"].'</b> ||<b> CP: '.$dato["cp"].'</b> . 
                                </div>
                            </div>
                        </div>
                    </div>';
                $n_reg=$n_reg+1;
        }
        ?>
    </body>
</html>
