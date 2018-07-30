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
     ?>

    <link rel="stylesheet" href="vistas/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="vistas/css/plugins/font-awesome.min.css">

    <link rel="stylesheet" href="vistas/css/plantilla.css">
    <link rel="stylesheet" href="vistas/css/cabezote.css">



    <script src="vistas/js/plugins/jquery.min.js"></script>
    <script src="vistas/js/plugins/bootstrap.min.js"></script>

</head>
<body>


<?php

/*===========================================
    ENCABEZADO
 ============================================*/

include "modulos/cabezote.php";

if (isset($_GET["ruta"])) {
    echo $_GET["ruta"];
}


?>


<script type="text/javascript" src="vistas/js/cabezote.js"></script>
<script type="text/javascript" src="vistas/js/plantilla.js"></script>

</body>
</html>
