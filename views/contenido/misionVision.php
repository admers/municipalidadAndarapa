<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Misión y Visión <small></small></h1>
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
                            <div class="col-xs-12 col-md-10 col-md-offset-1" style="display: none">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Misión</label>
                                            <input class="form-control" type="text" value="Misión" name="tmision">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Misión</label>
                                            <textarea id="" cols="30" rows="5" placeholder="Introducción del Articulo" class="form-control" autofocus   required  name="cmision"> </textarea>

                                        </div>
                                    </div>

                                    <hr>
                                    <div class="col-xs-12 col-sm-12">
                                        <p class="text-center">
                                            <input type="submit"  class="btn btn-info btn-raised btn-sm" value="Guardar Mision y Vision">

<!--                                            <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
-->                                        </p>
                                    </div>
                                </form>
                            </div>
                            <?
                            $insAdmin->guardarMisionVisionController();
                            ?>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade active in" id="lista">
                    <?php

                    $pagina=explode("/",$_GET['action']);
                    echo $insAdmin->vistaMisionVisionController($pagina[1],5);
                    ?>
                </div>
            </div>


        </div>
    </div>
</div>