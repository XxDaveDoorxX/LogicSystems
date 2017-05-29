<?php
include_once ('Class/Descarga.php');
include_once ('Class/imagenes.php');
require_once ('Class/uarchivo.php');


$tmpdownload = new Descarga(0,'','');
$download = $tmpdownload->listar();



?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logic Systems creación integral de tecnología</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/default.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,700" rel="stylesheet">

    <!--fancybox-->
    <link rel="stylesheet" type="text/css" href="css/fancybox/css/jquery.fancybox.css?v=2.1.7" media="screen" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<?php
$statnav = array("","","","","active","","");
include_once('layouts/partial/header.php');
?>

<section id="descargas">
    <div class="bg-descargas">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h1>DESCARGAS <img src="images/icono-descarga.png" alt=""></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="contenido-descargas">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="row">
                        <?php
                            foreach ($download as $e) {
                                $tmpimg = new Imagen('imagenes_descargas','','','','','', $e['id'],0);
                                $downloadimg = $tmpimg->listar_x_id_c();
                                $dw = current($downloadimg);

                                $tmparch = new uArchivo('archivos_descarga','','','','','', $e['id']);
                                $arch = $tmparch->listar_1_x_id_c();
                                ?>
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="caja-descargas">
                                        <img src="assets/images/data/imagenes_descargas/crop_<?php echo $dw['arch_img'] ?>" class="img-responsive center-block">
                                        <h2><?php echo $e['title'] ?></h2>
                                        <p>
                                            <?php
                                                echo $e['description']
                                            ?>
                                        </p>
                                        <a href="#" class="btn-descarga" id="btn_download" rel="<?php echo $e['id']; ?>" data-archivo="<?php echo current($arch)['archivo']; ?>" data-title ="<?php echo $e['title'] ?>" data-toggle="modal" data-target="#myModal">DESCARGA
                                            GRATUITA</a>
                                    </div>
                                </div>

                                <?php
                            }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once('layouts/partial/footer.php');
?>

<!-- Modal -->
<div class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal-label">
    <div class="modal-dialog-show" role="document">
        <!-- Modal content-->
        <div class="modal-content-show">
            <div class="modal-header-show">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="row">
                            <h5 class="modal-title" id="title-m">6 RECOMENDACIONES PARA MEJORAR EL MANEJO DE TU CARTERA DE CLIENTES</h5>
                            <p class="modal-txt">
                                Llena el siguiente formulario para continuar con la descarga.<br>
                                Recibe cada mes nuestros e-book que te ayudarán a administrar tu empresa.
                            </p>
                            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                                <div class="contact-form">
                                    <div class="contactForm">
                                        <!-- Start Contact Form -->
                                        <form id="formPopup" action="#" method="post" role="form">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group row">
                                                    <input id="formNamep" type="text" class="input requiredp" name="nombrep" placeholder="* Nombre" required>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group row">
                                                    <input id="formEmailp" type="email" class="input email requiredp" name="emailp" placeholder="* Correo electrónico"  required>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group row">
                                                    <select class="form-control" name="estadop" id="estadop">
                                                        <option>Estado</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-5 col-sm-offset-4 col-md-5 col-md-offset-4">
                                                <div class="form-group row">
                                                    <button value="Submit" id="contactForm_submit_popup" class="btn_frm_popup center-block" type="submit">ENVIAR</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="successMsg"></div>
                                        <!-- End Contact Form -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="js/jquery-1.9.1.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
<script src="js/main.js"></script>

<script type="text/javascript">
    var widgetIdP;
    var widgetIdF;
    var onloadCallback = function() {
        widgetIdP = grecaptcha.render('recaptchaPopup', {
            'sitekey' : '6LfMLREUAAAAALlMy1l66mbpk7rwPgzMCMWlimCf'
        });
    };
    var onloadCallback = function() {
        widgetIdF = grecaptcha.render('recaptchaFooter', {
            'sitekey' : '6LfMLREUAAAAALlMy1l66mbpk7rwPgzMCMWlimCf'
        });
    };



</script>

</body>
</html>