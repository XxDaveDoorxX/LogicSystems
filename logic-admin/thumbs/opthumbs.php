<?php
require_once ('../../Class/Thumbs.php');

$op = (isset($_REQUEST['op'])) ? htmlentities($_REQUEST['op'], ENT_QUOTES) : '';		// opcion
$id = (isset($_REQUEST['id'])) ? htmlentities($_REQUEST['id'], ENT_QUOTES) : 0;	// id
$titulo = (isset($_REQUEST['titulo'])) ? htmlentities($_REQUEST['titulo'], ENT_QUOTES) : '';
$id_product = (isset($_REQUEST['id_product'])) ? htmlentities($_REQUEST['id_product'], ENT_QUOTES) : 0;	// id


/*IMAGENES*/
$tbl = (isset($_REQUEST['tbl'])) ? $_REQUEST['tbl'] : '';	// tabla imagen

$tmpthumb = new Thumbs($id,$titulo,$id_product);

switch ($op) {
    case 'Agregar':
        $id = $tmpthumb->insertar();
        echo $id;
        break;

    case 'Modificar':
        $tmpthumb->modificar();
        break;

    case 'Eliminar':
        $tmpthumb->eliminar();
        require_once ('../../Class/imagenes.php');
        $stF = '../../assets/images/data/'.$tbl.'/';
        $imgtmp = new Imagen($tbl,$stF,"",0,"","",$id,0);
        $imgtmp->eliminar_x_id_c();
        break;
}