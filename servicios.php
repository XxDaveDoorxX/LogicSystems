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
$statnav = array("","active","","","");
include_once('layouts/partial/header.php');
?>

<section id="servicios">
    <div class="bg-servicios">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h1>SERVICIOS <img src="images/icono-servicios.png" alt=""></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-ti">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <img src="images/ti.jpg" alt="" class="img-responsive center-block">
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8">
                            <div>
                                <h2>DESARROLLO DE SOLUCIONES DE TI</h2>
                                <hr>
                                <p>
                                    Diseñamos y programamos sitios web con elementos vanguardistas, fáciles de utilizar que representan un punto de venta más en la captación de clientes y oportunidades de negocio.
                                </p>
                            </div>
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
<!-- WOW-->
<script src="js/wow.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
<script src="js/main.js"></script>

<script type="text/javascript">
    var widgetIdP;
    var widgetIdF;
    var onloadCallback = function() {
        widgetIdF = grecaptcha.render('recaptchaFooter', {
            'sitekey' : '6LfMLREUAAAAALlMy1l66mbpk7rwPgzMCMWlimCf'
        });
    };
</script>

</body>
</html>