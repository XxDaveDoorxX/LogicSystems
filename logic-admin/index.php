<?php
session_name("sadmin");
session_start();

if(isset($_SESSION['id'])){
    $nombre_user = $_SESSION['username'];
    header('Location: home.php');
}else{
    $nombre_user = "";
}

?>
<!DOCTYPE html>
<html lang="es" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>LOGIC SYSTEM | ADMINISTRADOR</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="login/favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <link rel="stylesheet" type="text/css" id="fakeLoader" href="css/pleasewait/fakeLoader.css">
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
       <!-- preloader -->
        <div class="fakeloader"></div>
       <!-- preloader-->
       
          
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Bienvenido</strong>, Por favor Inicia sesión</div>
                    <form action="login/ingresar" class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="usuario" placeholder="Usuario"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" name="password" placeholder="Contraseña"/>
                        </div>
                    </div>
                    <div class="form-group">
                    	<div class="col-md-12">
                        	<p style="color:#af690e; text-align:center;">
                            	<?php
									
									if(isset($_REQUEST['id'])){
										
										echo'El usuario y/o contrase&ntilde;a son incorrectos';
									}
									
								?>
                            </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <button class="btn btn-info btn-block">Iniciar Sesión</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2017 logicsystems.com.mx
                    </div>
                    <div class="pull-right">
                        <a href="#">About</a> |
                        <a href="#">Privacy</a>
                    </div>
                </div>
            </div>
            
        </div>
        
        
        

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/plugins/pleasewait/fakeLoader.min.js"></script>
			<script>
                $(document).ready(function(){
                    $(".fakeloader").fakeLoader({
                        timeToHide:1200,
                        bgColor:"#efefef",
                        spinner:"spinner1"
                    });
                });
            </script>

        
    </body>
</html>