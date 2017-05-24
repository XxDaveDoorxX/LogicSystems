<?php
include_once('../Class/Seguridad.php');
$seguridad = new Seguridad();
$seguridad->candado();
?>
<!DOCTYPE html>
<html lang="es">
    <head>        
        <!-- META SECTION -->
        <title>LOGIC SYSTEM - Home Admin Panel</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
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
       
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="home">LOGIC SYSTEMS</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="assets/images/users/avatar-new.jpg" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="assets/images/users/avatar-new.jpg" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">
									<?php 
										if(isset($_SESSION['id'])){
											$nombre_user = $_SESSION['username'];
											echo $nombre_user;
										}else{
											$nombre_user = "";
											echo $nombre_user;
										}
									 ?>
                                </div>
                                <div class="profile-data-title">Administrador</div>
                            </div>
                        </div>                                                                        
                    </li>
                    <li class="active">
                        <a href="home.php"><span class="fa fa-dashboard"></span> <span class="xn-text">Home Admin</span></a>
                    </li>
                    <li class="xn-title">Seccion inicio</li>
                    <li class="xn-openable">
                        <a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i><span class="xn-text">Banner inicio</span></a>
                        <ul>
                            <li><a href="banner/lbanner"><span class="fa fa-list"></span>Listado</a></li>
                        </ul>
                    </li>
                    <li class="xn-title">Seccion Productos</li>
                    <li class="xn-openable">
                        <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i><span class="xn-text">Producto</span></a>
                        <ul>
                            <li><a href="product/lproduct"><span class="fa fa-list"></span>Listado</a></li>
                            <li><a href="product/fproduct"><span class="fa fa-pencil-square-o"></span>Formulario</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i><span class="xn-text">Características plantas</span></a>
                        <ul>
                            <li><a href="descripcion/ldescripcion.php"><span class="fa fa-list"></span>Listado</a></li>
                            <li><a href="descripcion/fdescripcion.php"><span class="fa fa-pencil-square-o"></span>Formulario</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="xn-text">Propiedades</span></a>
                        <ul>
                            <li><a href="propiedad/lpropiedad.php"><span class="fa fa-list"></span>Listado</a></li>
                            <li><a href="propiedad/fpropiedad.php"><span class="fa fa-pencil-square-o"></span>Formulario</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="xn-text">Financiamiento</span></a>
                        <ul>
                            <li><a href="financiamiento/lbancos.php"><span class="fa fa-list"></span>Listado</a></li>
                            <!--<li><a href="financiamiento/fbancos.php"><span class="fa fa-pencil-square-o"></span>Formulario</a></li>-->
                        </ul>
                    </li>
                    <li class="xn-title">Seccion Contacto</li>
                    <li class="xn-openable">
                        <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i><span class="xn-text">informacion de contacto</span></a>
                        <ul>
                            <li><a href="contacto/lcontact"><span class="fa fa-list"></span>Listado</a></li>
                        </ul>
                    </li>
					<li class="xn-title">Seccion Registros</li>
					<li class="xn-openable">
                        <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i><span class="xn-text">Registros</span></a>
                        <ul>
                            <li><a href="registros/lusuariocontacto"><span class="fa fa-list"></span>Listado</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- POWER OFF -->
                    <li class="xn-icon-button pull-right last">
                        <a href="#"><span class="fa fa-power-off"></span></a>
                        <ul class="xn-drop-left animated zoomIn">
                            <li><a href="javascript:;" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span> Cerrar Sesión</a></li>
                        </ul>                        
                    </li> 
                    <!-- END POWER OFF -->                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li class="active">Dashboard</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <!-- START WIDGETS -->                    
                    <div class="row">
                        <div class="col-md-3">
                            
                            <!-- START WIDGET CLOCK -->
                            <div class="widget widget-danger widget-padding-sm">
                                <div class="widget-big-int plugin-clock">00:00</div>                            
                                <div class="widget-subtitle plugin-date">Loading...</div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                                <div class="widget-buttons widget-c3">
                                    <div class="col">
                                        <a href="#"><span class="fa fa-clock-o"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-bell"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-calendar"></span></a>
                                    </div>
                                </div>                            
                            </div>                        
                            <!-- END WIDGET CLOCK -->
                            
                        </div>
                    </div>
                    <!-- END WIDGETS -->                    

                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Cerrar <strong>Sesión</strong> ?</div>
                    <div class="mb-content">
                        <p>¿ Seguro que quieres cerrar sesión ?</p>                    
                        <p>Pulse No si desea continuar con el trabajo . Pulse Sí para cerrar la sesión de usuario actual.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="login/logout.php" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        
        <script type="text/javascript" src="js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>                 
        
        <script type="text/javascript" src="js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="js/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
        
        <script type="text/javascript" src="js/demo_dashboard.js"></script>
        <!-- END TEMPLATE -->
        
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
        
    <!-- END SCRIPTS -->         
    </body>
</html>
