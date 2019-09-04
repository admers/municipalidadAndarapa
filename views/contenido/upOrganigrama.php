
<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles text-center"><i class="zmdi zmdi-book zmdi-hc-fw"></i>Actualizar Organigrama <small></small></h1>
    </div>
</div>
<?php
$datos=explode("/", $_GET['action']);
require_once "./controllers/adminListControllersC.php";
$classAdmin=new adminListControllerssC();

$filesA=$classAdmin->datos_administrador_controlador($datos[1]);
if($filesA->rowCount()){
$campos=$filesA->fetch();

?>


<hr>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">

            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="new">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-md-10 col-md-offset-1">
                                <form action="<?php echo SERVERURL; ?>ajax/adminAjax.php" method="POST"  autocomplete="off" data-form="update" class="FormularioAjax" enctype="multipart/form-data">
                                    <input type="hidden" value="<?php echo $campos['id_organigrama']; ?>" name="idoup">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="form-group label-floating" aria-required="true">
                                            <label class="control-label">Titulo</label>
                                            <input class="form-control" type="text" name="titulooup" value="<?php echo $campos['titulo_or']; ?>" required >
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-xs-12 col-sm-12">

                                        <div class="col-xs-6">
                                            <legend>Imagen de Organigram ed</legend>
                                            <p class="text-center text-primary" >
                                                Seleccione una imagen/Foto en el siguiente campo. Formato de imagen admitido jPG y PNG.
                                            </p>

                                            <input type="file" name="imgOUP"  >
                                            <p class="help-block">Formato de imagen admitido JPG y PNG.</p>
                                        </div>
                                        <div class="col-xs-6 col-sm-6" >
                                            <img src="../<?php echo $campos['imagen_or']; ?>"  width="80%" height="10%" style="padding: auto;margin: auto; justify-content: center;">
                                            <input type="hidden" value="<?php echo $campos['imagen_or']; ?>" name="fotoAntiguo" >
                                        </div>
                                    </div>
                                    <div></div>
                                    <div class="col-xs-12 col-sm-12">
                                        <p class="text-center" style="margin-top: 20px;">
                                            <button type="submit" class="btn btn-success btn-raised btn-sm"><i class="zmdi zmdi-refresh"></i> Actualizar</button>
                                        </p>

                                    </div>

                                    <div class="RespuestaAjax"></div>
                                </form>
                            </div>

                            <?}?>
                            <?

                             //echo $classAdmin->actualizarOrganigramaController();
                            ?>


                    </div>
                </div>

            </div>


        </div>
    </div>
</div>
