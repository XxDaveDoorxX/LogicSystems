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

    <!--slider-->
    <link rel="stylesheet" href="css/slider/css/fexslider.css" type="text/css" media="all"/>

    <!-- OWL -->
   <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css">


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
include_once('layouts/partial/header.php');
?>

<!--======= SLIDER =========-->
<section id="slider-home">
    <div class="flex-container-home">
        <div class="flexslider flexslider-home">
            <ul class="slides">
                <li>
                    <a href="#"><img src="images/slider.jpg"></a>
                </li>
            </ul>
        </div>
    </div>
</section>


<!--======= PRODUCTS =========-->
<section id="products">
    <div class="container">

        <!--======= TITTLE =========-->
        <div class="tittle">
            <h1 class="">PRODUCTOS</h1>
        </div>
        <div id="owl-products">

            <!--======= TEAM MEMBER 1 =========-->
            <div class="product">

                <!--======= HOVER DETAIL =========-->
                <div class="img"> <img src="images/team-1.jpg" alt="" >
                    <h5>CIB FINANCIERA</h5>
                    <p><span>Operación de financieras</span></p>
                    <p>In quam vitae turpis convallis viverra.
                        Phasellus sed in magna.</p>
                </div>
            </div>

            <!--======= TEAM MEMBER 2 =========-->
            <div class="product">

                <!--======= HOVER DETAIL =========-->
                <div class="img"> <img src="images/team-2.jpg" alt="" >
                    <h5>CIB CASA DE EMPEÑO</h5>
                    <p><span>Control y operación de casas de empeño</span></p>
                    <p>In quam vitae turpis convallis viverra.
                        Phasellus sed in magna.</p>
                </div>
            </div>

            <!--======= TEAM MEMBER 3 =========-->
            <div class="product">

                <!--======= HOVER DETAIL =========-->
                <div class="img"> <img src="images/team-3.jpg" alt="" >
                    <h5>E-SIGeN NOTARIAL</h5>
                    <p><span>Sistema integral de gestión notarial en la nube</span></p>
                    <p>In quam vitae turpis convallis viverra.
                        Phasellus sed in magna.</p>
                </div>
            </div>

            <!--======= TEAM MEMBER 4 =========-->
            <div class="product">

                <!--======= HOVER DETAIL =========-->
                <div class="img"> <img src="images/team-4.jpg" alt="" >
                    <h5>E-SIGeN CONTRATOS</h5>
                    <p><span>Generación y firma electrónica de documentos</span></p>
                    <p>In quam vitae turpis convallis viverra.
                        Phasellus sed in magna.</p>
                </div>
            </div>


        </div>
    </div>
</section>


<section id="alianzas-comerciales">
    <div class="container">
        <!--======= TITTLE =========-->
        <div class="tittle">
            <h1 class="t-mod">ALIANZAS COMERCIALES</h1>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="img-alianza">
                    <img class="img-responsive center-block" src="images/alianza-comercial.jpg">
                </div>
            </div>
            <div class="col-md-8">
                <div class="item-alianza-text">
                    <span>SUSTAINABLE CONSTRUCTION</span>
                    <div class="stars starrr" data-rating="1"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed iaculis pellentesque commodo. Nullam sed diam sit amet quam vestibulum tincidunt. Curabitur posuere lectus nisl, quis congue nunc mattis eu. Proin id vulputate eros. Ut nulla lacus, dapibus a facilisis vulputate, sollicitudin eget dui. Nullam rhoncus lacus tortor, nec semper ipsum suscipit at. Curabitur purus turpis, auctor eget tristique vitae, euismod vel elit. Quisque tempor elementum augue, eu vestibulum lacus pellentesque in. Nulla quis nulla vitae dolor ornare mollis. Mauris faucibus nisi metus, eget aliquam tellus bibendum nec.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="btn-row-alianza">
                <a class="btn_view_all" href="">Ver todas</a>
            </div>
        </div>
    </div>
</section>

<!--======= PROXIMOS EVENTOS =========-->
<section id="eventos">
    <div class="container">

        <!--======= TITTLE =========-->
        <div class="tittle">
            <h1 class="">PRÓXIMOS EVENTOS</h1>
        </div>
        <div id="owl-events">

            <!--======= TEAM MEMBER 1 =========-->
            <div class="event">

                <!--======= HOVER DETAIL =========-->
                <div class="img"> <img src="images/event-1.jpg" alt="" >
                    <h5>NOMBRE DE EVENTO</h5>
                    <p><span>21 DE MAYO DE 2017</span></p>
                    <p>In quam vitae turpis convallis viverra.
                        Phasellus sed in magna.</p>
                </div>
            </div>

            <!--======= TEAM MEMBER 2 =========-->
            <div class="event">

                <!--======= HOVER DETAIL =========-->
                <div class="img"> <img src="images/event-1.jpg" alt="" >
                    <h5>NOMBRE DE EVENTO</h5>
                    <p><span>21 DE MAYO DE 2017</span></p>
                    <p>In quam vitae turpis convallis viverra.
                        Phasellus sed in magna.</p>
                </div>
            </div>

            <!--======= TEAM MEMBER 3 =========-->
            <div class="event">

                <!--======= HOVER DETAIL =========-->
                <div class="img"> <img src="images/event-1.jpg" alt="" >
                    <h5>NOMBRE DE EVENTO</h5>
                    <p><span>21 DE MAYO DE 2017</span></p>
                    <p>In quam vitae turpis convallis viverra.
                        Phasellus sed in magna.</p>
                </div>
            </div>

            <!--======= TEAM MEMBER 4 =========-->
            <div class="event">

                <!--======= HOVER DETAIL =========-->
                <div class="img"> <img src="images/event-1.jpg" alt="" >
                    <h5>NOMBRE DE EVENTO</h5>
                    <p><span>21 DE MAYO DE 2017</span></p>
                    <p>In quam vitae turpis convallis viverra.
                        Phasellus sed in magna.</p>
                </div>
            </div>


        </div>
    </div>
</section>

<section id="contact-number">
    <div class="container">
        <div class="row">
            <div class="text-call-ac">
                <span>toma el control de tu negocio</span>
            </div>
            <div class="call-number">
                <span><a href="">llámanos (999) 130-2085</a></span>
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

<!--OWL -->
<script src="js/owl.carousel.min.js"></script>

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