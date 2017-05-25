<?php
require_once ('../../Class/Evento.php');

$op = (isset($_REQUEST['op'])) ? htmlentities($_REQUEST['op'], ENT_QUOTES) : '';		// opcion
$id = (isset($_REQUEST['id'])) ? htmlentities($_REQUEST['id'], ENT_QUOTES) : 0;	// id
$titulo = (isset($_REQUEST['titulo'])) ? htmlentities($_REQUEST['titulo'], ENT_QUOTES) : '';
$comment = (isset($_REQUEST['description'])) ? htmlentities($_REQUEST['description'], ENT_QUOTES) : '';
$fecha = (isset($_REQUEST['create_at'])) ? htmlentities($_REQUEST['create_at'], ENT_QUOTES) : '';


/*IMAGENES*/
$tbl = (isset($_REQUEST['tbl'])) ? $_REQUEST['tbl'] : '';	// tabla imagen

$tmpevent = new Evento($id,$titulo,$fecha,$comment);


switch ($op) {
    case 'Agregar':
        $id = $tmpevent->insertar();
        echo $id;
        break;

    case 'Modificar':
        $tmpevent->modificar();
        break;

    case 'Eliminar':
        $tmpevent->eliminar();
        require_once ('../../Class/imagenes.php');
        $stF = '../../assets/images/data/'.$tbl.'/';
        $imgtmp = new Imagen($tbl,$stF,"",0,"","",$id,0);
        $imgtmp->eliminar_x_id_c();
        break;
}