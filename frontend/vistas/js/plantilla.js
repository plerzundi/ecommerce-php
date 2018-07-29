/*=============================================
PLANTILLA
=============================================*/

$.ajax({
  url: "ajax/plantilla.ajax.php",
  success: function(respuesta) {
    var colorFondo = JSON.parse(respuesta).color_fondo;
    var colorTexto = JSON.parse(respuesta).color_texto;
    var barraSuperior = JSON.parse(respuesta).barra_superior;
    var textoSuperior = JSON.parse(respuesta).texto_superior;

    $(".backColor, .backColor a").css({
      "background": colorFondo,
      "color": colorTexto
    })

    $(".barraSuperior, .barraSuperior a").css({
      "background": barraSuperior,
      "color": textoSuperior
    })



  }


})
