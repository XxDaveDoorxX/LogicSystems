<?php
include_once ('Class/imagenes.php');
include_once ('Class/Alianza.php');



$tmpalianza = new Alianza(0,'','','','');
$alianza = $tmpalianza->listar();

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
    <link rel="stylesheet" href="css/stars.css">


    <link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,700" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<?php
$statnav = array("","","","active","","","");
include_once('layouts/partial/header.php');
?>

<section id="alianzas">
    <div class="bg-alianzas">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h1>ALIANZAS COMERCIALES</h1>
                </div>
            </div>
        </div>
    </div>

    <?php
        foreach ($alianza as $e) {

            $tmpimgalianza = new Imagen('imagenes_alianzas','','','','','',$e['id'],0);
            $imgalianza = $tmpimgalianza->listar_x_id_c();
            $alzimg = current($imgalianza);

            ?>
            <div class="bg-alianzas-color">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <img src="assets/images/data/imagenes_alianzas/crop_<?php echo $alzimg['arch_img'] ?>" alt="" class="img-responsive center-block">
                                </div>
                                <div class="col-xs-12 col-sm-8 col-md-8">
                                    <h2><?php echo $e['title'] ?></h2>
                                    <div class="stars starrr" data-rating="<?php echo $e['rating'] ?>"></div>
                                    <p>
                                        <?php echo $e['comment'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
        }
    ?>

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

<script src="js/stars.js"></script>

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