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
$statnav = array("","","","","","active","");
include_once('layouts/partial/header.php');
?>

<section id="nosotros">
    <div class="bg-nosotros">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h1>NOSOTROS <img src="images/icono-nosotros.png" alt=""></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="contenido-nosotros">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h2>QUIÉNES SOMOS</h2>
                    <hr>
                    <p>
                        Somos una empresa comprometida con la calidad total, especializada en el desarrollo de soluciones y servicios de tecnologías de la información para la empresa Mexicana.<br>
                        Diseñamos soluciones tecnológicas integrales e innovadoras, fáciles de utilizar y administrar, que proporcionan información adecuada y oportuna para la toma de decisiones, además de poner a su disposición una plataforma de soporte y servicios que le permitirá operar de manera ininterrumpida.<br>
                        En LogicSystems, contamos con un equipo de trabajo experimentado que le ayudará a alcanzar sus objetivos a través del uso y máximo aprovechamiento de la tecnología, herramienta indispensable hoy en día para tener una empresa exitosa.
                    </p>
                    <h2>HISTORIA</h2>
                    <hr>
                    <p>
                        Creación integral de tecnología es una empresa de reciente creación (2013), sin embargo, nuestro equipo de trabajo tiene mas de 20 años de experiencia en el ramo de desarrollo de soluciones informáticas. Estamos comprometidos con la alta calidad e innovación de nuestras soluciones.<br>
                        LogicSystems nace como respuesta estratégica al crecimiento del Corporativo al que pertenece. Crecimiento que en los últimos 3 años se ha dado a nivel de cobertura geográfica, de personal y dependencia hacia las TICs.<br>
                        En 2011 el Corporativo decide centralizar todas las operaciones y personal de TICs que se encontraban distribuidas en las diferentes unidades de negocio. Y en junio de 2013 iniciamos a brindar servicios a terceros.<br>
                        En LogicSystems, contamos con un equipo de trabajo experimentado que le ayudará a alcanzar sus objetivos a través del uso y máximo aprovechamiento de la tecnología, herramienta indispensable hoy en día para tener una empresa exitosa.
                    </p>
                </div>
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
                    <img src="images/edificio.jpg" class="img-responsive img-nosotros">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="caja-mision">
                        <h2>NUESTRA MISIÓN</h2>
                        <p>
                            Proporcionar servicios tecnológicos innovadores y desarrollar soluciones confiables y de fácil uso, que permitan a nuestros clientes potencializar sus negocios a través de eficientar sus procesos operativos
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h2>NUESTRA IDENTIDAD</h2>
                    <hr>
                    <h3>INNOVACIÓN</h3>
                    <p>
                        Estamos siempre trabajando en el desarrollo de las herramientas tecnologicas que el actual y cambiante entorno empresarial demanda.
                    </p>
                    <h3>FLEXIBILIDAD</h3>
                    <p>
                        Nos adaptamos a las necesidades de cada empresa, ofrecemos softwares especializados que se adaptan a los requerimientos de cada uno de nuestros clientes.
                    </p>
                    <h3>CONFIANZA</h3>
                    <p>
                        Contamos con especialistas experimentados en el desarrollo de tecnologías y con la infraestructura más segura para el procesamiento y almacenamiento de la información.
                    </p>
                    <h3>COMPROMISO</h3>
                    <p>
                        Nuestro personal está comprometido, dispuesto a ayudarte y orientarte en cada proceso de la utilización de nuestros servicios.
                    </p>
                    <h3>CALIDAD TOTAL</h3>
                    <p>
                        Nuestros procesos están diseñados bajo un esquema de calidad buscando la mejora continua en nuestro servicio
                    </p>
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