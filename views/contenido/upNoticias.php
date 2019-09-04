<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Noticias <small></small></h1>
    </div>
</div>

<?
$datos=explode("/", $_GET['action']);
require_once "./controllers/adminListControllersC.php";
$classAdmin=new adminListControllerssC();

$filesA=$classAdmin->datos_Noticia_controlador($datos[1]);
if($filesA->rowCount()){
    $campos = $filesA->fetch();

?>

<div class="container-fluid">
    <div class="row">

        <div class="col-xs-12">

            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="new">
                    <div class="container-fluid">
                        <div class="row">

                            <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


                                <form action="<?php echo SERVERURL; ?>ajax/adminAjax.php" method="POST" autocomplete="off" data-form="update" class="FormularioAjax" enctype="multipart/form-data">
                                        <input type="hidden" value="<?php echo $campos['id_noticias']; ?>" name="idNoticiaUP">
                                        <input type="hidden" value="<?php echo $campos['fecha_publi']; ?>" name="fechaNoticiaUP">

                                        <input type="text" id="title1" placeholder="Título de Noticia" class="form-control" name="NotituloUP" value="<?php echo $campos['titulo_noti']; ?>" required>

                                        <textarea name="NointroduccionUP" id="intro" cols="10" rows="5" placeholder="Introducción de Noticia" maxlength="60" class="form-control" required><?php echo $campos['introduccion_noti']; ?></textarea>

                                        <div class="col-xs-12 col-sm-12">

                                            <div class="col-xs-6">
                                                <legend>Imagen de Organigram ed</legend>
                                                <p class="text-center text-primary" >
                                                    Seleccione una imagen/Foto en el siguiente campo. Formato de imagen admitido jPG y PNG.
                                                </p>

                                                <input type="file" name="imgNoticiaup"  >
                                                <p class="help-block">Formato de imagen admitido JPG y PNG.</p>
                                            </div>
                                            <div class="col-xs-6 col-sm-6" style="padding: 20px;">
                                                <img src="../<?php echo $campos['ruta']; ?>"  width="100%" height="10%" style="padding: auto;margin: auto; justify-content: center;">
                                                <input type="hidden" value="<?php echo $campos['ruta']; ?>" name="fotoAntiguoNoticia" >
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12">

                                        <textarea name="NocontenidoUP" id="" cols="30" rows="10" placeholder="Contenido de Noticia" class="form-control"  required><?php echo $campos['contenido']; ?></textarea>

                                        </div>
                                        <div class="col-xs-12 col-sm-12">
                                            <p class="text-center">
                                                <input type="submit" id="guardarArticulo" class="btn btn-info btn-raised btn-sm" value="Actualizar Noticia">
                                            </p>
                                        </div>
                                        <div class="RespuestaAjax"></div>
                                    </form>


                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<?}?>