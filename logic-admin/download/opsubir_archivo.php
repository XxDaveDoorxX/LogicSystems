<?php

require_once ('../../Class/uarchivo.php');

// ** Tabla de archivos **//
$tbl = include('tabla_archivo.php');
// ** ** //
$op = (isset($_REQUEST['op'])) ? htmlentities($_REQUEST['op'], ENT_QUOTES) : '';		// opcion
$id_c = (isset($_REQUEST['id_c'])) ? htmlentities($_REQUEST['id_c'], ENT_QUOTES) : 0;	// id
$arch = (isset($_FILES['archivo'])) ? $_FILES['archivo'] : array();	// FILES

//print_r($_REQUEST);
//print_r($_FILES);

$stF = '../../assets/data/'.$tbl.'/';

switch ($op) {
	case 'Subir':
		if(!empty($arch)) {
			$tmparch = new uArchivo($tbl,$stF,$arch['tmp_name'],0,"",$arch['name'],$id_c);
			$tmparch->insertar_uarchivo();
		}
		break;
	case 'Cambiar':
		if(!empty($arch)) {
			if (isset($_REQUEST['id_a'])) {
				$tmparch = new uArchivo($tbl,$stF,$arch['tmp_name'],$_REQUEST['id_a'],"",$arch['name'],$id_c);
				$tmparch->modificar_uarchivo();
			}
		}
		break;
	
	case 'Eliminar':
		$tmparch = new uArchivo($tbl,$stF,"",0,"","",$id_c);
		$tmparch->eliminar_x_id_c();
		break;
		
}
	header('Location:ldownload');


?>