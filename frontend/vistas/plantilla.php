<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,
     minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="title" content="Tienda Virtual">
    <meta name="description"
          content="Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          In et pharetra felis. Nunc placerat commodo nisi vel gravida. Suspendisse ac scelerisque justo.">
    <meta name="keyword" content="Lorem Impsum, Dolore dolore">
    <title>Tienda Virtual</title>


    <?php

      $icono = ControladorPlantilla::ctrEstiloPlantilla();
      echo  '<link rel="icon" href="http://localhost/backend/'.$icono["icono"].'">';

      /*==========================================================
                  MANTENER FIJA LA RUTA DEL PROYECTO
      ==========================================================*/
      $url = Ruta::ctrRuta();

     ?>

    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plantilla.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/cabezote.css">
      <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/slide.css">



    <script src="<?php echo $url; ?>vistas/js/plugins/jquery.min.js"></script>
    <script src="<?php echo $url; ?>vistas/js/plugins/jquery.easing.js"></script>

</head>
<body>


<?php

/*===========================================
            ENCABEZADO
 ============================================*/

include "modulos/cabezote.php";

/*===========================================
          CONTENIDO DINÁMICO
 ============================================*/


$rutas = array();
$ruta = null;

if (isset($_GET["ruta"])) {
   $rutas = explode("/", $_GET["ruta"]);

   $item = "ruta";
   $valor = $rutas[0];


/*===========================================
        URL AMIGABLES DE CATEGORÍAS
============================================*/

   $rutaCategorias = ControladorProductos::ctrMostrarCategorias($item, $valor);

   if($rutas[0] == $rutaCategorias["ruta"]){
     $ruta = $rutas[0];
   }

   /*===========================================
             URLS AMIGABLES SUBCATEGORÍAS
    ============================================*/

    $rutaSubCategorias = ControladorProductos::ctrMostrarSubCategorias($item, $valor);

    foreach ($rutaSubCategorias as $key => $value) {

      if($rutas[0] == $value["ruta"]){
        $ruta = $rutas[0];
      }

    }

   /*===========================================
             LISTA BLANCA URL AMIGABLES
    ============================================*/

   if($ruta != null){
        include "modulos/productos.php";
   }else{
        include "modulos/error404.php";

   }

}else{
  include "modulos/slide.php";
}
?>


<script type="text/javascript" src="<?php echo $url; ?>vistas/js/cabezote.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>vistas/js/plantilla.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>vistas/js/slide.js"></script>

</body>
</html>
