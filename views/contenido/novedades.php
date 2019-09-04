<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Novedades <small></small></h1>
    </div>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora voluptatum eius porro ipsa quae voluptates</p>
</div>

<?
require_once "./controllers/adminListControllersC.php";
$insAdmin=new adminListControllerssC();

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
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Titulo</label>
                                            <input class="form-control" type="text" name="tituloNov" required>
                                        </div>
                                    </div>


                                    <div class="col-xs-12 col-sm-12">

                                        <div class="col-xs-12">
                                            <legend>Documento de Novedades</legend>
                                            <p class="text-center text-primary">
                                                Seleccione un documento/documento en el siguiente campo. Formato de documentos admitido PDF y DOCs.
                                            </p>
                                        </div>

                                        <label class="control-label">Archivo</label>
                                        <input class="form-control " type="file"  name="archivoNov" required>
                                        <p class="help-block">Formato de documentos admitido PDF y DOC.</p>

                                    </div>
                            </div>
                            <hr>
                            <div class="col-xs-12 col-sm-12">
                                <p class="text-center">
                                    <input type="submit"  class="btn btn-info btn-raised btn-sm" value="Guardar Plan de Desarrollo">
                                </p>
                            </div>
                            </form>
                        </div>
                        <?

                        //require_once "./controllers/adminListControllersC.php";
                        $crearop = new adminListControllerssC();
                        $crearop->guardarNovedadesController();
                        ?>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade active in" >
                <div class="table-responsive">
                    <?php
                    //$insAdmin->actualizarObrasPController();

                    $pagina=explode("/",$_GET['action']);
                    echo $insAdmin->vistaNovedadescontroller($pagina[1],5);
                    ?>
                </div>
            </div>
        </div>


    </div>
</div>
</div>