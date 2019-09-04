<!--
 * User: Cardenas
 * Time: 19:05
-->
<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles text-center"><i class="zmdi zmdi-book zmdi-hc-fw"></i>Actualizar Obras y Proyectos <small></small></h1>
    </div>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora voluptatum eius porro ipsa quae voluptates</p>
</div>

<?


//echo $datos[1];
$datos=explode("/", $_GET['action']);
require_once "./controllers/adminListControllersC.php";
$classAdmin=new adminListControllerssC();

$filesA=$classAdmin->datos_obrasP_ontrolador($datos[1]);
if($filesA->rowCount()){
    $campos=$filesA->fetch();

?>


<div class="container-fluid">
    <div class="row">

        <div class="col-xs-12">

            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="new">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <form action="<?php echo SERVERURL; ?>ajax/adminAjax.php" method="POST"  autocomplete="off" data-form="update" class="FormularioAjax" enctype="multipart/form-data">

                                        <input type="hidden" value="<?php echo $campos['id_op']; ?>" name="idObrasPUP">
                                        <div class="col-xs-12 col-sm-12">
                                            <div class="col-xs-12 col-sm-6">
                                                <label class="control-label">Titulo</label>
                                                <input class="form-control" type="text" name="titleObrasPUP"  VALUE="<?php echo $campos['titulo_op']; ?>" required>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">

                                                <label class="control-label">Codigo</label>
                                                <input class="form-control" type="text" name="codigoObrasPUP" VALUE="<?php echo $campos['codigo_op']; ?>" required>
                                            </div>

                                        </div>

                                        <div class="col-xs-12 col-sm-12">

                                            <div class="col-xs-6">
                                                <legend>Imagen de Organigram ed</legend>
                                                <p class="text-center text-primary" >
                                                    Seleccione una imagen/Foto en el siguiente campo. Formato de imagen admitido jPG y PNG.
                                                </p>

                                                <input type="file" name="imgOPUP"  >
                                                <p class="help-block">Formato de imagen admitido JPG y PNG.</p>
                                            </div>
                                            <div class="col-xs-6 col-sm-6" >
                                                <img src="../<?php echo $campos['ruta_op']; ?>"  width="100%" height="10%" style="padding: auto;margin: auto; justify-content: center;">
                                                <input type="hidden" value="<?php echo $campos['ruta_op']; ?>" name="fotoAntiguoOP" >
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12">

                                            <label class="control-label">Estado de Obras y Proyectos:</label>  <?php echo $campos['estado']; ?>
                                            <select class="form-control" name="estadoObrasPUP" required>
                                                <option value="" disabled="" selected="">Estado</option>
                                                <option value="proyectado">PROYECTADO</option>
                                                <option value="ejecucion">EJECUCION</option>
                                                <option value="ejecutado">EJECUTADO</option>
                                            </select>

                                        </div>
                                        <div class="col-xs-12 col-sm-12">
                                            <label class="control-label">Contenido</label>
                                            <textarea id="" name="contenidoObrasPUP" autofocus cols="30" rows="<?php echo (strlen($campos['titulo_op'])/2)+2;?>" placeholder="Contenido de obras  proyectos" class="form-control"   required ><?php echo $campos['contenido_op']; ?></textarea>
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