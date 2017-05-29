<?php
include_once ('Class/imagenes.php');
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
$statnav = array("","active","","","","","");
include_once('layouts/partial/header.php');

include_once ('Class/Thumbs.php');
include_once ('Class/Gallery.php');

$id = (isset($_REQUEST['id'])) ? htmlentities($_REQUEST['id'], ENT_QUOTES) : 0;

$tmpproduct = new Product($id, '','','','','','','','');
$tmpproduct->obtener();

if(empty($tmpproduct->id))
    header('Location: .');


$tmpimgprod = new Imagen('imagenes_productos','','','','','',$tmpproduct->id,0);
$imgproduct = $tmpimgprod->listar_x_id_c();



$tmpthumbs = new Thumbs(0,'', $id);
$thumbs = $tmpthumbs->listar_x_id_product();

$tmpgall = new Gallery(0,'', $id);
$gallery = $tmpgall->listar_x_id_product();


?>

<section id="bg-product">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="product-item">
                    <div class="prod-img">
                        <?php
                            if (isset($imgproduct[2])) {
                                ?>
                                <img class="img-responsive center-block" src="assets/images/data/imagenes_productos/<?php echo $imgproduct[2]['arch_img'] ?>">
                                <?php
                            }else{
                        ?>
                        <img class="img-responsive center-block" src="images/product.png">
                        <?php
                           }
                        ?>
                    </div>
                    <div class="info-product">
                        <h1><?php echo $tmpproduct->name ?></h1>
                        <p><span>Codigo:</span> <?php echo $tmpproduct->code ?></p>
                        <p><?php echo $tmpproduct->description_first ?></p>
                    </div>
                    <div class="btn-row-produc-demo">
                        <a class="btn-demo-product" href="">Solicita tu demo gratis</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="row">
                    <div class="product-item">
                        <div class="video">
                            <img class="img-responsive center-block" src="images/video.jpg">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        foreach ($thumbs as $t) {
                            $tmpimgt = new Imagen("imagenes_thumbs","","",0,"","",$t['id'],0);
                            $galthumb = $tmpimgt->listar_x_id_c();
                            if(isset($galthumb)) {
                                $max = (count($galthumb) < 6) ? count($galthumb) : 6;
                                $ex = array_slice($galthumb, 0, $max);
                                foreach ($ex as $g) {
                                    ?>
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="thumb">
                                            <a class="fancybox" rel="gallery1"
                                               href="assets/images/data/imagenes_thumbs/<?php echo $g['arch_img'] ?>"
                                               title="">
                                                <img class="img-responsive center-block"
                                                     src="assets/images/data/imagenes_thumbs/crop_<?php echo $g['arch_img'] ?>">
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                        }
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>

<section id="info-product">
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="row">
                <div class="tittle">
                    <h1>DESCRIPCIÓN</h1>
                    <hr>
                    <p><?php echo $tmpproduct->description_second ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="row">
                        <div class="tittle">
                            <h2>CARACTERÍSTICAS</h2>
                            <hr>
                            <?php
                                echo htmlspecialchars_decode($tmpproduct->characteristics)
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-md-offset-1">
                    <div class="row">
                        <div class="tittle">
                            <h2>FUNCIONALIDADES</h2>
                            <hr>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-sm-12">
                            <div class="tittle">
                                <div class="list-function">
                                    <?php
                                        $info = htmlspecialchars_decode($tmpproduct->functionalities);
                                        echo $info;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="gallery-prod">
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="row">
                <h1>CONOCE MÁS DE ESTE PRODUCTO</h1>
                <?php
                    foreach ($gallery as $l) {
                        $tmpimgg = new Imagen("imagenes_gallery","","",0,"","",$l['id'],0);
                        $gal = $tmpimgg->listar_x_id_c();
                        foreach ($gal as $x) {
                            ?>
                            <div class="col-xs-12 col-sm-3 col-md-3">
                                <a class="fancybox-prod" rel="gallery1" href="assets/images/data/imagenes_gallery/<?php echo $x['arch_img'] ?>" title="">
                                    <img src="assets/images/data/imagenes_gallery/crop_<?php echo $x['arch_img'] ?>" alt="" class="img-responsive">
                                </a>
                            </div>
                            <?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</section>

<section id="demo-prod">
    <div class="bg-demo-prod">
        <div class="container">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
                <a href="">Solicita tu demo gratis</a>
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

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="css/fancybox/js/jquery.fancybox.pack.js?v=2.1.7"></script>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
<script src="js/main.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect	: 'none',
            closeEffect	: 'none'
        });
        $(".fancybox-prod").fancybox({
            openEffect	: 'none',
            closeEffect	: 'none'
        });
    });
</script>

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