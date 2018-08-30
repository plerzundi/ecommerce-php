<?php

class ControladorProductos
{

    /*===========================================================
                    MOSTRAR CATEGORÍAS
    ============================================================*/
    static public function ctrMostrarCategorias($item, $valor)
    {
        $tabla = "categorias";
        $respuesta = ModeloProductos::mdlMostrarCategorias($tabla, $item, $valor);
        return $respuesta;
    }

    /*===========================================================
                    MOSTRAR SUBCATEGORÍAS
    ============================================================*/

    static public function ctrMostrarSubCategorias($item, $valor)
    {
        $tabla = "sub_categorias";
        $respuesta = ModeloProductos::mdlMostrarSubCategorias($tabla, $item, $valor);
        return $respuesta;
    }


    /*===========================================================
                  MOSTRAR PRODUCTOS
    ============================================================*/

    static public function ctrMostrarProductos($ordenar, $item, $valor, $base, $tope,$modo)
    {
        $tabla = "productos";
        $respuesta = ModeloProductos::mdlMostrarProductos($tabla, $ordenar, $item, $valor, $base, $tope,$modo);
        return $respuesta;
    }

    /*===========================================================
                  MOSTRAR INFO PRODUCTOS
  ============================================================*/
    static public function ctrMostrarInfoProducto($item, $valor)
    {

        $tabla = "productos";
        $respuesta = ModeloProductos::mdlMostrarInfoProducto($tabla, $item, $valor);
        return $respuesta;

    }

    /*===========================================================
                 LISTAR PRODUCTOS
    ============================================================*/
    static public function ctrListarProductos($ordenar, $item, $valor){

        $tabla = "productos";
        $respuesta = ModeloProductos::mdlListarProductos($tabla,$ordenar, $item, $valor);
        return $respuesta;


    }

    /*===========================================================
                 MOSTRAR BANNER
 ============================================================*/
    static public function ctrMostrarBanner($ruta)
    {
        $tabla = "banner";
        $respuesta = ModeloProductos::mdlMostrarBanner($tabla, $ruta);
        return $respuesta;
    }





}
