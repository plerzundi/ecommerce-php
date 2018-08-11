/*=============================================
PLANTILLA
=============================================*/

$.ajax({
    url: "ajax/plantilla.ajax.php",
    success: function (respuesta) {
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


/*=============================================
            CUADRÍCULA O LISTA
=============================================*/

var btnList = $(".btnList");

for (var i = 0; i < btnList.length; i++) {

    $("#btnGrid" + i).click(function () {

        var numero = $(this).attr("id").substr(-1);
        $(".list" + numero).hide();
        $(".grid" + numero).show();

        $("#btnGrid"+numero).addClass("backColor");
        $("#btnList"+numero).removeClass("backColor");

    })

    $("#btnList" + i).click(function () {

        var numero = $(this).attr("id").substr(-1);
        $(".list" + numero).show();
        $(".grid" + numero).hide();

        $("#btnGrid"+numero).removeClass("backColor");
        $("#btnList"+numero).addClass("backColor");

    })

}

