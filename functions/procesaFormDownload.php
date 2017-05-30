<?php
header('Content-type: text/html; charset=utf-8');
$msg = "";


if(isset($_POST['botonDownloadSend'])) {

    if (isset($_POST['arch'])&&
        $_POST['arch']!='' &&
        isset($_POST['nombrep']) &&
        isset($_POST['emailp']) &&
        isset($_POST['estadop'])){

        $nombre = htmlentities($_POST['nombrep'], ENT_QUOTES);
        $email = htmlentities($_POST['emailp'], ENT_QUOTES);
        $estado = htmlentities($_POST['estadop'], ENT_QUOTES);


        $email_to="eli.magana@imaginaestudio.mx";
        $email_subject="Seccion de descargas";
        $hideemail = "info@logicsystems.com.mx";

        $email_message= "
				
				<html>
					<head>
					<meta charset='utf-8'>
					<title>Documento sin título</title>
					<style>
						@import url(https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic);
						
						.orden, .total {font-family: 'Lato', sans-serif; font-weight:bold; font-style:italic; }
						.tel-a, .tel-b {font-family: 'Lato', sans-serif; font-size:12px;font-weight:bold; font-style:italic;}
						.txt-t {font-family: 'Lato', sans-serif; font-weight:bold; font-style:italic; }
						
						 html, body {font-family: 'Lato', sans-serif;}
						
					</style>
					</head>
					<body style='width:100% !important; margin:0 !important; padding:0 !important; -webkit-text-size-adjust:none; -ms-text-size-adjust:none; background-color:#FFFFFF;'>

	
					<table cellpadding='0' cellspacing='0' border='0' id='backgroundTable' style='height:auto !important; margin:0; padding:0; width:100% !important; background-color:#FFFFFF; color:#222222;'>
						<tr>
							<td>
								<div style='width:100% !important; max-width:600px !important; text-align:center !important; margin-top:0 !important; margin-right: auto !important; margin-bottom:0 !important; margin-left: auto !important; background-color:#00234E; border-bottom:5px solid #C29A38;'>
									<img src='logo_header.png' alt='' title='' style='padding:30px; text-align:center;'>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div style='width:100% !important; max-width:600px !important; margin-top:0 !important; margin-right: auto !important; margin-bottom:0 !important; margin-left: auto !important;'>
									<p><strong>Nombre:</strong> <span class='tel-b'>".$nombre." </span></p><br/><br/>
									<p><strong>Email:</strong> <span class='tel-b'>".$email." </span></p><br/><br/>
									<p><strong>Estado:</strong> <span class='tel-b'>".$estado."</span></p><br/><br/>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div style='width:100% !important; max-width:800px !important; margin-top:0 !important; margin-right: auto !important; margin-bottom:0 !important; margin-left: auto !important; background-color:#00234E; border-top:5px solid #C29A38;'>
									<div style='padding:27px; text-align:center; color:#FFFFFF;'>Copiright 2016</div>
								</div>
							</td>
						</tr>
					</table>

						
					</body>
				</html>
			";


        // Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
        $cabeceras = "MIME-Version: 1.0\r\n";
        $cabeceras .= "Content-type: text/html; charset=utf-8"."\r\n";
        $cabeceras.= "From: ".$hideemail."\r\n";
        $cabeceras .= "X-Mailer: PHP/".phpversion()."\r\n";

        if(mail($email_to, $email_subject, $email_message, $cabeceras))
        {
            echo "<script language='javascript'>
							window.location.href = 'gracias_contacto.php';
					   </script>";
        }

    }else{
        $msg = "Ocurrio un error intenta mas tarde";
    }
    echo $msg;
}