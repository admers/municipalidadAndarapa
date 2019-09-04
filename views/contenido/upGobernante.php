<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles text-center"><i class="zmdi zmdi-book zmdi-hc-fw"></i>Actualizar Gobernante <small></small></h1>
    </div>
</div>
<?

//$insAdmin=new adminListControllerssC();

$datos=explode("/", $_GET['action']);
require_once "./controllers/adminListControllersC.php";
$classAdmin=new adminListControllerssC();

$filesA=$classAdmin->datos_Gobernante_controlador($datos[1]);
if($filesA->rowCount()){
$campos = $filesA->fetch();
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
                                <form action="<?php echo SERVERURL; ?>ajax/adminAjax.php" method="POST" autocomplete="off" data-form="update" class="FormularioAjax" enctype="multipart/form-data">

                                    <input type="hidden" value="<?php echo $campos['idgobernante']; ?>" name="idGoberUp">

                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Nombre</label>
                                            <input class="form-control" type="text" name="nombreGoberUp"  value="<?php echo $campos['nombre_gober']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Apellido</label>
                                            <input class="form-control" type="text" name="apellidoGoberUp" value="<?php echo $campos['apellido_gober']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Dni</label>
                                            <input class="form-control" type="number" name="dniGoberUp" value="<?php echo $campos['dni_gobernante']; ?>"  maxlength="8">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Fecha de Gestion</label>
                                            <input class="form-control" type="text" name="fechaGoberUp" value="<?php echo $campos['gestion']; ?>" required>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12">

                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group label-floating">
                                            <label class="controllers-label">Cargo:</label><?php echo $campos['cargo_gober']; ?>
                                            <select class="form-control" name="cargoGoberUp" required>
                                                <option value="" disabled="" selected="">Cargo</option>
                                                <option value="Alcalde">Alcalde</option>
                                                <option value="Regidores">Regidores</option>
                                                <option value="Funcionarios">Funcionarios</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <legend>Imagen de Organigram ed</legend>
                                            <p class="text-center text-primary" >
                                                Seleccione una imagen/Foto en el siguiente campo. Formato de imagen admitido jPG y PNG.
                                            </p>
                                            <input type="file" name="imgGoberUp"  >
                                            <p class="help-block">Formato de imagen admitido JPG y PNG.</p>

                                        </div>
                                        <div class="col-xs-12 col-sm-4" >
                                            <div class="form-group label-floating">
                                            <img src="../<?php echo $campos['rutaGobernante']; ?>"  width="100%" height="10%" style="padding: auto;margin: auto; justify-content: center;">
                                            <input type="hidden" value="<?php echo $campos['rutaGobernante']; ?>" name="fotoAntiguoGobernante" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Mensaje</label>
                                            <textarea id="" cols="30" rows="5" placeholder="Introducción del Articulo" class="form-control"  maxlength="170" required name="mensajeGoberUp"><?php echo $campos['mensage']; ?></textarea>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-xs-12 col-sm-12">
                                        <p class="text-center" style="margin-top: 20px;">
                                            <button type="submit" class="btn btn-success btn-raised btn-sm"><i class="zmdi zmdi-refresh"></i> Actualizar Gobernante</button>
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

