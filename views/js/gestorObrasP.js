$("#btnAgregarNoticia").click(function () {

    $("#agregarArtículo").toggle(400);

})
var imagen="";
var imagenSize ="";
var imagenType = "";
$("#subirFoto").change(function () {

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
    if (Number(imagenSize) < 20000000 && imagenType == "image/jpeg" || imagenType == "image/png") {
        var datos = new FormData();
        datos.append("imagen", imagen)

    }

    $.ajax({

        url: "views/ajax/gestorObrasP.php",
        //url: "../views/ajax/gestorNoticias.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function () {

            $("#arrastreImagenArticulo").before('<img src="views/assets/img/status.gif" id="status">');

        },
        success: function (respuesta) {
            $("#status").remove();

            if(respuesta == 0){

                $("#arrastreImagenArticulo").before('<div class="alert alert-warning alerta text-center">La imagen es inferior a 1920 * 1080px</div>')

            }else{

                $("#arrastreImagenArticulo").html('<div id="imagenArticulo"><img src="'+respuesta.slice(6)+'" class="img-thumbnail"></div>');

            }
        }


    })


});

$(".editarObrasp").click(function(){
    //alert ("has echo click");
    idObrasp=$(this).parent().parent().attr("id");
    console.log('idObrasp',idObrasp);
    //rutaop=$('#'+idObrasp).children("img").attr("src");
    tituloop=$('#'+idObrasp).children("input").val();
    codigoop=$('#'+idObrasp).children("div").children("#codigo").val();
    rutaop=$('#'+idObrasp).children("div").children("#ruta").val();
    contenidoop=$('#'+idObrasp).children("div").children("#contenido").val();
    estadoop=$('#'+idObrasp).children("div").children("#estado").val();


    console.log('tituloop',tituloop);
    console.log('codigoop',codigoop);
    console.log('rutaop',rutaop);
    console.log('contenidoop',contenidoop);
    console.log('estadoop',estadoop);

    $("#"+idObrasp).html('<div id="obraspr'+idObrasp+'" class="modal fade"><div class="modal-dialog modal-content"><form method="post" enctype="multipart/form-data"><div class="modal-header" style="border:1px solid #eee"><button type="button" class="close" data-dismiss="modal">&times;</button></div><div class="modal-body" style="border:1px solid #eee"><span>Titulo: </span><input type="text" value="'+tituloop+'" name="titulooop"><span> Codigo: </span><input type="text" value="'+codigoop+'" name="codigooop"><div id="editarImagen"><input style="display:block" type="file" id="subirNuevaFoto" class="btn btn-default" name="editarImagen1" value="'+rutaop+'" required><div id="nuevaFoto"><span class="fa fa-times cambiarImagen"></span><img src="'+rutaop+'" class="img-thumbnail"></div></div> <div class="col-xs-12 col-sm-12"><label class="control-label">Contenido</label><textarea id="" name="contenidooop"  autofocus cols="30" rows="5" placeholder="Contenido de obras y proyectos" class="form-control"  required >'+contenidoop+'</textarea></div><div class="col-xs-12 col-sm-12"><label>Estado de Obras y Proyectos</label><span> : '+estadoop+'</span><select class="form-control" name="estadooop" required><option value="'+estadoop+'" disabled="" selected="">Estado</option><option value="proyectado">PROYECTADO</option><option value="ejecucion">EJECUCION</option><option value="ejecutado">EJECUTADO</option></select></div><input type="hidden" value="'+idObrasp+'" name="idop"><input type="hidden" value="'+rutaop+'" name="fotoAntiguaop"></div><div class="modal-footer" style="border:1px solid #eee"><input style="width:10%; padding:5px 0; margin-top:4px" type="submit" class="btn btn-primary" value="Guardar"></div></form></div></div>');
    //$("#"+idNoticia).html('<div id="noticias'+idNoticia+'" class="modal fade"><div class="modal-dialog modal-content"><form method="post" enctype="multipart/form-data"><div class="modal-header" style="border:1px solid #eee"><span><input style="width:10%; padding:5px 0; margin-top:4px" type="submit" class="btn btn-primary pull-right" value="Guardar"></span></div><div class="modal-body" style="border:1px solid #eee"><div id="editarImagen"><input style="display:block" type="file" id="subirNuevaFoto" class="btn btn-default" name="editarImagen"><div id="nuevaFoto"><span class="fa fa-times cambiarImagen"></span><img src="'+rutaImagen2+'" class="img-thumbnail"></div></div><input type="text" value="'+rutaImagen1+'" name="editarTitulo"><input type="hidden" value="'+idNoticia+'" name="id"><input type="hidden" value="'+rutaImagen2+'" name="fotoAntigua"></div><hr></form></div></div>');


})

