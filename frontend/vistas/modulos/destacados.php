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

<?php

$titulosModulos = array("ARTÍCULOS GRATUITOS", "LO MÁS VENDIDO", "LO MÁS VISTOS");
$rutaModulos = array("articulos-gratis","lo-mas-vendido","lo-mas-visto");

if ($titulosModulos[0] == "ARTÍCULOS GRATUITOS") {
    $ordenar = "id";
    $item = "precio";
    $valor = 0;
    $gratis = ControladorProductos::ctrMostrarProductos($ordenar, $item, $valor);
}

if ($titulosModulos[1] == "LO MÁS VENDIDO") {
    $ordenar = "ventas";
    $item = null;
    $valor = null;
    $ventas = ControladorProductos::ctrMostrarProductos($ordenar,$item, $valor);
}

if ($titulosModulos[2] == "LO MÁS VISTOS") {
    $ordenar = "vistas";
    $item = null;
    $valor = null;
    $vistas = ControladorProductos::ctrMostrarProductos($ordenar,$item, $valor);
}

$modulos =array($gratis,$ventas,$vistas);

for ($i = 0; $i < count($titulosModulos); $i++) {

    echo '<div class="container-fluid well well-sm barraProductos">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 organizarProductos">
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-default btnGrid" id="btnGrid' . $i . '">
                        <i class="fa fa-th" aria-hidden="true"></i>
                        <span class=" col-xs-0 pull-right"> GRID</span>
                    </button>

                    <button type="button" class="btn btn-default btnList" id="btnList' . $i . '">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <span class=" col-xs-0 pull-right"> LIST</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid productos">
    <div class="container">
        <div class="row">
        
        <div class="col-xs-12 tituloDestacado">
        
           <div class="col-sm-6 col-xs-12">
                    <h1>
                        <small>'.$titulosModulos[$i].'</small>
                    </h1>
                </div>
                
                 <div class="col-sm-6 col-xs-12">
                    <a href="'.$rutaModulos[$i].'">

                        <button class="btn btn-default backColor pull-right" type="button">
                            VER MÁS <span class="fa fa-chevron-right"></span>
                        </button>
                    </a>
                </div>
                
                     </div>
            <div class="clearfix"></div>
            <hr>
          </div>
          
              <ul class="grid'.$i.'">';

    foreach ($modulos[$i] as $key => $value) {
        echo '<li class="col-lg-3 col-md-3  col-sm-6 col-xs-12">
                <figure>
                    <a href="#" class="pixelProducto">
                        <img src="http://localhost/backend/'.$value["portada"].'"
                             class="img-responsive">
                    </a>
                </figure>
                
                      <h4>
                    <small>
                        <a href="#" class="pixelProducto">
                            '.$value["titulo"].'
                            <br>
                            <br>
                        </a>
                    </small>
                </h4>
                
                  <div class="col-xs-6  precio">
                    <h2>
                        <small> '.$value["precio"].'</small>
                    </h2>
                </div>
                  <div class="col-xs-6 enlaces">
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default btn-xs deseos" idProducto=" '.$value["id"].'"
                                data-toggle="tooltip" title="Agregar a mi lista de deseos">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </button>
                        <a href="#" class="pixelProducto">
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
                </div>
                    </div>';
}



?>



        <!--=========================================
              VITRINA DE  PRODUCTOS EN CUADRÍCULA
        ==========================================-->

            <!-- PRODUCTO 1 -->


                <!--==========================================-->

                <!--==========================================-->

                <!--==========================================-->

                <!--==========================================-->


            <!-- PRODUCTO 2 -->
            <li class="col-lg-3 col-md-3  col-sm-6 col-xs-12">
                <!--==========================================-->

                <figure>
                    <a href="#" class="pixelProducto">
                        <img src="http://localhost/backend/vistas/img/productos/accesorios/accesorio03.jpg"
                             class="img-responsive">
                    </a>
                </figure>
                <!--==========================================-->
                <h4>
                    <small>
                        <a href="#" class="pixelProducto">
                            mochila deportiva gris
                            <br>
                            <br>
                        </a>
                    </small>
                </h4>
                <!--==========================================-->
                <div class="col-xs-6  precio">
                    <h2>
                        <small>GRATIS</small>
                    </h2>
                </div>
                <!--==========================================-->
                <div class="col-xs-6 enlaces">
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default btn-xs deseos" idProducto="470"
                                data-toggle="tooltip" title="Agregar a mi lista de deseos">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </button>
                        <a href="#" class="pixelProducto">
                            <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip"
                                    title="Ver producto">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                        </a>

                    </div>
                </div>
            </li>
            <!--==========================================-->

            <!-- PRODUCTO 3 -->
            <li class="col-lg-3 col-md-3  col-sm-6 col-xs-12">
                <!--==========================================-->
                <figure>
                    <a href="#" class="pixelProducto">
                        <img src="http://localhost/backend/vistas/img/productos/accesorios/accesorio02.jpg"
                             class="img-responsive">
                    </a>
                </figure>
                <!--==========================================-->
                <h4>
                    <small>
                        <a href="#" class="pixelProducto">
                            bolso militar
                            <br>
                            <br>
                        </a>
                    </small>
                </h4>
                <!--==========================================-->
                <div class="col-xs-6  precio">
                    <h2>
                        <small>GRATIS</small>
                    </h2>
                </div>
                <!--==========================================-->
                <div class="col-xs-6 enlaces">
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default btn-xs deseos" idProducto="470"
                                data-toggle="tooltip" title="Agregar a mi lista de deseos">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </button>
                        <a href="#" class="pixelProducto">
                            <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip"
                                    title="Ver producto">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                        </a>

                    </div>
                </div>
            </li>

            <!--==========================================-->


            <!-- PRODUCTO 4 -->
            <li class="col-lg-3 col-md-3  col-sm-6 col-xs-12">
                <!--==========================================-->
                <figure>
                    <a href="#" class="pixelProducto">
                        <img src="http://localhost/backend/vistas/img/productos/accesorios/accesorio01.jpg"
                             class="img-responsive">
                    </a>
                </figure>
                <!--==========================================-->
                <h4>
                    <small>
                        <a href="#" class="pixelProducto">
                            pulsera de diamantes
                            <br>
                            <br>
                            <span class="label label-warning fontSize">Nuevo</span>
                        </a>
                    </small>
                </h4>
                <!--==========================================-->
                <div class="col-xs-6  precio">
                    <h2>
                        <small>GRATIS</small>
                    </h2>
                </div>
                <!--==========================================-->
                <div class="col-xs-6 enlaces">
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default btn-xs deseos" idProducto="470"
                                data-toggle="tooltip" title="Agregar a mi lista de deseos">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </button>
                        <a href="#" class="pixelProducto">
                            <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip"
                                    title="Ver producto">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                        </a>

                    </div>
                </div>
            </li>

            <!--==========================================-->
        </ul>

        <!--=========================================
            VITRINA DE  PRODUCTOS EN LISTA
        ==========================================-->
        <ul class="list0" style="display: none">
            <!-- PRODUCTO 1-->
            <li class="col-xs-12">
                <!--==================================================-->
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                    <figure>
                        <a href="collar-de-diamantes-11" class="pixelProducto"><img
                                    src="http://localhost/backend/vistas/img/productos/accesorios/accesorio04.jpg"
                                    class="img-responsive"></a>
                    </figure>
                </div>
                <!--==================================================-->
                <div class="col-lg-10 col-md-7 col-sm-8 col-xs-12">
                    <h1>
                        <small>
                            <a href="collar-de-diamantes-11" class="pixelProducto">Collar de diamantes</a>
                        </small>
                    </h1>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exerc laborum.</p>
                    <h2>
                        <small>GRATIS</small>
                    </h2>
                    <div class="btn-group pull-left enlaces">
                        <button type="button" class="btn btn-default btn-xs deseos" idProducto="470"
                                data-toggle="tooltip" title="Agregar a mi lista de deseos">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </button>
                        <a href="collar-de-diamantes-11" class="pixelProducto">
                            <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip"
                                    title="Ver producto">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                        </a>
                    </div>
                </div>
                <!--================================================-->
                <div class="col-xs-12">
                    <hr>
                </div>
                <!--================================================-->

            </li>

            <!-- PRODUCTO 2-->
            <li class="col-xs-12">
                <!--==================================================-->
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                    <figure>
                        <a href="collar-de-diamantes-11" class="pixelProducto"><img
                                    src="http://localhost/backend/vistas/img/productos/accesorios/accesorio03.jpg"
                                    class="img-responsive"></a>
                    </figure>
                </div>
                <!--==================================================-->
                <div class="col-lg-10 col-md-7 col-sm-8 col-xs-12">
                    <h1>
                        <small>
                            <a href="collar-de-diamantes-11" class="pixelProducto">Bolso Gris</a>
                        </small>
                    </h1>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exerc laborum.</p>
                    <h2>
                        <small>GRATIS</small>
                    </h2>
                    <div class="btn-group pull-left enlaces">
                        <button type="button" class="btn btn-default btn-xs deseos" idProducto="470"
                                data-toggle="tooltip" title="Agregar a mi lista de deseos">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </button>
                        <a href="collar-de-diamantes-11" class="pixelProducto">
                            <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip"
                                    title="Ver producto">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                        </a>
                    </div>
                </div>
                <!--================================================-->
                <div class="col-xs-12">
                    <hr>
                </div>
                <!--================================================-->
            </li>

            <!-- PRODUCTO 3-->
            <li class="col-xs-12">
                <!--==================================================-->
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                    <figure>
                        <a href="collar-de-diamantes-11" class="pixelProducto"><img
                                    src="http://localhost/backend/vistas/img/productos/accesorios/accesorio02.jpg"
                                    class="img-responsive"></a>
                    </figure>
                </div>
                <!--==================================================-->
                <div class="col-lg-10 col-md-7 col-sm-8 col-xs-12">
                    <h1>
                        <small>
                            <a href="collar-de-diamantes-11" class="pixelProducto">Bolso Militar</a>
                        </small>
                    </h1>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exerc laborum.</p>
                    <h2>
                        <small>GRATIS</small>
                    </h2>
                    <div class="btn-group pull-left enlaces">
                        <button type="button" class="btn btn-default btn-xs deseos" idProducto="470"
                                data-toggle="tooltip" title="Agregar a mi lista de deseos">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </button>
                        <a href="collar-de-diamantes-11" class="pixelProducto">
                            <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip"
                                    title="Ver producto">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                        </a>
                    </div>
                </div>
                <!--================================================-->
                <div class="col-xs-12">
                    <hr>
                </div>
                <!--================================================-->
            </li>

            <!-- PRODUCTO 4-->
            <li class="col-xs-12">
                <!--==================================================-->
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                    <figure>
                        <a href="collar-de-diamantes-11" class="pixelProducto"><img
                                    src="http://localhost/backend/vistas/img/productos/accesorios/accesorio01.jpg"
                                    class="img-responsive"></a>
                    </figure>
                </div>
                <!--==================================================-->
                <div class="col-lg-10 col-md-7 col-sm-8 col-xs-12">
                    <h1>
                        <small>
                            <a href="collar-de-diamantes-11" class="pixelProducto">Pulsera de diamantes</a>
                        </small>
                    </h1>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exerc laborum.</p>
                    <h2>
                        <small>GRATIS</small>
                    </h2>
                    <div class="btn-group pull-left enlaces">
                        <button type="button" class="btn btn-default btn-xs deseos" idProducto="470"
                                data-toggle="tooltip" title="Agregar a mi lista de deseos">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </button>
                        <a href="collar-de-diamantes-11" class="pixelProducto">
                            <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip"
                                    title="Ver producto">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                        </a>
                    </div>
                </div>
                <!--================================================-->
                <div class="col-xs-12">
                    <hr>
                </div>
                <!--================================================-->
            </li>

        </ul>
    </div>
</div>

<!--=========================================
        BARRA DE PRODUCTOS MAS VENDIDOS
==========================================-->
<div class="container-fluid well well-sm barraProductos">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 organizarProductos">
                <div class="btn-group pull-right">

                    <button type="button" class="btn btn-default btnGrid" id="btnGrid1">
                        <i class="fa fa-th" aria-hidden="true"></i>
                        <span class=" col-xs-0 pull-right"> GRID</span>
                    </button>

                    <button type="button" class="btn btn-default btnList" id="btnList1">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <span class=" col-xs-0 pull-right"> LIST</span>
                    </button>

                </div>
            </div>
        </div>
    </div>
</div>


<!--=========================================
      VITRINA DE  PRODUCTOS MAS VENDIDOS
==========================================-->
<div class="container-fluid productos">
    <div class="container">
        <div class="row">
            <!--=========================================
                      BARRA DE TITULO
            ==========================================-->
            <div class="col-xs-12 tituloDestacado">
                <!--==========================================-->
                <div class="col-sm-6 col-xs-12">
                    <h1>
                        <small>LO MÁS VENDIDOS</small>
                    </h1>
                </div>
                <!--==========================================-->
                <div class="col-sm-6 col-xs-12">
                    <a href="lo-mas-vendido">
                        <button class="btn btn-default backColor pull-right" type="button">
                            VER MÁS <span class="fa fa-chevron-right"></span>
                        </button>
                    </a>
                </div>
                <!--==========================================-->
            </div>
            <div class="clearfix"></div>
            <hr>
        </div>
        <!--=========================================
              VITRINA DE  PRODUCTOS EN CUADRÍCULA
        ==========================================-->
        <ul class="grid1">

            <!-- PRODUCTO 1 -->
            <li class="col-lg-3 col-md-3  col-sm-6 col-xs-12">
                <!--==========================================-->
                <figure>
                    <a href="#" class="pixelProducto">
                        <img src="http://localhost/backend/vistas/img/productos/ropa/ropa03.jpg" class="img-responsive">
                    </a>
                </figure>
                <!--==========================================-->
                <h4>
                    <small>
                        <a href="#" class="pixelProducto">
                            falda de flores<br>
                            <span class="label label-warning fontSize">Nuevo</span>
                            <span class="label label-warning fontSize">40% off</span>
                        </a>
                    </small>
                </h4>
                <!--==========================================-->
                <div class="col-xs-6  precio">
                    <h2>
                        <small>
                            <strong class="oferta"> USD $29</strong>
                        </small>
                        <small>$11</small>
                    </h2>
                </div>
                <!--==========================================-->
                <div class="col-xs-6 enlaces">
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default btn-xs deseos" idProducto="470"
                                data-toggle="tooltip" title="Agregar a mi lista de deseos">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </button>
                        <a href="#" class="pixelProducto">
                            <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip"
                                    title="Ver producto">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                        </a>

                    </div>
                </div>
            </li>
            <!--=================FIN PRODUCTO 1=============================-->

            <!-- PRODUCTO 2 -->
            <li class="col-lg-3 col-md-3  col-sm-6 col-xs-12">
                <!--==========================================-->
                <figure>
                    <a href="#" class="pixelProducto">
                        <img src="http://localhost/backend/vistas/img/productos/ropa/ropa04.jpg" class="img-responsive">
                    </a>
                </figure>
                <!--==========================================-->
                <h4>
                    <small>
                        <a href="#" class="pixelProducto">
                            vestido jeans<br>
                            <span class="label label-warning fontSize">40% off</span>
                        </a>
                    </small>
                </h4>
                <!--==========================================-->
                <div class="col-xs-6  precio">
                    <h2>
                        <small>
                            <strong class="oferta"> USD $29</strong>
                        </small>
                        <small>$11</small>
                    </h2>
                </div>
                <!--==========================================-->
                <div class="col-xs-6 enlaces">
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default btn-xs deseos" idProducto="470"
                                data-toggle="tooltip" title="Agregar a mi lista de deseos">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </button>
                        <a href="#" class="pixelProducto">
                            <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip"
                                    title="Ver producto">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                        </a>

                    </div>
                </div>
            </li>
            <!--=================FIN PRODUCTO 2=============================-->


            <!-- PRODUCTO 3 -->
            <li class="col-lg-3 col-md-3  col-sm-6 col-xs-12">
                <!--==========================================-->
                <figure>
                    <a href="#" class="pixelProducto">
                        <img src="http://localhost/backend/vistas/img/productos/ropa/ropa02.jpg" class="img-responsive">
                    </a>
                </figure>
                <!--==========================================-->
                <h4>
                    <small>
                        <a href="#" class="pixelProducto">
                            vestido jeans<br>
                            <span class="label label-warning fontSize">40% off</span>
                        </a>
                    </small>
                </h4>
                <!--==========================================-->
                <div class="col-xs-6  precio">
                    <h2>
                        <small>
                            <strong class="oferta"> USD $29</strong>
                        </small>
                        <small>$11</small>
                    </h2>
                </div>
                <!--==========================================-->
                <div class="col-xs-6 enlaces">
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default btn-xs deseos" idProducto="470"
                                data-toggle="tooltip" title="Agregar a mi lista de deseos">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </button>
                        <a href="#" class="pixelProducto">
                            <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip"
                                    title="Ver producto">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                        </a>

                    </div>
                </div>
            </li>
            <!--=================FIN PRODUCTO 3=============================-->


            <!-- PRODUCTO 4 -->
            <li class="col-lg-3 col-md-3  col-sm-6 col-xs-12">
                <!--==========================================-->
                <figure>
                    <a href="#" class="pixelProducto">
                        <img src="http://localhost/backend/vistas/img/productos/ropa/ropa06.jpg" class="img-responsive">
                    </a>
                </figure>
                <!--==========================================-->
                <h4>
                    <small>
                        <a href="#" class="pixelProducto">
                            top dama
                            <br>
                            <br>
                            <span class="label label-warning fontSize">40% off</span>
                        </a>
                    </small>
                </h4>
                <!--==========================================-->
                <div class="col-xs-6  precio">
                    <h2>
                        <small>
                            <strong class="oferta"> USD $29</strong>
                        </small>
                        <small>$11</small>
                    </h2>
                </div>
                <!--==========================================-->
                <div class="col-xs-6 enlaces">
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default btn-xs deseos" idProducto="470"
                                data-toggle="tooltip" title="Agregar a mi lista de deseos">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </button>
                        <a href="#" class="pixelProducto">
                            <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip"
                                    title="Ver producto">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                        </a>

                    </div>
                </div>
            </li>

            <!--=================FIN PRODUCTO 4=============================-->
        </ul>

        <!--=========================================
              VITRINA DE  PRODUCTOS EN LISTA
        ==========================================-->
        <ul class="list1" style="display: none;">
        <!--PRODUCTO 1-->
            <li class="col-xs-12">
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                   <figure>
                       <a href="falda-de-flores-1" class="pixelProducto">
                           <img src="http://localhost/backend/vistas/img/productos/ropa/ropa03.jpg" class="img-responsive">
                       </a>
                   </figure>
                </div>
                <!--==============================================-->
                <div class="col-lg-10 col-md-7 col-sm-8 col-xs-12">
                    <h1>
                        <small>
                            <a href="falda-de-flores-1" class="pixelProducto">
                                Falda de flores
                                <span class="label label-warning">Nuevo</span>
                                <span class="label label-warning">40% off</span>
                            </a>
                        </small>
                    </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias amet asperiores aut commodi
                        delectus ducimus eligendi illo ipsam labore laborum, natus omnis placeat quam, rem repellendus
                        rerum unde veniam voluptatum.</p>
                    <h2>
                        <small>
                            <strong class="oferta">USD $29</strong>
                        </small>
                        <small>$11</small>
                    </h2>
                    <div class="btn-group pull-left enlaces">
                        <button type="button" class="btn btn-default btn-xs deseos" idProducto="1" data-toggle="tooltip"
                                title="Agregar a mi lista de deseos">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </button>
                        <a href="falda-de-flores-1" class="pixelProducto">
                            <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip"
                                    title="Ver producto">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                        </a>
                    </div>

                </div>
            </li>
        </ul>

    </div>
</div>


<!--=========================================
        BARRA DE PRODUCTOS MAS VISTOS
==========================================-->
<div class="container-fluid well well-sm barraProductos">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 organizarProductos">
                <div class="btn-group pull-right">

                    <button type="button" class="btn btn-default btnGrid" id="btnGrid2">
                        <i class="fa fa-th" aria-hidden="true"></i>
                        <span class=" col-xs-0 pull-right"> GRID</span>
                    </button>

                    <button type="button" class="btn btn-default btnList" id="btnList2">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <span class=" col-xs-0 pull-right"> LIST</span>
                    </button>

                </div>
            </div>
        </div>
    </div>
</div>

<!--=========================================
      VITRINA DE  PRODUCTOS MAS VISTOS
==========================================-->
<div class="container-fluid productos">
    <div class="container">
        <div class="row">
            <!--=========================================
                      BARRA DE TITULO
            ==========================================-->
            <div class="col-xs-12 tituloDestacado">
                <!--==========================================-->
                <div class="col-sm-6 col-xs-12">
                    <h1>
                        <small>LO MÁS VISTOS</small>
                    </h1>
                </div>
                <!--==========================================-->
                <div class="col-sm-6 col-xs-12">
                    <a href="lo-mas-visto">
                        <button class="btn btn-default backColor pull-right" type="button">
                            VER MÁS <span class="fa fa-chevron-right"></span>
                        </button>
                    </a>
                </div>
                <!--==========================================-->
            </div>
            <div class="clearfix"></div>
            <hr>
        </div>
        <!--=========================================
              VITRINA DE  PRODUCTOS EN CUADRÍCULA
        ==========================================-->
        <ul class="grid2" >

            <!-- PRODUCTO 1 -->
            <li class="col-lg-3 col-md-3  col-sm-6 col-xs-12">
                <!--==========================================-->
                <figure>
                    <a href="#" class="pixelProducto">
                        <img src="http://localhost/backend/vistas/img/productos/cursos/curso05.jpg"
                             class="img-responsive">
                    </a>
                </figure>
                <!--==========================================-->
                <h4>
                    <small>
                        <a href="#" class="pixelProducto">
                            Curso de bootstrap<br>
                            <span class="label label-warning fontSize">90% off</span>
                        </a>
                    </small>
                </h4>
                <!--==========================================-->
                <div class="col-xs-6  precio">
                    <h2>
                        <small>
                            <strong class="oferta"> USD $100</strong>
                        </small>
                        <small>$10</small>
                    </h2>
                </div>
                <!--==========================================-->
                <div class="col-xs-6 enlaces">
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default btn-xs deseos" idProducto="470"
                                data-toggle="tooltip" title="Agregar a mi lista de deseos">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </button>

                        <button type="button" class="btn btn-default btn-xs agregarCarrito" idProducto="404"
                                imagen="http://localhost/backend/vistas/img/productos/cursos/curso05.jpg"
                                titulo="Curso de bootstrap" precio="10" tipo="virtual" peso="0" data-toggle="tooltip"
                                title="Agregar al carrito de compras">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </button>

                        <a href="#" class="pixelProducto">
                            <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip"
                                    title="Ver producto">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                        </a>

                    </div>
                </div>
            </li>
            <!--=================FIN PRODUCTO 1=============================-->

            <!-- PRODUCTO 2 -->
            <li class="col-lg-3 col-md-3  col-sm-6 col-xs-12">
                <!--==========================================-->
                <figure>
                    <a href="#" class="pixelProducto">
                        <img src="http://localhost/backend/vistas/img/productos/cursos/curso04.jpg"
                             class="img-responsive">
                    </a>
                </figure>
                <!--==========================================-->
                <h4>
                    <small>
                        <a href="#" class="pixelProducto">
                            Curso de canvas y javascript<br>
                            <span class="label label-warning fontSize">90% off</span>
                        </a>
                    </small>
                </h4>
                <!--==========================================-->
                <div class="col-xs-6  precio">
                    <h2>
                        <small>
                            <strong class="oferta"> USD $100</strong>
                        </small>
                        <small>$10</small>
                    </h2>
                </div>
                <!--==========================================-->
                <div class="col-xs-6 enlaces">
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default btn-xs deseos" idProducto="470"
                                data-toggle="tooltip" title="Agregar a mi lista de deseos">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </button>

                        <button type="button" class="btn btn-default btn-xs agregarCarrito" idProducto="404"
                                imagen="http://localhost/backend/vistas/img/productos/cursos/curso05.jpg"
                                titulo="Curso de bootstrap" precio="10" tipo="virtual" peso="0" data-toggle="tooltip"
                                title="Agregar al carrito de compras">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </button>

                        <a href="#" class="pixelProducto">
                            <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip"
                                    title="Ver producto">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                        </a>

                    </div>
                </div>
            </li>
            <!--=================FIN PRODUCTO 2 =============================-->


            <!-- PRODUCTO 3 -->
            <li class="col-lg-3 col-md-3  col-sm-6 col-xs-12">
                <!--==========================================-->
                <figure>
                    <a href="#" class="pixelProducto">
                        <img src="http://localhost/backend/vistas/img/productos/cursos/curso02.jpg"
                             class="img-responsive">
                    </a>
                </figure>
                <!--==========================================-->
                <h4>
                    <small>
                        <a href="#" class="pixelProducto">
                            Aprende javascript desde cero<br>
                            <span class="label label-warning fontSize">90% off</span>
                        </a>
                    </small>
                </h4>
                <!--==========================================-->
                <div class="col-xs-6  precio">
                    <h2>
                        <small>
                            <strong class="oferta"> USD $100</strong>
                        </small>
                        <small>$10</small>
                    </h2>
                </div>
                <!--==========================================-->
                <div class="col-xs-6 enlaces">
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default btn-xs deseos" idProducto="470"
                                data-toggle="tooltip" title="Agregar a mi lista de deseos">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </button>

                        <button type="button" class="btn btn-default btn-xs agregarCarrito" idProducto="404"
                                imagen="http://localhost/backend/vistas/img/productos/cursos/curso05.jpg"
                                titulo="Curso de bootstrap" precio="10" tipo="virtual" peso="0" data-toggle="tooltip"
                                title="Agregar al carrito de compras">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </button>

                        <a href="#" class="pixelProducto">
                            <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip"
                                    title="Ver producto">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                        </a>

                    </div>
                </div>
            </li>
            <!--=================FIN PRODUCTO 3 =============================-->


            <!-- PRODUCTO 4 -->
            <li class="col-lg-3 col-md-3  col-sm-6 col-xs-12">
                <!--==========================================-->
                <figure>
                    <a href="#" class="pixelProducto">
                        <img src="http://localhost/backend/vistas/img/productos/cursos/curso03.jpg"
                             class="img-responsive">
                    </a>
                </figure>
                <!--==========================================-->
                <h4>
                    <small>
                        <a href="#" class="pixelProducto">
                            Curso de jquery<br>
                            <span class="label label-warning fontSize">90% off</span>
                        </a>
                    </small>
                </h4>
                <!--==========================================-->
                <div class="col-xs-6  precio">
                    <h2>
                        <small>
                            <strong class="oferta"> USD $100</strong>
                        </small>
                        <small>$10</small>
                    </h2>
                </div>
                <!--==========================================-->
                <div class="col-xs-6 enlaces">
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default btn-xs deseos" idProducto="470"
                                data-toggle="tooltip" title="Agregar a mi lista de deseos">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </button>

                        <button type="button" class="btn btn-default btn-xs agregarCarrito" idProducto="404"
                                imagen="http://localhost/backend/vistas/img/productos/cursos/curso05.jpg"
                                titulo="Curso de bootstrap" precio="10" tipo="virtual" peso="0" data-toggle="tooltip"
                                title="Agregar al carrito de compras">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </button>

                        <a href="#" class="pixelProducto">
                            <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip"
                                    title="Ver producto">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                        </a>

                    </div>
                </div>
            </li>
            <!--=================FIN PRODUCTO 4 =============================-->
        </ul>


        <!--=========================================
             VITRINA DE  PRODUCTOS EN LISTA
       ==========================================-->
        <ul class="list2" style="display: none">
            <!--PRODUCTO 1-->
            <li class="col-xs-12">
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                    <figure>
                        <a href="falda-de-flores-1" class="pixelProducto">
                            <img src="http://localhost/backend/vistas/img/productos/cursos/curso05.jpg" class="img-responsive">
                        </a>
                    </figure>
                </div>
                <!--==============================================-->
                <div class="col-lg-10 col-md-7 col-sm-8 col-xs-12">
                    <h1>
                        <small>
                            <a href="falda-de-flores-1" class="pixelProducto">
                                Curso de bootstra
                                <span class="label label-warning">90% off</span>
                            </a>
                        </small>
                    </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias amet asperiores aut commodi
                        delectus ducimus eligendi illo ipsam labore laborum, natus omnis placeat quam, rem repellendus
                        rerum unde veniam voluptatum.</p>
                    <h2>
                        <small>
                            <strong class="oferta">USD $100</strong>
                        </small>
                        <small>$10</small>
                    </h2>
                    <div class="btn-group pull-left enlaces">
                        <button type="button" class="btn btn-default btn-xs deseos" idProducto="1" data-toggle="tooltip"
                                title="Agregar a mi lista de deseos">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </button>

                        <button type="button" class="btn btn-default btn-xs agregarCarrito" idProducto="404"
                                imagen="http://localhost/backend/vistas/img/productos/cursos/curso05.jpg"
                                titulo="Curso de bootstrap" precio="10" tipo="virtual" peso="0"
                                data-toggle="tooltip" title="Agregar al carrito de compras">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </button>

                        <a href="falda-de-flores-1" class="pixelProducto">
                            <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip"
                                    title="Ver producto">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                        </a>
                    </div>

                </div>
            </li>
        </ul>

    </div>
</div>
