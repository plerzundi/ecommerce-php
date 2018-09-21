<?php

$servidor = Ruta::ctrRutaServidor();
$url = Ruta::ctrRuta();

?>


<!=======================================
BREADCRUMB INFO-PRODUCTOS
========================================>
<div class="container-fluid well well-sm">
    <div class="container">
        <div class="row">
            <ul class="breadcrumb fondoBreadcrumb text-uppercase">

                <li><a href="<?php echo $url; ?>">INICIO</a></li>
                <li class="active pagActiva"><?php echo $rutas[0]; ?></li>

            </ul>
        </div>
    </div>
</div>

<!=======================================
INFO-PRODUCTOS
========================================>
<div class="container-fluid infoproducto">
    <div class="container">
        <div class="row">
            <?php
            /*==================================
                VISOR DE IMAGENES
            ===================================*/
            $item= "ruta";
            $valor=$rutas[0];
            $infoproducto = ControladorProductos::ctrMostrarInfoProducto($item,$valor);

            if ($infoproducto["tipo"] == "fisico"){
                echo '
                   <div class="col-md-5 col-sm-6 col-xs-12 visorImg">
                <figure class="visor">
                    <img id="lupa1" class="img-thumbnail"
                         src="http://localhost/backend/vistas/img/multimedia/tennis-verde/img-01.jpg"
                         alt="tennis verde 11">
                    <img id="lupa2" class="img-thumbnail"
                         src="http://localhost/backend/vistas/img/multimedia/tennis-verde/img-02.jpg"
                         alt="tennis verde 11">
                    <img id="lupa3" class="img-thumbnail"
                         src="http://localhost/backend/vistas/img/multimedia/tennis-verde/img-03.jpg"
                         alt="tennis verde 11">
                    <img id="lupa4" class="img-thumbnail"
                         src="http://localhost/backend/vistas/img/multimedia/tennis-verde/img-04.jpg"
                         alt="tennis verde 11">
                    <img id="lupa5" class="img-thumbnail"
                         src="http://localhost/backend/vistas/img/multimedia/tennis-verde/img-05.jpg"
                         alt="tennis verde 11">
                </figure>

                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <img value="1" class="img-thumbnail"
                                 src="http://localhost/backend/vistas/img/multimedia/tennis-verde/img-01.jpg"
                                 alt="tennis verde 11"/>
                        </li>
                        <li>
                            <img value="2" class="img-thumbnail"
                                 src="http://localhost/backend/vistas/img/multimedia/tennis-verde/img-02.jpg"
                                 alt="tennis verde 11"/>
                        </li>
                        <li>
                            <img value="3" class="img-thumbnail"
                                 src="http://localhost/backend/vistas/img/multimedia/tennis-verde/img-03.jpg"
                                 alt="tennis verde 11"/>
                        </li>
                        <li>
                            <img value="4" class="img-thumbnail"
                                 src="http://localhost/backend/vistas/img/multimedia/tennis-verde/img-04.jpg"
                                 alt="tennis verde 11"/>
                        </li>
                        <li>
                            <img value="5" class="img-thumbnail"
                                 src="http://localhost/backend/vistas/img/multimedia/tennis-verde/img-05.jpg"
                                 alt="tennis verde 11"/>
                        </li>
                    </ul>
                </div>
            </div>';
            }else{

                /*=======================================
                VISOR DE VÍDEOS
                ========================================*/

                echo '<div class="col-sm-6 col-xs-12 visorImg">
                    <iframe class="videoPresentacion" src="https://www.youtube.com/embed/AlhJsZ1EBIU?rel=0&autoplay=1" frameborder="0" width="100%" allowfullscreen>
                    </iframe>
                    </div>
                ';

            }
            ?>

            <!=======================================
                        PRODUCTO
            ========================================>

            <?php
            if ($infoproducto["tipo"] == "fisico"){

                echo '<div class="col-md-7 col-sm-6 col-xs-12 ">';

            }else{

                echo '<div class="col-sm-6 col-xs-12 ">';

            }

            ?>


                <!=======================================
                    REGRESAR EN LA TIENDA
                ========================================>
                <div class="col-xs-6">
                    <h6>
                        <a href="javascript:history.back()" class="text-muted">
                            <i class="fa fa-reply"></i> Continuar Comprando
                        </a>
                    </h6>
                </div>

                <!=======================================
                 COMPARTIR EN REDES SOCIALES
                ========================================>
                <div class="col-xs-6">
                    <h6><a class="dropdown-toggle pull-right text-muted" data-toggle="dropdown" href="#"><i
                                    class="fa fa-plus"></i>
                            Compartir</a>

                        <ul class="dropdown-menu pull-right compartirRedes">
                            <li>
                                <p class="btnFacebook">
                                    <i class="fa fa-facebook"></i>
                                    Facebook
                                </p>
                            </li>

                            <li>
                                <p class="btnGoogle">
                                    <i class="fa fa-google"></i>
                                    Google
                                </p>
                            </li>
                        </ul>
                    </h6>
                </div>
                <div class="clear-fix"></div>
                <!=======================================
                    ESPACIO PARA EL PRODUCTO
                ========================================>




                <!=======================================
                ZONA LUPA
                ========================================>
                <figure class="lupa">
                    <img src="">
                </figure>

            </div>

        </div>
    </div>
</div>