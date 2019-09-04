<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Gobernante <small></small></h1>
    </div>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora voluptatum eius porro ipsa quae voluptates</p>
</div>
<?

//$insAdmin=new adminListControllerssC();
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
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Nombre</label>
                                            <input class="form-control" type="text" name="nombre" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Apellido</label>
                                            <input class="form-control" type="text" name="apellido" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Dni</label>
                                            <input class="form-control" type="text" name="dni" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">

                                        <div class="form-group label-floating">
                                            <!--
                                                                                        <label class="controllers-label">Cargo</label>
                                            -->

                                            <select class="form-control" name="cargo" required>
                                                <option value="" disabled="" selected="">Cargo</option>
                                                <option value="Alcalde">Alcalde</option>
                                                <option value="Regidores">Regidores</option>
                                                <option value="Funcionarios">Funcionarios</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Fecha de Gestion</label>
                                            <input class="form-control" type="text" name="fecha" required>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6">
                                           <p class="help-block">Imagen</p>

                                            <input class="form-control " type="file" id="subirFotoGobernante" name="img" required>

                                            <p class="help-block">Formato de imágenes admitido png y jpg. Tamaño máximo 5MB</p>


                                    </div>
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Mensaje</label>
                                            <textarea id="" cols="30" rows="5" placeholder="Introducción del Articulo" class="form-control"  maxlength="170" required name="mensaje"> </textarea>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-xs-12 col-sm-12">
                                        <p class="text-center">
                                            <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
                                        </p>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <?
                        $gobernante= new adminListControllerssC();
                        $gobernante->guardarGobernanteControllers();

                        ?>
                    </div>
                </div>
                <div class="tab-pane fade active in" >
                    <?php
                     //echo $insAdmin->actualizarSliderController();
                    $pagina=explode("/",$_GET['action']);
                    echo $insAdmin->vistaGobernanteController($pagina[1],10);


                    ?>
                   <!-- <div class="table-responsive">
                        <table class="table table-hover text-center">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Titulo</th>
                                <th class="text-center">Introduccion</th>
                                <th class="text-center">Imagen</th>
                                <th class="text-center">Contenido</th>
                                <th class="text-center">Update</th>
                                <th class="text-center">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Andahuaylas 2019...........</td>
                                <td>Andahuaylas comienza el rendicion de cuenta de 100 dias ...</td>
                                <td>Foto  1</td>
                                <td> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, aliquid </td>

                                <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
                                <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Andarapa faina del canal ...</td>
                                <td>Andarapa faina del canal del distrito de Andarapa... </td>
                                <td>Foto 2</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad corporis ea facere fugit </td>
                                <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
                                <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Andarapa faina del canal ...</td>
                                <td>Andarapa faina del canal del distrito de Andarapa... </td>
                                <td>Foto 3</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad corporis ea facere fugit </td>
                                <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
                                <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Andahuaylas 2019...........</td>
                                <td>Andahuaylas comienza el rendicion de cuenta de 100 dias ...</td>
                                <td>Foto  4</td>
                                <td> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, aliquid </td>

                                <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
                                <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                            </tr>
                            </tbody>
                        </table>
                        <ul class="pagination pagination-sm">
                            <li class="disabled"><a href="#!">«</a></li>
                            <li class="active"><a href="#!">1</a></li>
                            <li><a href="#!">2</a></li>
                            <li><a href="#!">3</a></li>
                            <li><a href="#!">4</a></li>
                            <li><a href="#!">5</a></li>
                            <li><a href="#!">»</a></li>
                        </ul>
                    </div>-->
                </div>
            </div>


        </div>
    </div>
</div>

