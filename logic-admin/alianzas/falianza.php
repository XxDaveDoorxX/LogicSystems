<?php
include_once('../../Class/Seguridad.php');
$seguridad = new Seguridad();
$seguridad->candado();

require_once ('../../Class/Alianza.php');

$id = 0;
$op = 'Agregar';
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $op = 'Modificar';
}


$tmpalianza = new Alianza($id,'','','','');
$tmpalianza->obtener();


// ** Tabla de imagenes **//
$tabla = include('tabla_imagenes.php');
// ** ** //

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- META SECTION -->
    <title>LOGIC SYSTEM - Formulario alianzas comerciales</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="../css/theme-default.css"/>
    <link rel="stylesheet" type="text/css" id="fakeLoader" href="../css/parsley/parsley.css">
    <link rel="stylesheet" type="text/css" id="fakeLoader" href="../css/bwizard/bwizard.min.css">
    <link rel="stylesheet" type="text/css" id="fakeLoader" href="../css/pleasewait/fakeLoader.css">
    <!-- EOF CSS INCLUDE -->
    <!-- START STYLE -->
    <link rel="stylesheet" type="text/css" id="form-none-panel" href="../css/form-none-panel.css">
    <link rel="stylesheet" type="text/css" href="../css/summernote/summernote.css">
    <!-- END STYLE -->
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
                    <li><a href="../banner/lbanner"><span class="fa fa-list"></span>Listado</a></li>
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
            <li class="xn-openable active">
                <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i><span class="xn-text">Alianzas Comerciales</span></a>
                <ul>
                    <li><a href="lalianza"><span class="fa fa-list"></span>Listado</a></li>
                    <li class="active"><a href="falianza"><span class="fa fa-pencil-square-o"></span>Formulario</a></li>
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
                    <li><a href="../event/levent"><span class="fa fa-list"></span>Listado</a></li>
                    <li><a href="../event/fevent"><span class="fa fa-pencil-square-o"></span>Formulario</a></li>
                </ul>
            </li>
            <li class="xn-title">Seccion Descargas</li>
            <li class="xn-openable">
                <a href="#"><i class="fa fa-download" aria-hidden="true"></i><span class="xn-text">Descargas</span></a>
                <ul>
                    <li><a href="../download/ldownload"><span class="fa fa-list"></span>Listado</a></li>
                    <li><a href="../download/fdownload"><span class="fa fa-pencil-square-o"></span>Formulario</a></li>
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
            <!-- END TOGGLE NAVIGATION -->
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
            <li><a href="#">Alianzas comerciales</a></li>
            <li class="active">Formulario</li>
        </ul>
        <!-- END BREADCRUMB -->

        <!-- PAGE TITLE -->
        <div class="page-title">
            <h2><span class="fa fa-arrow-circle-o-left"></span> Formulario alianzas comerciales</h2>
        </div>
        <!-- END PAGE TITLE -->

        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <div class="row">
                <div class="col-md-12">

                    <!-- START WIZARD WITH VALIDATION -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>Formulario alianzas comerciales</h3>
                            <!-- begin form-wizard -->
                            <form action="javascript:;" method="POST" data-parsley-validate="true" name="form-wizard" class="form-input-flat">
                                <input type="hidden" id="hdntblf1" name="tbl" value="<?php echo $tabla; ?>" />
                                <input type="hidden" id="id_propied" name="id_propied" value="<?php echo $tmppropied->id ?>">
                                <!-- begin #wizard -->
                                <div id="wizard">
                                    <ol>
                                        <li>
                                            Información del registro
                                            <small>Escriba la información</small>
                                        </li>
                                        <li>
                                            Imagen
                                            <small>Arrastre o eliga la imagen</small>
                                        </li>
                                        <li>
                                            Completo
                                            <small>Confirmar </small>
                                        </li>
                                    </ol>
                                    <!-- begin wizard step-1 -->
                                    <div class="wizard-step-1">
                                        <fieldset>
                                            <!-- begin row -->
                                            <div class="row">
                                                <!-- begin col-6 -->
                                                <div class="col-md-12">
                                                    <h3 class="form-header form-header-lg m-b-10">Escriba la información del registro</h3>
                                                    <div class="height-xs">
                                                        <div class="form-group">
                                                            <label>Titulo</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                                <input data-parsley-id="2967" name="titulo" id="titulo" class="form-control input-lg" data-parsley-group="wizard-step-1" value="<?php echo $tmpalianza->title  ?>" required type="text"><ul id="parsley-id-2967" class="parsley-errors-list"></ul>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Descripción</label>
                                                            <textarea  name="comment" id="comment" class="form-control"><?php echo $tmpalianza->comment;  ?></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Rating</label>
                                                                <select class="form-control select" name="rating" id="rating">
                                                                    <option value="1" <?php if($tmpalianza->rating == '1') echo 'selected' ?>>1</option>
                                                                    <option value="2" <?php if($tmpalianza->rating == '2') echo 'selected' ?>>2</option>
                                                                    <option value="3" <?php if($tmpalianza->rating == '3') echo 'selected' ?>>3</option>
                                                                    <option value="4" <?php if($tmpalianza->rating == '4') echo 'selected' ?>>4</option>
                                                                    <option value="5" <?php if($tmpalianza->rating == '5') echo 'selected' ?>>5</option>
                                                                </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class=" control-label">Fecha</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                    <input type="text" class="form-control dpicker" name="fecha" id="fecha" value="">
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col-6 -->
                                            </div>
                                            <!-- end row -->
                                        </fieldset>
                            </form>
                        </div>
                        <!-- end wizard step-1 -->
                        <!-- begin wizard step-2 -->
                        <div class="wizard-step-2">
                            <fieldset>
                                <!-- begin row -->
                                <div class="row">
                                    <!-- begin col-6 -->
                                    <div class="col-md-12">
                                        <h3 class="form-header form-header-lg m-b-10">Suba su Imagen</h3>
                                        <br/>
                                        <span>El tamaño de las imagenes debe ser de 360px de ancho por 225px de alto.</span><br/>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div><button class="btn btn-info" id="btnaddimg" >Agregar im&aacute;genes</button></div>
                                                <form action="../opimagenes/upload.php" id="frmdzone" class="dropzone">
                                                    <input type="hidden" id="hdntbl" name="tbl" value="<?php echo $tabla; ?>" />
                                                    <input type="hidden" id="hdnid_c" name="id_c" value="0" />
                                                    <input type="hidden" id="hdniw" name="iw[]" value="360" />
                                                    <input type="hidden" id="hdnih" name="ih[]" value="225" />
                                                    <div class="dz-message"></div>
                                                    <div class="dropzone-previews" id="divdzone"> </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- end row -->
                            </fieldset>
                        </div>
                        <!-- end wizard step-2 -->

                        <!-- begin wizard step-5 -->
                        <div class="wizard-step-5 text-center">
                            <h2>
                                <?php
                                $st="Agregado";
                                if (isset($_REQUEST['id'])) {
                                    $id = $_REQUEST['id'];
                                    $st = 'Modificado';
                                }


                                echo 'Registro '.$st;

                                ?>
                            </h2>
                            <!--<p class="m-b-20">Completo</p>-->
                            <p><a href="lalianza" class="btn btn-success btn-lg">Finalizar</a></p>
                        </div>
                        <!-- end wizard step-5 -->
                    </div>
                    <!-- end #wizard -->

                </div>
            </div>
            <!-- END WIZARD WITH VALIDATION -->

        </div>

    </div>

