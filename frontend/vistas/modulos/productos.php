<?php
$servidor = Ruta::ctrRutaServidor();
$url = Ruta::ctrRuta();
?>
<!--==========================================
        BANNER
===========================================-->
<figure class="banner">
    <img src="http://localhost/backend/vistas/img/banner/default.jpg" class="img-responsive" width="100%">
    <div class="textoBanner textoDer">
        <h1 style="color:#fff">OFERTAS ESPECIALES</h1>
        <h2 style="color:#fff"><strong>50% OFF</strong></h2>
        <h3 style="color:#fff">Termina el 31 de octubre 2018.</h3>
    </div>
</figure>


<!--==========================================
        BARRA DE PRODUCTO
===========================================-->

<div class="container-fluid well well-sm barraProductos">
    <div class="container">
        <div class="row">

            <div class="col-sm-6 col-xs-12">
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        Ordenar Productos <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Más recientes</a></li>
                        <li><a href="#">Más antiguos</a></li>

                    </ul>
                </div>
            </div>

            <div class=" col-sm-6 col-xs-12 organizarProductos">
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-default btnGrid" id="btnGrid0">
                        <i class="fa fa-th" aria-hidden="true"></i>
                        <span class=" col-xs-0 pull-right"> GRID</span>
                    </button>

                    <button type="button" class="btn btn-default btnList" id="btnList0">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <span class=" col-xs-0 pull-right"> LIST</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


<!--==========================================
              LISTAR PRODUCTOS
