

<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles">System <small>Tiles</small></h1>
    </div>
</div>
<div class="full-box text-center" style="padding: 30px 10px;">
    <?php
    require "./controllers/adminListControllersC.php";
    $IAdmin= new adminListControllerssC();
    $CAdminN=$IAdmin->datos_NotConteo_ontrolador("Conteos", 0);
    $CAdmin=$IAdmin->datos_obrasPConteo_ontrolador("Conteo",0);
    $CNov=$IAdmin->datos_NovedadesConteocontrolador("Conteo",0);
    $CGob=$IAdmin->datos_GobernanteConteo_controlador("Conteos",0);
    $COrg=$IAdmin->datos_OrganigramaConteo_controlador("Conteo",0);

    require "./controllers/sliderControllersC.php";
    $iSl=new GestorSlidersC();
    $CSli= $iSl-> datos_SliderConteo_controlador("Conteos",0);

    ?>
    <article class="full-box tile">
        <a href="<?echo SERVERURL;?>slider/">
        <div class="full-box tile-title text-center text-titles text-uppercase">
            Slider
        </div>
        <div class="full-box tile-icon text-center">
            <i class="zmdi zmdi-slideshow zmdi-hc-f"></i>
        </div>
        <div class="full-box tile-number text-titles">
            <p class="full-box"><?php echo $CSli->rowCount(); ?></p>
            <small>Registrado</small>
        </div>
        </a>
    </article>
    <article class="full-box tile">
        <a href="<?echo SERVERURL;?>obrasProyectos/">
        <div class="full-box tile-title text-center text-titles text-uppercase">
           Obras Proyectos
        </div>
        <div class="full-box tile-icon text-center">
            <i class="zmdi zmdi-case zmdi-hc-f"></i>
        </div>
        <div class="full-box tile-number text-titles">
            <p class="full-box"><?php echo $CAdmin->rowCount(); ?></p>
            <small>Registrado</small>
        </div>
        </a>
    </article>
       <!-- --><?/*
        require "./controllers/noticiassControllersCsC.php";
        $insN=new noticiassControllersC();
        //$CAdminN=$IAdminn->datos_obrasPConteo_ontrolador("Conteo",0);
        $CAdminN=$insN->datos_NotConteo_ontrolador("Conteos", 0);
        */?>
    <article class="full-box tile">
        <a href="<?echo SERVERURL;?>noticias/">
        <div class="full-box tile-title text-center text-titles text-uppercase">
            Noticias
        </div>
        <div class="full-box tile-icon text-center">
            <i class="zmdi zmdi-card zmdi-hc-fw"></i>
        </div>
        <div class="full-box tile-number text-titles">
            <p class="full-box"><?php echo $CAdminN->rowCount(); ?></p>
            <small>Registrado</small>
        </div>
        </a>
    </article>
    <article class="full-box tile">
        <a href="<?echo SERVERURL;?>novedades/">
        <div class="full-box tile-title text-center text-titles text-uppercase">
            Novedades
        </div>
        <div class="full-box tile-icon text-center">
            <i class="zmdi zmdi-book zmdi-hc-fw"></i>
        </div>
        <div class="full-box tile-number text-titles">
            <p class="full-box"><?php echo $CNov->rowCount(); ?></p>
            <small>Registrado</small>
        </div>
        </a>
    </article>

    <article class="full-box tile">
        <a href="<?echo SERVERURL;?>gobernante/">
        <div class="full-box tile-title text-center text-titles text-uppercase">
            Gobernante
        </div>
        <div class="full-box tile-icon text-center">
            <i class="zmdi zmdi-male-female"></i>
        </div>
        <div class="full-box tile-number text-titles">
            <p class="full-box"><?php echo $CGob->rowCount(); ?></p>
            <small>Registrado</small>
        </div>
        </a>
    </article>
    <article class="full-box tile">
        <a href="<?echo SERVERURL;?>organigrama/">
        <div class="full-box tile-title text-center text-titles text-uppercase">
            Organigrama
        </div>
        <div class="full-box tile-icon text-center">
            <i class="zmdi zmdi-bookmark"></i>
        </div>
        <div class="full-box tile-number text-titles">
            <p class="full-box"><?php echo $COrg->rowCount(); ?></p>
            <small>Registrado</small>
        </div>
        </a>
    </article>

</div>

</section>