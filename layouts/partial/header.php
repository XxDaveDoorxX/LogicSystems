<?php
if (!isset($statnav)) {
    $statnav = array("active","","","","","","");
}
?>
<header>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="."><img src="images/logo.png"  class="img-logo" alt="" width="230" height="38"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="<?php echo $statnav[0]; ?>">
                        <a href=".">Inicio</a>
                    </li>
                    <li class="<?php echo $statnav[1]; ?>">
                        <a href="productos">Productos</a>
                    </li>
                    <li>
                        <a href="">Servicios</a>
                    </li>
                    <li>
                        <a href="">Casos de éxito</a>
                    </li>
                    <li>
                        <a href="">Descargas</a>
                    </li>
                    <li>
                        <a href="">Nosotros</a>
                    </li>
                    <li>
                        <a href="#contacto">Contacto</a>
                    </li>
                    <li>
                        <a href="" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</header>