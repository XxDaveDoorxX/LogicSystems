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

    <!--slider-->
    <link rel="stylesheet" href="css/slider/css/fexslider.css" type="text/css" media="all"/>

    <!-- OWL -->
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css">


    <link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,700" rel="stylesheet"

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<?php
$statnav = array("","active","","","","","");
include_once('layouts/partial/header.php');

?>

<section id="bg-product">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="product-item">
                    <div class="prod-img">
                        <img class="img-responsive center-block" src="images/product.png">
                    </div>
                    <div class="info-product">
                        <h1>CIB - FINANCIERA</h1>
                        <p><span>Codigo:</span> xxxxxxx</p>
                        <p>Ideal para financieras y SOFOMS</p>
                    </div>
                    <div class="btn-row-produc-demo">
                        <a class="btn-demo-product" href="">Solicita tu demo gratis</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">

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

<!--slider-->
<script type='text/javascript' src='css/slider/js/jquery.flexslider-min.js'></script>

<!--slick-->
<script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
<!--OWL -->
<script src="js/owl.carousel.min.js"></script>

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