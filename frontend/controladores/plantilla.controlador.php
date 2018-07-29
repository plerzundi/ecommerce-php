<?php

class ControladorPlantilla{

  /*=====================================================
                  LLAMAMOS LA PLANTILLA
  =====================================================*/

    public function plantilla(){

      include "vistas/plantilla.php";
    }

    /*==================================================
      TRAEMOS LOS ESTILOS DINÁMICOS DE LA PLANTILLA
    ==================================================*/

    public function ctrEstiloPlantilla(){
      $tabla = "plantillas";
      $respuesta = ModeloPlantilla::mdlEstiloPlantilla($tabla);
      return $respuesta;
    }


}
