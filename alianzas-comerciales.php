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

    <div id="resultados">

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

    $(document).ready(function() {

        $("#resultados" ).load( "functions/loadAlianzas.php", function () {
            $(".starrr").starrr();
        }); //load initial records


        //executes code below when user click on pagination links
        $("#resultados").on( "click", ".pagination a", function (e){
            e.preventDefault();
            //$(".loading-div").show(); //show loading element
            var page = $(this).attr("data-page"); //get page number from link
            if(page != "") {
                $("#resultados").load("functions/loadAlianzas.php",{"page":page}, function(){ //get content from PHP page
                    //$(".loading-div").hide(); //once done, hide loading element
                    $(".starrr").starrr();
                });
            }
        });

    });

</script>

</body>
</html>