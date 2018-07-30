<?php
require_once "conexion.php";

class ModeloProductos{


  /*===========================================================
                  MOSTRAR CATEGORÍAS
  ============================================================*/
  static public function mdlMostrarCategorias($tabla){
    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
    $stmt -> execute();
    return $stmt -> fetchAll();
    $stmt -> close();
  }

  /*===========================================================
                  MOSTRAR SUBCATEGORÍAS
  ============================================================*/
  static public function mdlMostrarSubCategorias($tabla, $id){
    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE categoria_id = :categoria_id");
    $stmt -> bindParam(":categoria_id", $id, PDO::PARAM_INT);
    $stmt -> execute();
    return $stmt -> fetchAll();
    $stmt -> close();
  }




}