$(".editarMV").click(function () {

    idMV=$(this).parent().parent().attr("id");
    console.log('idMV',idMV);
    //rutaop=$('#'+idObrasp).children("img").attr("src");
    tipoMV=$('#'+idMV).children("input").val();
    contenidoMV=$('#'+idMV).children("div").children("#conMV").val();

    console.log('tipoMV',tipoMV);
    console.log('contenidoMV',contenidoMV);

})

$(".eliminar").click(function () {

    idMV=$(this).parent().parent().attr("id");
    tipoMV=$('#'+idMV).children("input").val();
    contenidoMV=$('#'+idMV).children("div").children("#conMV").val();

    var ruta="idmv="+idMV+"&tipomv="+tipoMV;
    console.log('idMV',idMV);

    console.log('tipoMV',tipoMV);
    console.log('contenidoMV',contenidoMV);
    console.log('ruta',ruta);

    $.ajax({
        url: "../ajax/adminList.php",
        type:"POST",
        data: ruta,

    }).done(function (res) {

        $("#respuesta").html(res);
        console.log("success");
    }).fail(function () {
        console.log("error");
    }).always(function () {
        console.log("complete");
    });

})

$("#deletemv").click(function () {

    idmvv=$("#idmv").val();
    tipomvv=$("#tipo").val();
    console.log('idmvv',idmvv);
    console.log('tipomvv',tipomvv);

})

$(".editarOrganigrama").click(function () {
    idorg=$(this).parent().parent().parent().attr("id");
    titorg=$("#"+idorg).children("#tituloo").val();
    imagorg=$("#"+idorg).children("#imageno").val();
    $("#"+idorg).html('<div id="orga'+idorg+'" class="modal fade"></div><div class="col-xs-12 col-md-10 col-md-offset-1 "><div class="modal-dialog modal-content"><form action="" method="post" enctype="multipart/form-data"><div class="col-xs-12 col-sm-12"><div class="form-group label-floating" aria-required="true"><label class="control-label">Titulo</label><input class="form-control" type="text" name="tituloup" value="'+titorg+'" required ></div></div><br><div class="col-xs-12 col-sm-12"> <div class="col-xs-12"><legend>Imagen de Organigrama</legend><p class="text-center text-primary">Seleccione una imagen/Foto en el siguiente campo. Formato de imagen admitido jPG y PNG.</p></div><input type="file" name="imgup" required><p class="help-block">Formato de imagen admitido JPG y PNG.</p><img src="'+imagorg+'" class="img-thumbnail"></div><hr><div class="col-xs-12 col-sm-12"><p class="text-center"><input type="submit"  class="btn btn-info btn-raised btn-sm" value="Guardar Actualizador"></p></div></form></div></div></div>');
   //$("#"+idorg).html('<form method="post" enctype="multipart/form-data"><span><input style="width:10%; padding:5px 0; margin-top:4px" type="submit" class="btn btn-primary pull-right" value="Guardar"></span><div id="editarImagen"><input style="display:none" type="file" id="subirNuevaFoto" class="btn btn-default"><div id="nuevaFoto"><span class="fa fa-times cambiarImagen"></span><img src="'+imagorg+'" class="img-thumbnail"></div></div><input type="text" value="'+titorg+'" name="editarTitulo"><textarea cols="30" rows="5" name="editarIntroduccion">'+titorg+"introduccion"+'</textarea><textarea name="editarContenido" id="editarContenido" cols="30" rows="10">'+titorg+"contenido"+'</textarea><input type="hidden" value="'+idorg+'" name="id"><input type="hidden" value="'+imagorg+'" name="fotoAntigua"><hr></form>');


    console.log('idorg',idorg);
    console.log('titorg',titorg);
    console.log('imagorg',imagorg);
})

/*
function eliminar(id) {

    console.log('id',id);
    $.ajax({
        url:'../ajax/adminList.php',
        type:'POST',
        data:'idlib='+id
    }).done(function(resp){

        alert(resp);

    });
    
}
*/



