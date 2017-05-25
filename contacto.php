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
$statnav = array("","","","","","","active");
include_once('layouts/partial/header.php');
?>

<section id="contacto">
    <div class="bg-contacto">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h1>CONTACTO <img src="images/icono-contacto.png" alt=""></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="contenido-contacto">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <ul>
                        <li>
                            <a href="tel:9991615910"> <i class="fa fa-phone-square fa-fw" aria-hidden="true"></i> &nbsp;(999) 161-5910</a>
                        </li>
                        <li>
                            <a href="mailto:info@logicsystems.com.mx"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i> &nbsp;info@logicsystems.com.mx</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-facebook-square fa-fw" aria-hidden="true"></i> &nbsp;LogicSystemsMX</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <ul>
                        <li>
                            <a href=""><i class="fa fa-map-marker fa-fw" aria-hidden="true"></i> &nbsp;Calle 70 #422 por 45 y 47, Centro, C.P. 97000 Mérida, Yucatán, México.</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <div class="row">
                        <div class="contact-form">
                            <!-- Start Contact Form -->
                            <form id="formPopup" action="#" method="post" role="form">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input id="formNamec" type="text" class="input requiredc" name="nombrec" placeholder="Nombre" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input id="empresac" type="text" class="input requiredc" name="empresac" placeholder="Empresa" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input id="estadoc" type="text" class="input requiredc" name="estadoc" placeholder="Estado" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input id="ciudadc" type="text" class="input requiredc" name="ciudadc" placeholder="Ciudad" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input id="telefonoc" type="text" class="input requiredc" name="telefonoc" placeholder="Teléfono" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input id="formEmailc" type="email" class="input email requiredc" name="emailc" placeholder="Correo electrónico"  required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <select class="form-control" name="estadoc" id="estadoc">
                                            <option>¿En cuál producto estás interesado?</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <textarea id="messagec" class="textarea" name="messagec" rows="5" cols="40" placeholder="Comentarios"></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-7 col-md-7">
                                            <div class="form-group">
                                                <div class="captcha">
                                                    <div id="recaptchaContacto"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-5 col-md-5">
                                            <div class="form-group">
                                                <button value="Submit" id="contactForm_submit_contacto" class="btn_frm_contact center-block" type="submit">ENVIAR</button>
                                            </div>
                                        </div>
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
</section>

<?php
include_once('layouts/partial/footer.php');
?>

<!-- jQuery -->
<script src="js/jquery-1.9.1.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
<script src="js/main.js"></script>

<script type="text/javascript">
    var widgetIdC;
    var widgetIdF;
    var onloadCallback = function() {
        widgetIdC = grecaptcha.render('recaptchaContacto', {
            'sitekey' : '6LfMLREUAAAAALlMy1l66mbpk7rwPgzMCMWlimCf'
        });
        widgetIdF = grecaptcha.render('recaptchaFooter', {
            'sitekey' : '6LfMLREUAAAAALlMy1l66mbpk7rwPgzMCMWlimCf'
        });
    };
</script>

</body>
</html>