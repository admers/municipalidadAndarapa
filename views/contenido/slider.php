<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Slider <small></small></h1>
    </div>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora voluptatum eius porro ipsa quae voluptates</p>
</div>
<hr>
<?
require_once "./controllers/sliderControllersC.php";
//$insAdmin=new GestorSlidersC();
$insAdmin=new GestorSlidersC();

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
                                            <label class="control-label">Titulo</label>
                                            <input class="form-control" type="text" name="titleSlider" required >
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 text-center">

                                            <label class="control-label">Imagen</label>
                                            <input class="form-control " type="file" id="subirFotoSlider" name="imagen" required>
                                             <p class="help-block">Formato de imágenes admitido png y jpg. Tamaño máximo 5MB</p>


                                    </div>
                                    <div class="col-xs-12 col-sm-12">

                                        <div id="arrastreImagenArticulo">
                                            <!--                <div id="imagenArticulo"><img src="views/images/articulos/landscape01.jpg" class="img-thumbnail"></div>
                                    --> </div>


                                    </div>


                                    <hr>
                                    <div class="col-xs-12 col-sm-12">
                                        <p class="text-center">
                                        <input type="submit" class="btn btn-info btn-raised btn-sm" id="guardarSlider" value="Guardar Slider">

                                        </p>
                                    </div>
                                </form>


                                <?

                                //require_once "./controllers/sliderControllersC.php";
                                $guardar=new GestorSlidersC();
                                $guardar->guardarSlider();
                               
                                ?>


                            </div>
                        </div>
                    </div>
                </div>
                 <div class="tab-pane fade active in" >
                    <?php
                   // echo $insAdmin->actualizarSliderController();
                   // echo  $insAdmin->borrarSliderController();
                   // $insAdmin->eliminarSliderController();
                     $pagina=explode("/",$_GET['action']);
                    echo $insAdmin->vistaSliderController($pagina[1],5);
                       
                       
                     ?>
                     


                    <!--Paginador-->


                </div>
            </div>


        </div>
    </div>
</div>
</section>