<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles text-center" ><i class="zmdi zmdi-book zmdi-hc-fw"></i>Actualizar Slider <small></small></h1>
    </div>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora voluptatum eius porro ipsa quae voluptates</p>
</div>
<hr>
<?

$datos=explode("/", $_GET['action']);
require_once "./controllers/sliderControllersC.php";
$classAdmin=new GestorSlidersC();

$filesA=$classAdmin->datos_Slider_controlador($datos[1]);
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
                            <div class="col-xs-12 col-md-10 col-md-offset-1">
                                <form action="<?php echo SERVERURL; ?>ajax/gestorSlider.php" method="POST" autocomplete="off" data-form="update" class="FormularioAjax" enctype="multipart/form-data">
                                    <input type="hidden" value="<?php echo $campos['idslider']; ?>" name="idSliderUp">

                                    <div class="col-xs-12 col-sm-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Titulo</label>
                                            <input class="form-control" type="text" name="titleSliderUp" value="<?php echo $campos['titulo_slider']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12">

                                        <div class="col-xs-6">
                                            <legend>Imagen de Organigram ed</legend>
                                            <p class="text-center text-primary" >
                                                Seleccione una imagen/Foto en el siguiente campo. Formato de imagen admitido jPG y PNG.
                                            </p>

                                            <input type="file" name="imgSliderup"  >
                                            <p class="help-block">Formato de imagen admitido JPG y PNG.</p>
                                        </div>
                                        <div class="col-xs-6 col-sm-6" >
                                            <img src="../<?php echo $campos['ruta_slider']; ?>"  width="80%" height="10%" style="padding: auto;margin: auto; justify-content: center;">
                                            <input type="hidden" value="<?php echo $campos['ruta_slider']; ?>" name="fotoAntiguoSlider" >
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="col-xs-12 col-sm-12">
                                        <p class="text-center" style="margin-top: 20px;">
                                            <button type="submit" class="btn btn-success btn-raised btn-sm"><i class="zmdi zmdi-refresh"></i> Actualizar</button>
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

