<?php
include_once('../../Class/Seguridad.php');
$seguridad = new Seguridad();
$seguridad->candado();

require_once ('../../Class/Descarga.php');


$tempdownload = new Descarga(0,'','');
$download = $tempdownload->listar();



// ** Tabla de imagenes **//
$tabla = include('tabla_imagenes.php');
// ** ** //

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- META SECTION -->
    <title>LOGIC SYSTEM - Listado descargas</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="../css/theme-default.css"/>
    <link rel="stylesheet" type="text/css" id="fakeLoader" href="../css/pleasewait/fakeLoader.css">
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
                <a href="../home.php">LOGIC SYSTEMS</a>
                <a href="#" class="x-navigation-control"></a>
            </li>
            <li class="xn-profile">
                <a href="#" class="profile-mini">
                    <img src="../assets/images/users/avatar-new.jpg" alt="LOGIC SYSTEMS"/>
                </a>
                <div class="profile">
                    <div class="profile-image">
                        <img src="../assets/images/users/avatar-new.jpg" alt="LOGIC SYSTEMS"/>
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
            <li>
                <a href="../home"><span class="fa fa-dashboard"></span> <span class="xn-text">Home Admin</span></a>
            </li>
            <li class="xn-title">Seccion inicio</li>
            <li class="xn-openable">
                <a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i><span class="xn-text">Banner inicio</span></a>
                <ul>
                    <li><a href="lbanner"><span class="fa fa-list"></span>Listado</a></li>
                </ul>
            </li>
            <li class="xn-title">Seccion productos</li>
            <li class="xn-openable">
                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i><span class="xn-text">Producto</span></a>
                <ul>
                    <li><a href="../product/lproduct"><span class="fa fa-list"></span>Listado</a></li>
                    <li><a href="../product/fproduct"><span class="fa fa-pencil-square-o"></span>Formulario</a></li>
                </ul>
            </li>
            <li class="xn-title">Seccion Alianzas comerciales</li>
            <li class="xn-openable">
                <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i><span class="xn-text">Alianzas Comerciales</span></a>
                <ul>
                    <li><a href="../alianzas/lalianza"><span class="fa fa-list"></span>Listado</a></li>
                    <li><a href="../alianzas/falianza"><span class="fa fa-pencil-square-o"></span>Formulario</a></li>
                </ul>
            </li>
            <li class="xn-openable">
                <a href="#"><i class="fa fa-users" aria-hidden="true"></i><span class="xn-text">Clientes</span></a>
                <ul>
                    <li><a href="../client/lclient"><span class="fa fa-list"></span>Listado</a></li>
                    <li><a href="../client/fclient"><span class="fa fa-pencil-square-o"></span>Formulario</a></li>
                </ul>
            </li>
            <li class="xn-title">Seccion Eventos</li>
            <li class="xn-openable">
                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><span class="xn-text">Eventos</span></a>
                <ul>
                    <li><a href="levent"><span class="fa fa-list"></span>Listado</a></li>
                    <li><a href="fevent"><span class="fa fa-pencil-square-o"></span>Formulario</a></li>
                </ul>
            </li>
            <li class="xn-title">Seccion Descargas</li>
            <li class="xn-openable active">
                <a href="#"><i class="fa fa-download" aria-hidden="true"></i><span class="xn-text">Descargas</span></a>
                <ul>
                    <li class="active"><a href="ldownload"><span class="fa fa-list"></span>Listado</a></li>
                    <li><a href="fdownload"><span class="fa fa-pencil-square-o"></span>Formulario</a></li>
                </ul>
            </li>
            <!--<li class="xn-title">Seccion Registros</li>
            <li class="xn-openable">
                <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i><span class="xn-text">Registros</span></a>
                <ul>
                    <li><a href="../registros/lusuariocontacto"><span class="fa fa-list"></span>Listado</a></li>
                </ul>
            </li>-->
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
            <li><a href="#">Secciones administrables</a></li>
            <li><a href="#">Descargas</a></li>
            <li class="active">Listado</li>
        </ul>
        <!-- END BREADCRUMB -->

        <!-- PAGE TITLE -->
        <div class="page-title">
            <h2><span class="fa fa-arrow-circle-o-left"></span> Descargas</h2>
        </div>
        <!-- END PAGE TITLE -->

        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">



            <div class="row">
                <div class="col-md-12">

                    <!-- START DATATABLE EXPORT -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Agrega una nueva descargas</h3>
                            <div class="btn-group pull-right">
                                <a href="fdownload" class="btn btn-danger"><i class="fa fa-bars"></i> Agregar Descarga</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="customers2" class="table datatable table-actions table-striped">
                                    <thead>
                                    <tr>
                                        <th width="50">#</th>
                                        <th width="100">Titulo</th>
                                        <th width="100">Archivo</th>
                                        <th width="150">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $cont=0;
                                    foreach ($download as $e){
                                        $cont++;
                                        ?>

                                        <tr id="trow_<?php echo $e['id']; ?>">
                                            <td><?php echo $cont; ?></td>
                                            <td><?php echo $e['title'] ?></td>
                                            <td>link</td>
                                            <td>
                                                <a href="fevent?id=<?php echo $e['id']; ?>" class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-pencil"></span></a>
                                                <button class="btn btn-danger btn-rounded btn-condensed btn-sm delte_row_data" onClick="delete_row('trow_<?php echo $e['id']; ?>',this);" data-idb="<?php echo $e['id']; ?>" data-tbl="<?php echo $tabla; ?>"><span class="fa fa-times"></span></button>
                                            </td>
                                        </tr>
                                    <?php }?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END DATATABLE EXPORT -->

                </div>
            </div>

        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->

