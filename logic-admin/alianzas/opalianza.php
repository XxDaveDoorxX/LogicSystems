<?php
require_once ('../../Class/Alianza.php');

$op = (isset($_REQUEST['op'])) ? htmlentities($_REQUEST['op'], ENT_QUOTES) : '';		// opcion
$id = (isset($_REQUEST['id'])) ? htmlentities($_REQUEST['id'], ENT_QUOTES) : 0;	// id
$titulo = (isset($_REQUEST['titulo'])) ? htmlentities($_REQUEST['titulo'], ENT_QUOTES) : '';
$comment = (isset($_REQUEST['comment'])) ? htmlentities($_REQUEST['comment'], ENT_QUOTES) : '';
$rating = (isset($_REQUEST['rating'])) ? htmlentities($_REQUEST['rating'], ENT_QUOTES) : '';
$fecha = (isset($_REQUEST['create_at'])) ? htmlentities($_REQUEST['create_at'], ENT_QUOTES) : '';


/*IMAGENES*/
$tbl = (isset($_REQUEST['tbl'])) ? $_REQUEST['tbl'] : '';	// tabla imagen

$tmpalianza = new Alianza($id,$titulo,$comment,$rating,$fecha);


switch ($op) {
    case 'Agregar':
        $id = $tmpalianza->insertar();
        echo $id;
        break;

    case 'Modificar':
        $tmpalianza->modificar();
        break;

    case 'Eliminar':
        $tmpalianza->eliminar();
        require_once ('../../Class/imagenes.php');
        $stF = '../../assets/images/data/'.$tbl.'/';
        $imgtmp = new Imagen($tbl,$stF,"",0,"","",$id,0);
        $imgtmp->eliminar_x_id_c();
        break;
}