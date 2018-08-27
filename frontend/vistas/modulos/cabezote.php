<?php
$servidor = Ruta::ctrRutaServidor();
$url = Ruta::ctrRuta();
 ?>
<!--================================
        TOP
==================================-->
<div class="container-fluid barraSuperior" id="top">
    <div class="container">
        <div class="row">
            <!--==============================
                        SOCIAL
            ==================================-->
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 social">
                <ul>
                    <?php
                        $social = ControladorPlantilla::ctrEstiloPlantilla();
                        $jsonRedesSociales = json_decode($social["redes_sociales"],true);


                        foreach ($jsonRedesSociales as $key => $value) {
                            //var_dump($value["red"]);

                            echo ' <li>
                                    <a href="'.$value["url"].'" target="_blank">
                                        <i class="fa '.$value["red"].' redSocial '.$value["estilo"].'" aria-hidden="true"></i>
                                    </a>
                                </li>';
                        }
                      ?>
                </ul>
            </div>

            <!--==============================
                        REGISTRO
            ==================================-->
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 registro">
              <ul>
                <li><a href="#modalIngreso" data-toggle="modal">Ingreso </a></li>
                <li>|</li>
                <li><a href="#modalRegistro" data-toggle="modal">Crear una cuenta</a></li>
              </ul>
            </div>
        </div>
    </div>
</div>

<!--==============================
            HEADER
==================================-->

<header class="container-fluid">
  <div class="container">
    <div class="row">

      <!--==============================
                  LOGOTIPO
      ==================================-->

      <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logotipo">

        <a href="<?php echo $url; ?>">
          <img src="<?php echo $servidor.$social["logo"]; ?>" class="img-responsive">
        </a>

      </div>

      <!--==============================
          BLOQUE CATEGORIA Y BUSCADOR
      ==================================-->

      <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">

        <!--==============================
            BOTON Y CATEGORÍAS
        ==================================-->
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 backColor" id="btnCategorias">
            <p>CATEGORÍAS
              <span class="pull-right"><i class="fa fa-bars" aria-hidden="true"></i></span>

            </p>

        </div>


        <!--==============================
                BUSCADOR
        ==================================-->

        <div class="input-group col-lg-8 col-md-8 col-sm-8 col-xs-12" id="buscador">
          <input type="search" name="buscar" class="form-control" placeholder=".. buscar">
          <span class="input-group-btn">
            <a href="#">
              <button class="btn btn-default backColor" type="submit">
                <i class="fa fa-search"></i>
              </button>
            </a>
          </span>
        </div>
      </div>

      <!--==============================
              CARRITO DE COMPRAS
      ==================================-->

      <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="carrito">

        <a href="#">
          <button class="btn btn-default pull-left backColor">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
          </button>
        </a>
        <p>TU CESTA <span class="cantidadCesta">3</span><br> USD $ <span class="sumaCesta">20</span></p>
      </div>
    </div>

    <!--==============================
            CATEGORÍAS
    ==================================-->

<div class="col-xs-12 backColor" id="categorias">

    <?php

      $item = null;
      $valor = null;

      $categorias = ControladorProductos::ctrMostrarCategorias($item, $valor);
      //var_dump($categorias);

        foreach ($categorias as $key => $value) {

          echo '<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
              <h4>
                <a href="'.$url.$value["ruta"].'" class="pixelCategorias">'.$value["categoria"].'</a>
            </h4>
            <hr>
            <ul>';

            $item ="categoria_id";
            $valor = $value["id"];

            $subCategorias = ControladorProductos::ctrMostrarSubCategorias($item, $valor);
             //var_dump($subCategorias);

             foreach ($subCategorias as $key => $value) {
               echo '<li><a href="'.$url.$value["ruta"].'" class="pixelSubCategorias">'.$value["sub_categoria"].'</a></li>';
             }
                 echo '
                  </ul>
                      </div>';
        }
     ?>


      </div>
  </div>
</header>