</div>
<!-- PAGE CONTENT WRAPPER -->
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

<!-- THIS PAGE PLUGINS -->
<script type='text/javascript' src="../js/plugins/bwizard/parsley.js"></script>
<script type="text/javascript" src="../js/plugins/bootstrap/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="../js/plugins/bootstrap/bootstrap-select.js"></script>
<script type='text/javascript' src="../js/plugins/bwizard/bwizard.js"></script>
<script type='text/javascript' src="../js/plugins/icheck/icheck.min.js"></script>
<script type="text/javascript" src="../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="../js/plugins/dropzone/dropzone.min.js"></script>
<script type="text/javascript" src="../js/plugins/jquery-validation/jquery.validate.js"></script>

<!-- END PAGE PLUGINS -->

<!-- START TEMPLATE -->

<script type="text/javascript" src="../js/plugins.js"></script>
<script type="text/javascript" src="../js/actions.js"></script>
<!-- END TEMPLATE -->


<script src="../js/plugins/pleasewait/fakeLoader.min.js"></script>


<script>
    $(document).ready(function(){


        $(".fakeloader").fakeLoader({
            timeToHide:1200,
            bgColor:"#e5e5e5",
            spinner:"spinner1"
        });

        $(".dpicker").datepicker({
            format: 'yyyy-mm-dd',
            todayHighlight: true
        });

        $( ".dpicker" ).datepicker( "setDate", <?php echo "\"".$tmpalianza->create_at."\""; ?> );

    });


