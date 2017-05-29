<?php
require_once ('../../Class/Product.php');

$op = (isset($_REQUEST['op'])) ? htmlentities($_REQUEST['op'], ENT_QUOTES) : '';		// opcion
$id = (isset($_REQUEST['id'])) ? htmlentities($_REQUEST['id'], ENT_QUOTES) : 0;	// id
$nombre = (isset($_REQUEST['nombre'])) ? htmlentities($_REQUEST['nombre'], ENT_QUOTES) : '';
$subtitle = (isset($_REQUEST['subtitle'])) ? htmlentities($_REQUEST['subtitle'], ENT_QUOTES) : '';
$codigo = (isset($_REQUEST['codigo'])) ? htmlentities($_REQUEST['codigo'], ENT_QUOTES) : '';
$f_video = (isset($_REQUEST['f_video'])) ? $_REQUEST['f_video'] : '';
$description_first = (isset($_REQUEST['description_first'])) ? htmlentities($_REQUEST['description_first'], ENT_QUOTES) : '';
$description_second = (isset($_REQUEST['description_second'])) ? htmlentities($_REQUEST['description_second'], ENT_QUOTES) : '';
$characteristics = (isset($_REQUEST['characteristics'])) ? htmlentities($_REQUEST['characteristics'], ENT_QUOTES) : '';
$functionalities = (isset($_REQUEST['functionalities'])) ? htmlentities($_REQUEST['functionalities'], ENT_QUOTES) : '';

/*IMAGENES*/
$tbl = (isset($_REQUEST['tbl'])) ? $_REQUEST['tbl'] : '';	// tabla imagen

$tmpproduct = new Product($id,$nombre,$subtitle,$codigo,$f_video,$description_first,$description_second,$characteristics,$functionalities);

switch ($op) {
    case 'Agregar':
        $id = $tmpproduct->insertar();
        echo $id;
        break;

    case 'Modificar':
        $tmpproduct->modificar();
        break;

    case 'Eliminar':
        $tmpproduct->eliminar();
        require_once ('../../Class/imagenes.php');
        $stF = '../../assets/images/data/'.$tbl.'/';
        $imgtmp = new Imagen($tbl,$stF,"",0,"","",$id,0);
        $imgtmp->eliminar_x_id_c();
        break;
}