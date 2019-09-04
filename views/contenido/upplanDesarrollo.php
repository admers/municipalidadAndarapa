<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles text-center"><i class="zmdi zmdi-book zmdi-hc-fw"></i>Actualizar Plan de Desarrollo <small></small></h1>
    </div>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora voluptatum eius porro ipsa quae voluptates</p>
</div>

<?php
$datos=explode("/", $_GET['action']);
require_once "./controllers/adminListControllersC.php";
$classAdmin=new adminListControllerssC();

$filesA=$classAdmin->datos_PlanDcontrolador($datos[1]);
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
                                    <input type="hidden" value="<?php echo $campos['id_plan_desarrollo']; ?>" name="idpdUP">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Titulo</label>
                                            <input class="form-control" type="text" name="titulopdUP" value="<?php echo $campos['titulo_plan']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Contenido</label>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Contenido</label>
                                                <textarea id="" cols="30" rows="5" placeholder="Introducción del Articulo" class="form-control" autofocus  name="contenidopdUP" required ><?php echo $campos['contenido_plan']; ?></textarea>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-xs-12 col-sm-12">

                                        <div class="col-xs-12">
                                            <legend>Documento de Plan de Desarrollo</legend>
                                            <p class="text-center text-primary">
                                                Seleccione un documento/documento en el siguiente campo. Formato de documentos admitido PDF y DOCs.
                                            </p>
                                        </div>

                                        <label class="control-label">Archivo</label>
                                        <input class="form-control " type="file"  name="archivoUP"  required>
                                        <p class="help-block">Formato de documentos admitido PDF y DOC.</p>
                                        <input type="hidden" value="<?php echo $campos['direc_plan']; ?>" name="archivoAntiguoPD" >

                                    </div>
                                    <hr>
                                    <div class="col-xs-12 col-sm-12">
                                        <p class="text-center">
                                            <input type="submit"  class="btn btn-success btn-raised btn-sm" value="Actualizar Plan de Desarrollo">
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