<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="alert" id="mb-remove-row">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-times"></span> Eliminar <strong>Datos</strong> ?</div>
            <div class="mb-content">
                <p>¿Seguro que quieres eliminar esta fila?</p>
                <p>Presione Sí, si Seguro.</p>
            </div>
            <div class="mb-footer">
                <div class="pull-right">
                    <button class="btn btn-success btn-lg mb-control-yes">Si</button>
                    <button class="btn btn-default btn-lg mb-control-close">No</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MESSAGE BOX-->


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
                    <a href="../login/logout.php" class="btn btn-success btn-lg">Si</a>
                    <button class="btn btn-default btn-lg mb-control-close">No</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MESSAGE BOX-->

<!-- START PRELOADS -->
<audio id="audio-alert" src="../audio/alert.mp3" preload="auto"></audio>
<audio id="audio-fail" src="../audio/fail.mp3" preload="auto"></audio>
<!-- END PRELOADS -->

<!-- START SCRIPTS -->
<!-- START PLUGINS -->
<script type="text/javascript" src="../js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="../js/plugins/bootstrap/bootstrap.min.js"></script>
<!-- END PLUGINS -->

<!-- START THIS PAGE PLUGINS-->
<script type='text/javascript' src='../js/plugins/icheck/icheck.min.js'></script>
<script type="text/javascript" src="../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="../js/plugins/bootstrap/bootstrap-file-input.js"></script>
<script type="text/javascript" src="../js/plugins/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../js/plugins/tableexport/tableExport.js"></script>
<script type="text/javascript" src="../js/plugins/tableexport/jquery.base64.js"></script>
<script type="text/javascript" src="../js/plugins/tableexport/html2canvas.js"></script>
<script type="text/javascript" src="../js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
<script type="text/javascript" src="../js/plugins/tableexport/jspdf/jspdf.js"></script>
<script type="text/javascript" src="../js/plugins/tableexport/jspdf/libs/base64.js"></script>
<script type="text/javascript" src="../js/plugins/form/jquery.form.js"></script>
<!-- END THIS PAGE PLUGINS-->

<!-- START TEMPLATE -->

<script type="text/javascript" src="../js/plugins.js"></script>
<script type="text/javascript" src="../js/actions.js"></script>
<!-- END TEMPLATE -->

<script src="../js/plugins/pleasewait/fakeLoader.min.js"></script>

<script type="application/x-javascript">
    $(document).ready(function(){

        $(".fakeloader").fakeLoader({
            timeToHide:1200,
            bgColor:"#e5e5e5",
            spinner:"spinner1"
        });



    });


    /*DELETE ROW DATABASE*/

    function delete_row(row,obj){

        var box = $("#mb-remove-row");
        box.addClass("open");

        var $_this = $(obj);

        box.find(".mb-control-yes").on("click",function(){
            box.removeClass("open");
            $("#"+row).hide("slow",function(){
                //alert($_this);
                //console.log($_this);
                $.ajax({
                    data:  {'op':'Eliminar', 'id':$_this.data('idb'), 'tbl':$_this.data('tbl') },
                    url:   'opdownload.php',
                    type:  'post',
                    success:  function (response) {
                        //alert(response);
                    }
                });

                $(this).remove();
            });
        });

    }



</script>

<!-- END SCRIPTS -->
</body>
</html>