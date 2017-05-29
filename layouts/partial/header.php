<?php
include_once ('Class/Product.php');
if (!isset($statnav)) {
    $statnav = array("active","","","","","","");
}

$tmpproduct = new Product(0,'','','','','','','','');
$product = $tmpproduct->listar();

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
                    <li class="dropdown <?php echo $statnav[1]; ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php
                                foreach ($product as $e){
                            ?>
                            <li><a href="productos?id=<?php echo $e['id'] ?>"><?php echo $e['name'] ?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="<?php echo $statnav[2]; ?>">
                        <a href="servicios">Servicios</a>
                    </li>
                    <li class="dropdown <?php echo $statnav[3]; ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Casos de éxito <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="alianzas-comerciales">Alianzas comerciales</a></li>
                            <li><a href="clientes">Clientes</a></li>
                        </ul>
                    </li>
                    <li class="<?php echo $statnav[4]; ?>">
                        <a href="descarga">Descargas</a>
                    </li>
                    <li class="<?php echo $statnav[5]; ?>">
                        <a href="nosotros">Nosotros</a>
                    </li>
                    <li class="<?php echo $statnav[6]; ?>">
                        <a href="contacto">Contacto</a>
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