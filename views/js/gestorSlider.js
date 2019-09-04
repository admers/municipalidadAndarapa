var imagen="";
var imagenSize ="";
var imagenType = "";
$("#subirFotoSlider").change(function () {

    imagen = this.files[0];
    console.log('imagen',imagen);
    imagenSize=imagen.size;
    console.log('imagenSize',imagenSize);
    imagenType=imagen.type;
    console.log('imagenType',imagenType);

    if (Number(imagenSize) > 20000000){
        $("#arrastreImagenArticulo").before('<div class="alert alert-warning alerta text-center">El archivo excede el peso permitido, 2mb</div>')
    }
    else {
        $(".alerta").remove();
    }
    //validar tipo de imagen
    if (imagenType == "image/jpeg" || imagenType =="image/png"){
        $(".alerta").remove();
    }else {
        $("#arrastreImagenArticulo").before('<div class="alert alert-warning alerta text-center">El archivo excede el peso permitido, 2mb2</div>')

    }
    if (Number(imagenSize) < 200000000 && imagenType == "image/jpeg" || imagenType == "image/png") {
        var datos = new FormData();
        datos.append("imagen", imagen)

    }
    $.ajax({

        url: "../ajax/gestorSlider.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function () {

            $("#arrastreImagenArticulo").before('<img src="../views/assets/img/status.gif" id="status">');

        },
        success: function (respuesta) {
            $("#status").remove();

            if(respuesta == 0){

                $("#arrastreImagenArticulo").before('<div class="alert alert-warning alerta text-center">La imagen es inferior a 800px * 400px</div>')

            }else{

                $("#arrastreImagenArticulo").html('<div id="imagenArticulo"><img src="'+respuesta.slice(6)+'" class="img-thumbnail"></div>');

            }
        }


    })

})

$(".editarNoticia").click(function(){
    //alert ("has echo click");
    idNoticia=$(this).parent().parent().attr("id");
    console.log('idNoticia',idNoticia);
    rutaImagen=$('#'+idNoticia).children("img").attr("src"); 
    rutaImagen1=$('#'+idNoticia).children("input").val();
    rutaImagen2=$('#'+idNoticia).children("div").children("input").val();


    console.log('rutaImagen1',rutaImagen1);
    console.log('rutaImagen2',rutaImagen2);

    $("#"+idNoticia).html('<div id="noticias'+idNoticia+'" class="modal fade"><div class="modal-dialog modal-content"><form method="post" enctype="multipart/form-data"><div class="modal-header" style="border:1px solid #eee"><button type="button" class="close" data-dismiss="modal">&times;</button></div> <div class="modal-body" style="border:1px solid #eee"><input type="text" value="'+rutaImagen1+'" name="editarTitulo"><div id="editarImagen"><input style="display:block" type="file" id="subirNuevaFoto" class="btn btn-default" name="editarImagen" value="'+rutaImagen2+'" required><div id="nuevaFoto"><span class="fa fa-times cambiarImagen"></span><img src="../'+rutaImagen2+'" class="img-thumbnail"></div></div><input type="hidden" value="'+idNoticia+'" name="id"><input type="hidden" value="'+rutaImagen2+'" name="fotoAntigua"></div><div class="modal-footer" style="border:1px solid #eee"><input style="width:10%; padding:5px 0; margin-top:4px" type="submit" class="btn btn-primary pull-right" value="Guardar"></div></form></div></div>');
    //$("#"+idNoticia).html('<div id="noticias'+idNoticia+'" class="modal fade"><div class="modal-dialog modal-content"><form method="post" enctype="multipart/form-data"><div class="modal-header" style="border:1px solid #eee"><span><input style="width:10%; padding:5px 0; margin-top:4px" type="submit" class="btn btn-primary pull-right" value="Guardar"></span></div><div class="modal-body" style="border:1px solid #eee"><div id="editarImagen"><input style="display:block" type="file" id="subirNuevaFoto" class="btn btn-default" name="editarImagen"><div id="nuevaFoto"><span class="fa fa-times cambiarImagen"></span><img src="'+rutaImagen2+'" class="img-thumbnail"></div></div><input type="text" value="'+rutaImagen1+'" name="editarTitulo"><input type="hidden" value="'+idNoticia+'" name="id"><input type="hidden" value="'+rutaImagen2+'" name="fotoAntigua"></div><hr></form></div></div>');


})

function eliminar(datos) {
    //alert(datos);
    var rut=$("#rutaIM").val();
    console.log('datos',datos);
    console.log('rut',rut);
    var parametros={
        "ids":datos,
        "rutas":rut
    }
    $.ajax({
        data: parametros,
       // url: "../views/ajax/gestorSlider.php",
        url: "../ajax/gestorSlider.php",
        method: "POST",
        beforeSend: function () {
            $("#ventana").html("procesando..");
        },
        success: function (vista) {

            $("#ventana").html(vista);
        }


    });


}

