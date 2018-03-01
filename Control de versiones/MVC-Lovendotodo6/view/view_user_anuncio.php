<?php
            /*echo 'Usuario y datos del anuncio', "<br/>";
            foreach ($datos as $dato) {
                echo $dato["nom"],'<br/>',$dato["titulo"],' | ',$dato["prec_prod"],' | ',$dato["prec_venta"],' | '.$dato["porcentaje"]."<br/>";
                echo $dato["categoria"]."<br/>".$dato["info"]."<br/><br/>";
            }*/
            $n_reg=1;
            foreach ($datos as $dato) {
            echo   '<div class="panel panel-success">
                        <div class="panel-heading"><IMG src="../resources/arrows/arrow-right.png" width="30" height="30" data-toggle="collapse" data-target="#demo'.$n_reg.'">
                            <b>'.$dato["titulo"].'</b>'.' ||<b>  Código : '.$dato["cod_anuncio"].' ||<b>   Propietario : </b>'.$dato["nom"].' '.$dato["ape"].'<b> TLF : </b>'.$dato["tlf"].'</div>
                            <div class="row">
                                <div id="demo'.$n_reg.'" class="collapse">
                                    <div class="col-md-12">
                                        <div class="panel-body"><b>Precio : </b> <span class="label label-primary">'.$dato["prec_prod"].' ||<b> Precio de venta:</b> </b> <span class="label label-primary">'.$dato["prec_venta"].' ||<b> Porcentaje :</b> </b> <span class="label label-primary">'.$dato["porcentaje"].'</span></div>
                                        <div class="panel-body"><b>Categoría : </b> <span class="label label-primary">'.$dato["categoria"].'</span></div>
                                        <div class="panel-body"><b>Información : </b> <span class="label label-primary">'.$dato["info"].'</span></div> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="panel-body"><b>Imagen : </b> <span class="label label-primary">'.$dato["img"].'</span></div> 
                                    </div>
                                </div>
                            </div>
                    </div>';
                    $n_reg=$n_reg+1;
            }
?>
