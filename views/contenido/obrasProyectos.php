
<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Obras y Proyectos <small></small></h1>
    </div>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora voluptatum eius porro ipsa quae voluptates</p>
</div>

<?
require_once "./controllers/adminListControllersC.php";
$insAdmin=new adminListControllerssC();

?>


<div class="container-fluid">
    <div class="row">

        <div class="col-xs-12">

            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="new">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                <button id="btnAgregarNoticia" class="btn btn-info btn-raised btn-lg"><i class="zmdi zmdi-archive"> </i> Agregar Obras Y Proyectos</button>

                                <div id="agregarArtículo" style="display:none">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="col-xs-12 col-sm-12">
                                            <div class="col-xs-12 col-sm-6">
                                                <label class="control-label">Titulo</label>
                                                <input  class="form-control" type="text" name="titleObrasP"  required>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">

                                                <label class="control-label">Codigo</label>
                                                <input class="form-control" type="text" name="codigoObrasP" required>
                                            </div>

                                        </div>



                                        <label class="control-label">Imagen</label>
                                        <input class="form-control " type="file" id="subirFotoSlider" name="imagen" required>
                                        <p class="help-block">Formato de imágenes admitido png y jpg. Tamaño máximo 5MB</p>
                                        <div id="arrastreImagenArticulo">
                                        </div>



<!--                                    <div class="col-xs-12 col-sm-12">
-->
                                        <label class="control-label">Estado de Obras y Proyectos</label>
                                            <select class="form-control" name="estadoObrasP" required>
                                                <option value="" disabled="" selected="">Estado</option>
                                                <option value="proyectado">PROYECTADO</option>
                                                <option value="ejecucion">EJECUCION</option>
                                                <option value="ejecutado">EJECUTADO</option>
                                            </select>

<!--                                    </div>
                                    <div class="col-xs-12 col-sm-12">-->
                                        <label class="control-label">Contenido</label>
                                        <textarea id="" name="contenidoObrasP" autofocus cols="30" rows="5" placeholder="Contenido de la noticia" class="form-control"  required></textarea>
                                        <!--</div>-->

                                        <hr>

                                        <div class="col-xs-12 col-sm-12">
                                            <p class="text-center">
                                                <input type="submit"  class="btn btn-info btn-raised btn-sm" value="Guardar Obras y Proyectos">
                                            </p>
                                        </div>


                                </form>

                                </div>

                                <?

                                //require_once "./controllers/adminListControllersC.php";
                                $crearop = new adminListControllerssC();
                                $crearop->guardarObrasPControllers();
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade active in" id="lista">
                    <div class="table-responsive">

                    <?php
                    $pagina=explode("/",$_GET['action']);
                    echo $insAdmin->vistaObrasPController($pagina[1],10);
                    ?>
                    </div>

                </div>
            </div>


        </div>
    </div>
</div>
</section>