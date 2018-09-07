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
            <!=======================================
            VISOR DE PRODUCTOS
            ========================================>
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
            </div>

            <!=======================================
                        PRODUCTO
            ========================================>
            <div class="col-md-7 col-sm-6 col-xs-12 ">

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