<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Noticias <small></small></h1>
    </div>
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

                            <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">



                                <button id="btnAgregarArticulo" class="btn btn-info btn-raised btn-lg"><i class="zmdi zmdi-archive"> </i> Agregar Noticia</button>
<!--                                <button id="btnListNoticia" class="btn btn-info btn-raised btn-lg"><i class="zmdi zmdi-archive"> </i> Lista de Noticias</button>
-->
                                <div id="agregarArtículo" style="display:none">

                                    <form action="" method="post" enctype="multipart/form-data">
                                        <input type="text" id="title1" placeholder="Título de Noticia" class="form-control" name="Notitulo" required>

                                        <textarea name="Nointroduccion" id="intro" cols="10" rows="5" placeholder="Introducción de Noticia" maxlength="60" class="form-control" required></textarea>

                                        <input type="file" name="imagen" class="btn btn-default" id="subirFotoNoti" required>

                                        <p>Tamaño recomendado: 1920px * 1080px, peso máximo 5MB</p>

                                        <div id="arrastreImagenArticulo">
                                            <!--                <div id="imagenArticulo"><img src="views/images/articulos/landscape01.jpg" class="img-thumbnail"></div>
                                            -->            </div>

                                        <textarea name="Nocontenido" id="" cols="30" rows="10" placeholder="Contenido de Noticia" class="form-control"  required></textarea>

                                        <div class="col-xs-12 col-sm-12">
                                            <p class="text-center">
                                                <input type="submit" id="guardarArticulo" class="btn btn-info btn-raised btn-sm" value="Guardar Noticia">
                                            </p>
                                        </div>
                                    </form>

                                </div>

                                <?

                                // require_once "./controllers/GestorArticulosC.php";
                                $crearNoticia = new adminListControllerssC();
                                 $crearNoticia->guardarNoticiaController();
                                ?>



                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade active in" >
                    <?php
                    //$insAdmin->actualizarSliderController();
                    $pagina=explode("/",$_GET['action']);
                    echo $insAdmin->vistaNoticiaController($pagina[1],10);


                    ?>


                </div>
            </div>


        </div>
    </div>
</div>