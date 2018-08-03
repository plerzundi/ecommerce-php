<?php

class ControladorSlide{

  /*=======================================
            MOSTRAR SLIDE
  ========================================*/

  public function ctrMostrarSlide(){

    $tabla = "slides";

    $respuesta = ModeloSlide::mdlMostrarSlide($tabla);
    return $respuesta;


  }




}
