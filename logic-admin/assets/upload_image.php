<?php
include_once ('../../assets/Clases/imagenes.php');
require_once ('../../assets/Clases/inc/existTable.php');

if (isset($_REQUEST['tbl'])) {
	$tbl = htmlentities($_REQUEST['tbl'], ENT_QUOTES);
	if (existTable($tbl)) {
	
		$id_c = 0;
		if (isset($_REQUEST['id_c'])) {
			if (is_numeric($_REQUEST['id_c']))
				$id_c = $_REQUEST['id_c'];
		}
		
		if (!empty($id_c)) {
			
			if (!empty($_FILES) && $_FILES['file']['tmp_name']) {  
				// check image type
				$allowedTypes = array(IMAGETYPE_JPEG);// list of allowed image types
				$detectedType = exif_imagetype($_FILES['file']['tmp_name']);
				$error = !in_array($detectedType, $allowedTypes);
				// end of check
				
				if(!$error){
					
					$stF = '../../assets/image/data/'.$tbl.'/';
					//echo $stF;
					$imgtmp = new Imagen($tbl,$stF,$_FILES['file']['tmp_name'],0,"",$_FILES['file']['name'],$id_c,0);
					
					$imgtmp->eliminar_x_id_c();
					
					$nwid = $imgtmp->insertar_imagen();
					
					$iw = array(1920);
					$ih = array(699);
					foreach($iw as $i => $e) {
						$cpt = $i;
						if($i == 0)
							$cpt = "";
						$imgtmp->crear_img_rz($iw[$i],$ih[$i],'crop','crop'.$cpt.'_');
					}
					
					//echo $nwid;
					echo '<div class="cropping-image-wrap"><img src="../../assets/image/data/'.$tbl.'/crop_'.$imgtmp->archivo.'" class="img-thumbnail" id="crop_image"/></div>';
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