</script>



<script type="application/x-javascript">

    /****/
    /*
     /* DROPZONE
     /*
     /****/

    var $contd;
    var $id_alianza = <?php echo $id; ?>;
    jQuery(document).ready(function(){

        $('#hdnid_c').val($id_alianza);
        // ** Dopzone  sortable **
        $contd = $("#divdzone");
        $contd.sortable({
            revert: 300,
            tolerance: "pointer",
            start: function (event, ui) {
                $(ui.item).data("startindex", ui.item.index());
            },
            update: function (event, ui) {
                var itm = $(ui.item);
                //console.log(itm);
                var ord = $(this).sortable("toArray");
                //alert(ord);
                $(ord).each(function(index, element) {
                    $.ajax({
                        data:  {'tbl':$('#hdntbl').val(), 'id_c':$('#hdnid_c').val(), 'id_img':element, 'chg_ord':index+1 },
                        url:   '../opimagenes/change.php',
                        type:  'post',
                    });
                });
            }
        });

        Dropzone.options.frmdzone = {
            maxFilesize: 8,
            thumbnailWidth: 200,
            thumbnailHeight: 200,
            clickable: "#btnaddimg",
            previewsContainer: "#divdzone",

            init: function() {

                var tthis = this;
                $.ajax({
                    data:  {'tbl':$('#hdntbl').val(), 'id_c':$('#hdnid_c').val() },
                    url:   '../opimagenes/get.php',
                    type:  'post',
                    success:  function (response) {
                        //alert("obtener: "+response);

                        var images = JSON.parse(response);
                        $(images).each(function(index, element) {
                            //console.log(element);
                            $.each(element,function (i,v) {
                                //alert("leyenda: "+v.lynd_img);
                                //alert("índices imagen: "+i + " " + v);
                                //alert("valores imagen: "+i+" ->>  ../../assets/image/data/"+$('#hdntbl').val()+"/"+v.arch_img);
                                var mockFile = { serverId: v.id_img, name: v.arch_img, size: v.sz, lynd: v.lynd_img };
                                tthis.emit("addedfile", mockFile);
                                tthis.emit("thumbnail", mockFile, "../../assets/images/data/"+$('#hdntbl').val()+"/"+v.arch_img);
                            });
                        });
                    }
                });

                this.on("addedfile", function(file) {
                    var btnelim = $("<a class='dz-remove' id='btneliminar' mane='elimi' data-dz-remove>Eliminar</a>");
                    var txtnomb = $("<input type='text' id='txtnombre' name='nomi' placeholder='Nombre de imagen' style='width:125px;' />");


                    var _this = this;
                    var $prv = $(file.previewElement);
                    //console.log(file);

                    if(file.serverId) {
                        $prv.attr("id",file.serverId);
                        //alert("Archivo: "+file.name + " - "+file.serverId);
                    }
                    if(file.lynd) {
                        txtnomb.val(file.lynd);
                    }
                    $prv.append($("<div/>").append(btnelim)).append($("<div/>").append(txtnomb));

                    btnelim.on("click", function (e) {
                        e.preventDefault();
                        e.stopPropagation();

                        _this.removeFile(file);
                        //$(this).parent("div").remove();
                        $contd.sortable('refresh');
                        //$contd.trigger('update');
                        var ord = $contd.sortable("toArray");
                        $(ord).each(function(index, element) {
                            $.ajax({
                                data:  {'tbl':$('#hdntbl').val(), 'id_c':$('#hdnid_c').val(), 'id_img':element, 'chg_ord':index+1 },
                                url:   '../opimagenes/change.php',
                                type:  'post',
                            });
                        });
                        //alert("orden: "+ord);
                        //alert("id elemento: "+$prv.attr('id'));

                        // If you want to the delete the file on the server as well,
                        // you can do the AJAX request here.
                        borrar_i($prv.attr('id'));
                    });

                    $(txtnomb).on("keypress", function(e) {
                        var charCode = e.charCode || e.keyCode || e.which;
                        if (charCode  == 13) {
                            e.preventDefault();
                            $(this).blur();
                            return false;
                        }
                    });
                    txtnomb.on("change", function (e) {
                        //alert("Modificando!!!");
                        $.ajax({
                            data:  {'tbl':$('#hdntbl').val(), 'id_c':$('#hdnid_c').val(), 'id_img':$prv.attr('id'), 'chg_ly':$(this).val() },
                            url:   '../opimagenes/change.php',
                            type:  'post',
                            success:  function (response) {
                                //alert("Modificado con éxito... "+response);
                            }
                        });
                    });
                });

                this.on("success", function(file, response) {
                    //console.log(response);
                    //console.log(file);
                    file.serverId = response;
                    var $prv = $(file.previewElement);
                    $prv.attr("id",response);
                    $.ajax({
                        data:  {'tbl':$('#hdntbl').val(), 'id_c':$('#hdnid_c').val(), 'id_img':file.serverId, 'chg_ord':$prv.index()+1 },
                        url:   '../opimagenes/change.php',
                        type:  'post'
                    });
                    //alert("Actualización del orden  con éxito... "+response);
                });
            }
        }

        function borrar_i(idx) {
            $.ajax({
                data:  {'tbl':$('#hdntbl').val(), 'id_c':$('#hdnid_c').val(), 'id_img':idx},
                url:   '../opimagenes/delete.php',
                type:  'post',
                success:  function (response) {
                    //alert("Borrar... "+response);
                }
            });
        }

        /****/
        /*
         /* STEPS
         /*
         /****/

        $("#wizard").bwizard({
            validating: function(e, a) {
                //console.log(a);
                //console.log(e);
                //console.log($('form[name="form-wizard"]').parsley().validate("wizard-step-1"));
                if ($('form[name="form-wizard"]').parsley().validate("wizard-step-1")) {

                    clasif = $('.slcclsf').filter(function(i, e) {
                        //console.log(i);
                        //console.log(e);
                        return $(e).val() !== "";
                    });


                    //alert("id banner: "+$id_alianza);
                    if ($id_alianza != 0) {
                        $.ajax({
                            data:  {'op':'Modificar', 'id':$id_alianza, 'titulo':$('#titulo').val(), 'comment':$('#comment').val(), 'rating':$('#rating').val(), 'create_at':$('#fecha').val()},
                            url:   'opalianza.php',
                            type:  'post',
                            success:  function (response) {
                                //alert("Modif:\n\n"+response);
                                //$id_alianza = response;
                            }
                        });
                    } else {
                        $.ajax({
                            data:  {'op':'Agregar', 'titulo':$('#titulo').val(), 'comment':$('#comment').val(), 'rating':$('#rating').val(), 'create_at':$('#fecha').val()},
                            url:   'opalianza.php',
                            type:  'post',
                            success:  function (response) {
                                //alert("Insert:\n\n"+response);
                                $id_alianza = response;
                                $('#hdnid_c').val($id_alianza);
                            }
                        });
                    }
                }

                return (0 == a.index && a.nextIndex >= 0 || a.nextIndex > 0)
                && !1 === $('form[name="form-wizard"]').parsley().validate("wizard-step-1") ? !1 : void 0;
            }

        });

    });


</script>

<!-- END SCRIPTS -->

</body>
</html>