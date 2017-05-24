<?php
require_once ('../../Class/propiedad.php');

$op = (isset($_REQUEST['op'])) ? htmlentities($_REQUEST['op'], ENT_QUOTES) : '';		// opcion
$id = (isset($_REQUEST['id'])) ? htmlentities($_REQUEST['id'], ENT_QUOTES) : 0;	// id
$nombre = (isset($_REQUEST['nombre'])) ? htmlentities($_REQUEST['nombre'], ENT_QUOTES) : '';
$descripcion = (isset($_REQUEST['descripcion'])) ? htmlentities($_REQUEST['descripcion'], ENT_QUOTES) : '';
$precio = (isset($_REQUEST['precio'])) ? htmlentities($_REQUEST['precio'], ENT_QUOTES) : '';

/*IMAGENES*/
$tbl = (isset($_REQUEST['tbl'])) ? $_REQUEST['tbl'] : '';	// tabla imagen

$tmppropied = new propiedad($id,$nombre,$descripcion,$precio);

switch ($op) {
    case 'Agregar':
        $id = $tmppropied->insertar();
        echo $id;
        break;

    case 'Modificar':
        $tmppropied->modificar();
        break;

    case 'Eliminar':
        $tmppropied->eliminar();
        require_once ('../../Class/imagenes.php');
        $stF = '../../assets/images/data/'.$tbl.'/';
        $imgtmp = new Imagen($tbl,$stF,"",0,"","",$id,0);
        $imgtmp->eliminar_x_id_c();
        break;
}