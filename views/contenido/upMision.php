<?

$datos=explode("/", $_GET['action']);

require_once "./controllers/adminListControllersC.php";
$classAdmin=new adminListControllerssC();

$filesA=$classAdmin->datos_MisionVision_controlador($datos[1]);
if($filesA->rowCount()){
    $campos=$filesA->fetch();

?>
<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles text-center"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Actualizar <?php echo $campos['tipo_mv']; ?>  <small></small></h1>
    </div>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora voluptatum eius porro ipsa quae voluptates</p>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">

            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="new">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-md-10 col-md-offset-1">
                                <form action="<?php echo SERVERURL; ?>ajax/adminAjax.php" method="POST"  autocomplete="off" data-form="update" class="FormularioAjax" enctype="multipart/form-data">

                                    <input type="hidden" value="<?php echo $campos['id_mv']; ?>" name="idMVUP">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label"><?php echo $campos['tipo_mv']; ?></label>
                                            <input class="form-control" type="text" value="<?php echo $campos['tipo_mv']; ?>" name="tipoMVUP">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Contenido <?php echo $campos['tipo_mv']; ?></label>
                                            <textarea id="" cols="30" rows="5" placeholder="Introducción del Articulo" class="form-control" autofocus   required  name="contMVUP"><?php echo $campos['contenido_mv']; ?></textarea>

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