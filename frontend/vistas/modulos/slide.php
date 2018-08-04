<!--===================================
            SLIDESHOW
====================================-->

<div class="container-fluid" id="slide">
  <div class="row">
  <!--===================================
              DIAPOSITIVAS
  ====================================-->
  <ul>
    <?php
        $slide = ControladorSlide::ctrMostrarSlide();

      foreach ($slide as $key => $value) {

        $estImgPro = json_decode($value["estilo_img_producto"],true);
        $estTextSli = json_decode($value["estilo_texto_slide"],true);
        $texto1 = json_decode($value["titulo1"],true);
        $texto2 = json_decode($value["titulo2"],true);
        $texto3 = json_decode($value["titulo3"],true);
        //var_dump($estTextSli);

      echo '<li>
          <img src="http://localhost/backend/'.$value["img_fondo"].'">
          <div class="slideOpciones '.$value["tipo_slide"].'">';
          if($value["img_producto"]!=""){
              echo '<img class="imgProducto" src="http://localhost/backend/'.$value["img_producto"].'" style="top:'.$estImgPro["top"].'; right:'.$estImgPro["right"].'; left:'.$estImgPro["left"].'; width:'.$estImgPro["width"].'">';
      }
          echo '<div class="textosSlide" style="top:'.$estTextSli["top"].'; left:'.$estTextSli["left"].'; right:'.$estTextSli["right"].'; width:'.$estTextSli["width"].'">
              <h1 style="color:'.$texto1["color"].'">'.$texto1["texto"].'</h1>
              <h2 style="color:'.$texto2["color"].'">'.$texto2["texto"].'</h2>
              <h3 style="color:'.$texto3["color"].';">'.$texto3["texto"].'</h3>
              <a href="'.$value["url"].'">
                '.$value["boton"].'
              </a>
            </div>
          </div>
        </li>';
        }
     ?>
  </ul>

  <!--=========================================
                  PAGINACIÓN
  ==========================================-->
      <ol id="paginacion">

        <?php
            for ($i=1; $i  <= count($slide) ; $i++) {
                echo '<li item="'.$i.'"><span class="fa fa-circle"></span></li>';
            }

         ?>

      </ol>
<!--=========================================
                    FLECHAS
==========================================-->
    <div class="flechas" id="retroceder"><span class="fa fa-chevron-left"></span></div>
      <div class="flechas" id="avanzar"><span class="fa fa-chevron-right"></span></div>
  </div>
</div>


<center>
  <button id="btnSlide" class="backColor">
  <i class="fa fa-angle-up"></i>
  </button>
</center>
