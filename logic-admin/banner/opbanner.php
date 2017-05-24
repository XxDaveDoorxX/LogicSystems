<?php
require_once ('../../Class/banner.php');

$op = (isset($_REQUEST['op'])) ? htmlentities($_REQUEST['op'], ENT_QUOTES) : '';		// opcion
$id = (isset($_REQUEST['id'])) ? htmlentities($_REQUEST['id'], ENT_QUOTES) : 0;	// id
$titulo = (isset($_REQUEST['titulo'])) ? htmlentities($_REQUEST['titulo'], ENT_QUOTES) : '';


/*IMAGENES*/
$tbl = (isset($_REQUEST['tbl'])) ? $_REQUEST['tbl'] : '';	// tabla imagen

$tmpbanner = new banner($id,$titulo);

switch ($op) {
    case 'Agregar':
        $id = $tmpbanner->insertar();
        echo $id;
        break;

    case 'Modificar':
        $tmpbanner->modificar();
        break;

    case 'Eliminar':
        $tmpbanner->eliminar();
        require_once ('../../Class/imagenes.php');
        $stF = '../../assets/images/data/'.$tbl.'/';
        $imgtmp = new Imagen($tbl,$stF,"",0,"","",$id,0);
        $imgtmp->eliminar_x_id_c();
        break;
}