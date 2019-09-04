<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles text-center"><i class="zmdi zmdi-book zmdi-hc-fw"></i>Actualizar Visión <small></small></h1>
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
                            <div class="col-xs-12 col-md-10 col-md-offset-1">
                                <form action="" method="post" enctype="multipart/form-data">

                                    <div class="col-xs-12 col-sm-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Visión</label>
                                            <input class="form-control" type="text" value="Visión" name="tvision">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Visión</label>
                                            <textarea id=""  autofocus cols="30" rows="5" placeholder="Introducción del Articulo" class="form-control"  name="cvision" required > </textarea>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-xs-12 col-sm-12">
                                        <p class="text-center">
                                            <input type="submit"  class="btn btn-info btn-raised btn-sm" value="Guardar Mision y Vision">
                                      </p>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>