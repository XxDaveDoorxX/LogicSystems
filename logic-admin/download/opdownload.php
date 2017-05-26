<?php
require_once ('../../Class/Descarga.php');

$op = (isset($_REQUEST['op'])) ? htmlentities($_REQUEST['op'], ENT_QUOTES) : '';		// opcion
$id = (isset($_REQUEST['id'])) ? htmlentities($_REQUEST['id'], ENT_QUOTES) : 0;	// id
$titulo = (isset($_REQUEST['titulo'])) ? htmlentities($_REQUEST['titulo'], ENT_QUOTES) : '';
$comment = (isset($_REQUEST['description'])) ? htmlentities($_REQUEST['description'], ENT_QUOTES) : '';


/*IMAGENES*/
$tbl = (isset($_REQUEST['tbl'])) ? $_REQUEST['tbl'] : '';	// tabla imagen

$tmpdownload = new Descarga($id,$titulo,$comment);


switch ($op) {
    case 'Agregar':
        $id = $tmpdownload->insertar();
        echo $id;
        break;

    case 'Modificar':
        $tmpdownload->modificar();
        break;

    case 'Eliminar':
        $tmpdownload->eliminar();
        require_once ('../../Class/imagenes.php');
        $stF = '../../assets/images/data/'.$tbl.'/';
        $imgtmp = new Imagen($tbl,$stF,"",0,"","",$id,0);
        $imgtmp->eliminar_x_id_c();
        break;
}