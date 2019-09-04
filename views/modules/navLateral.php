<section class="full-box cover dashboard-sideBar">
    <div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
    <div class="full-box dashboard-sideBar-ct">
        <!--SideBar Title -->
        <div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
            <? echo EMPRESA;?> <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
        </div>
        <!-- SideBar User info -->
        <div class="full-box dashboard-sideBar-UserInfo">
            <figure class="full-box">
                <img src="<?echo SERVERURL;?>views/assets/img/avatar.png" alt="UserIcon">
            </figure>
            <ul class="full-box list-unstyled text-center">
               <!-- <li>
                    <a href="#!">
                        <i class="zmdi zmdi-settings"></i>
                    </a>
                </li>-->
                <li>
                    <span style="display: block;">Salir</span>
                    <a href="<?echo $_SESSION["nombres"];?>" class="btn-exit-system" >
                        <i class="zmdi zmdi-power"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- SideBar Menu -->
        <ul class="list-unstyled full-box dashboard-sideBar-Menu">
            <li>
                <a href="<?echo SERVERURL;?>inicio/">
                    <i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Inicio
                </a>
            </li>
            <li>
                <a href="<?echo SERVERURL;?>slider/" class="btn-sideBar-SubMenu">
                    <i class="zmdi zmdi-case zmdi-slideshow"></i> Slider <!--<i class="zmdi zmdi-caret-down pull-right"></i>-->
                </a>
            </li>
            <li>
                <a href="<?echo SERVERURL;?>obrasProyectos/" class="btn-sideBar-SubMenu">
                    <i class="zmdi zmdi-case zmdi-hc-fw"></i> Obras Proyectos <!--<i class="zmdi zmdi-caret-down pull-right"></i>-->
                </a>

            </li>
            <li>
                <a href="<?echo SERVERURL;?>noticias/" class="btn-sideBar-SubMenu">
                    <i class="zmdi zmdi-card zmdi-hc-fw"></i> Noticias
                </a>

            </li>
            <li>
                <a href="<?echo SERVERURL;?>novedades/" class="btn-sideBar-SubMenu">
                    <i class="zmdi zmdi-book zmdi-hc-fw"></i> Novedades
                </a>

            </li>
            <li>
                <a href="#!" class="btn-sideBar-SubMenu">
                    <i class="zmdi zmdi-shield-security zmdi-hc-fw"></i> Settings Municiapalidad <i class="zmdi zmdi-caret-down pull-right"></i>
                </a>
                <ul class="list-unstyled full-box">
                    <li>
                        <a href="<?echo SERVERURL;?>gobernante/"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> Gobernante </a>
                    </li>
                    <li>
                        <a href="<?echo SERVERURL;?>misionVision/"><i class="zmdi zmdi-font zmdi-hc-fw"></i> Mision Vision </a>
                    </li>
                    <li>
                        <a href="<?echo SERVERURL;?>planDesarrollo/"><i class="zmdi zmdi-font zmdi-hc-fw"></i> Plan de Desarrollo </a>
                    </li>
                    <li>
                        <a href="<?echo SERVERURL;?>organigrama/"><i class="zmdi zmdi-font zmdi-hc-fw"></i> Organigrama</a>
                    </li>
                </ul>

            </li>
        </ul>
    </div>
</section>