===========================================-->
<div class="container-fluid productos">
    <div class="container">
        <div class="row">
            <!--==========================================
                            BREADCRUMB
            ===========================================-->

            <ul class="breadcrumb fondoBreadcrumb  text-uppercase">
                <li><a href="<?php echo $url; ?>">INICIO</a></li>
                <li class="active pagActiva"><?php echo $rutas[0]; ?></li>

            </ul>
            <?php

            if ($rutas[0] == "articulos-gratis") {

                $ordenar = "id";
                $item2 = "precio";
                $valor2 = 0;

            } else if ($rutas[0] == "lo-mas-vendido") {

                $ordenar = "ventas";
                $item2 = null;
                $valor2 = null;

            } else if ($rutas[0] == "lo-mas-visto") {

                $ordenar = "vistas";
                $item2 = null;
                $valor2 = null;

            } else {

                $ordenar = "id";
                $item1 = "ruta";
                $valor1 = $rutas[0];

                $categoria = ControladorProductos::ctrMostrarCategorias($item1, $valor1);

                if (!$categoria) {
                    $subCategoria = ControladorProductos::ctrMostrarSubCategorias($item1, $valor1);

                    $item2 = "id_subcategoria";
                    $valor2 = $subCategoria[0]["id"];


                } else {
                    $item2 = "id_categoria";
                    $valor2 = $categoria["id"];
                }

            }

            $base = 0;
            $tope = 12;
            $productos = ControladorProductos::ctrMostrarProductos($ordenar, $item2, $valor2, $base, $tope);

            if (!$productos) {
                echo '<div class="col-xs-12 error404 text-center">
        <h1><small>¡Oops!</small></h1>
        <h2>Aún no hay productos en esta sección</h2>
        </div>
        ';
            } else {

                echo '<ul class="grid0">';
                foreach ($productos as $key => $value) {
                    echo '<li class="col-lg-3 col-md-3  col-sm-6 col-xs-12">
                <figure>
                    <a href="' . $value["ruta"] . '" class="pixelProducto">
                        <img src="' . $servidor . $value["portada"] . '"
                             class="img-responsive">
                    </a>
                </figure>
                
                      <h4>
                    <small>
                        <a href="' . $value["ruta"] . '" class="pixelProducto">
                            ' . $value["titulo"] . '<br> 
                            <span style="color: rgba(0,0,0,0)">-</span>
                            ';
                    if ($value["nuevo"] != 0) {
                        echo '<span class="label label-warning fontSize">Nuevo</span> ';
                    }
                    if ($value["oferta"] != 0) {
                        echo '<span class="label label-warning fontSize">' . $value["descuento_oferta"] . '% off</span>';
                    }

                    echo '</a>
                    </small>
                </h4>        
                  <div class="col-xs-6  precio">';

                    if ($value["precio"] == 0) {
                        echo '<h2><small> GRATIS </small></h2>';
                    } else if ($value["oferta"] != 0) {

                        echo '
                              <h2>
                              <small><strong class="oferta">USD $' . $value["precio"] . '</strong></small>
                              <small>$' . $value["precio_oferta"] . '</small>
                              </h2>';

                    } else {
                        echo '<h2><small> USD $' . $value["precio"] . '</small></h2>';
                    }

                    echo '</div>
                  <div class="col-xs-6 enlaces">
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default btn-xs deseos" idProducto=" ' . $value["id"] . '"
                                data-toggle="tooltip" title="Agregar a mi lista de deseos">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </button>';

                    if ($value["tipo"] == "virtual" && $value["precio"] != 0) {

                        if ($value["oferta"] != 0) {

                            echo ' <button type="button" class="btn btn-default btn-xs agregarCarrito" idProducto="' . $value["id"] . '"
                                    imagen="' . $servidor . $value["portada"] . '"
                                    titulo="' . $value["titulo"] . '" precio="' . $value["precio_oferta"] . '" tipo="' . $value["tipo"] . '" peso="' . $value["peso"] . '"
                                    data-toggle="tooltip" title="Agregar al carrito de compras">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>';

                        } else {
                            echo ' <button type="button" class="btn btn-default btn-xs agregarCarrito" idProducto="' . $value["id"] . '"
                                    imagen="' . $servidor . $value["portada"] . '"
                                    titulo="' . $value["titulo"] . '" precio="' . $value["precio"] . '" tipo="' . $value["tipo"] . '" peso="' . $value["peso"] . '"
                                    data-toggle="tooltip" title="Agregar al carrito de compras">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>';
                        }


                    }

                    echo '<a href="' . $value["ruta"] . '" class="pixelProducto">
                            <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip"
                                    title="Ver producto">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                        </a>

                    </div>
                </div>
            </li>
                  ';
                }

                echo '</ul>

                 <ul class="list0" style="display: none">';

                foreach ($productos as $key => $value) {

                    echo ' <li class="col-xs-12">
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                    <figure>
                          <a href="' . $value["ruta"] . '" class="pixelProducto">
                        <img src="' . $servidor . $value["portada"] . '"
                             class="img-responsive">
                    </a>
                    </figure>
                </div>
                <div class="col-lg-10 col-md-7 col-sm-8 col-xs-12">
                    <h1>
                        <small>
                            <a href="' . $value["ruta"] . '" class="pixelProducto">
                                ' . $value["titulo"] . '<br>';

                    if ($value["nuevo"] != 0) {
                        echo '<span class="label label-warning ">Nuevo</span> ';
                    }
                    if ($value["oferta"] != 0) {
                        echo '<span class="label label-warning ">' . $value["descuento_oferta"] . '% off</span>';
                    }

                    echo '</a>
                        </small>
                    </h1>
                    <p class="text-muted">' . $value["titular"] . '</p>';

                    if ($value["precio"] == 0) {
                        echo '<h2><small> GRATIS </small></h2>';
                    } else if ($value["oferta"] != 0) {

                        echo '
                              <h2>
                              <small><strong class="oferta">USD $' . $value["precio"] . '</strong></small>
                              <small>$' . $value["precio_oferta"] . '</small>
                              </h2>';

                    } else {
                        echo '<h2><small> USD $' . $value["precio"] . '</small></h2>';
                    }

                    echo ' <div class="btn-group pull-left enlaces">
                        <button type="button" class="btn btn-default btn-xs deseos" idProducto="' . $value["id"] . '" data-toggle="tooltip"
                                title="Agregar a mi lista de deseos">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </button>';

                    if ($value["tipo"] == "virtual" && $value["precio"] != 0) {

                        if ($value["oferta"] != 0) {

                            echo ' <button type="button" class="btn btn-default btn-xs agregarCarrito" idProducto="' . $value["id"] . '"
                                    imagen="' . $servidor . $value["portada"] . '"
                                    titulo="' . $value["titulo"] . '" precio="' . $value["precio_oferta"] . '" tipo="' . $value["tipo"] . '" peso="' . $value["peso"] . '"
                                    data-toggle="tooltip" title="Agregar al carrito de compras">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>';

                        } else {
                            echo ' <button type="button" class="btn btn-default btn-xs agregarCarrito" idProducto="' . $value["id"] . '"
                                    imagen="' . $servidor . $value["portada"] . '"
                                    titulo="' . $value["titulo"] . '" precio="' . $value["precio"] . '" tipo="' . $value["tipo"] . '" peso="' . $value["peso"] . '"
                                    data-toggle="tooltip" title="Agregar al carrito de compras">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>';
                        }


                    }

                    echo '  <a href="' . $value["ruta"] . '" class="pixelProducto">
                            <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip"
                                    title="Ver producto">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12"><hr></div>
            </li>';
                }
                echo '  </ul>';


    }

?>
        </div>
    </div>
</div>

