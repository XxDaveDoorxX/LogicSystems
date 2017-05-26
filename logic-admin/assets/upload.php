<?php
include_once ('../../Class/uarchivo.php');
require_once ('../../Class/inc/existTable.php');

if (isset($_REQUEST['tbla'])) {
    $tbla = htmlentities($_REQUEST['tbla'], ENT_QUOTES);
    if (existTable($tbla)) {

        $id_c = 0;
        if (isset($_REQUEST['id_c'])) {
            if (is_numeric($_REQUEST['id_c']))
                $id_c = $_REQUEST['id_c'];
        }

        if (!empty($id_c)) {

            if (!empty($_FILES) && $_FILES['file']['tmp_name']) {

                // check image type
                $allowedTypes = array('pdf' => 'application/pdf');

                $finfo = finfo_open(FILEINFO_MIME_TYPE);
                $mimetype = finfo_file($finfo, $_FILES['file']['tmp_name']);
                finfo_close($finfo);

                if(in_array($mimetype,$allowedTypes)){

                    $stF = '../../assets/data/'.$tbla.'/';
                    //echo $stF;
                    $archtmp = new uArchivo($tbla,$stF,$_FILES['file']['tmp_name'],0,"",$_FILES['file']['name'],$id_c);

                    $archtmp->eliminar_x_id_c();

                    $nwid = $archtmp->insertar_uarchivo();

                    //echo $nwid;
                    echo '<div class="cropping-image-wrap"><img src="../img/icons/pdf.png" class="img-thumbnail" id="crop_archivo"/></div>';
                }else {
                    echo '<div class="alert alert-danger">Formato no soportado.</div>';
                }
            } else {
                echo '<div class="alert alert-danger">Hubo un problema al subir el archivo.</div>';
            }
        } else {
            echo '<div class="alert alert-danger">Datos incompletos (sin publicación de referencia).</div>';
        }
    } else {
        echo '<div class="alert alert-danger">Datos incompletos (sin tabla de referencia).</div>';
    }
} else {
    echo '<div class="alert alert-danger">Datos incompletos.</div>';
}
?>     
