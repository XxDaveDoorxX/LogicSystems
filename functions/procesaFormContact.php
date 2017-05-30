<?php
header('Content-type: text/html; charset=utf-8');
require_once('app.php');

$msg = "";

$codigo = (isset($_POST['g-recaptcha-response'])) ? $_POST['g-recaptcha-response'] : '';

$response = $recaptcha->verify($codigo);

if($response->isSuccess()){

    if (isset($_POST['nombrec']) &&
        isset($_POST['telefonoc'])&&
        isset($_POST['emailc']) &&
        isset($_POST['product'])){

        $nombre = htmlentities($_POST['nombrec'], ENT_QUOTES);
        $empresa = htmlentities($_POST['empresac'], ENT_QUOTES);
        $estado = htmlentities($_POST['estadoc'], ENT_QUOTES);
        $ciudad = htmlentities($_POST['ciudadc'], ENT_QUOTES);
        $telefono = htmlentities($_POST['telefonoc'], ENT_QUOTES);
        $email = htmlentities($_POST['emailc'], ENT_QUOTES);
        $message = htmlentities($_POST['messagec'], ENT_QUOTES);


        $email_to = "eli.magana@imaginaestudio.mx";
        $email_subject= "Contacto Logic Systems";

        $email_message= "
                            <html>
                            <head>
                                <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
                                <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
                                <style>
                                td img{
                                padding-top: 50px;
                                }
                                td p{
                                font-family: 'Raleway', sans-serif;
                                font-size: 14px;
                                }
                                
                                td strong{
                                font-family: 'Raleway', sans-serif;
                                font-size: 14px;
                                }
                                </style>
                            </head>
                            
                            <body>
                                <table align='center' border='0' cellpadding='10'>
                                    <tr>
                                        <td><img src='http://imaginaestudiovirtual.com/behealthy/images/logo_email.jpg'></td>
                                    </tr>
                                </table>
                                <table align='center' border='0' cellpadding='10'>
                                    <tr>
                                        <td align='right'><strong>Nombre:</strong></td>
                                        <td><p>".$nombre."</p></td>
                                    </tr>
                                    <tr>
                                        <td align='right'><strong>Teléfono:</strong></td>
                                        <td><p>".$telefono."</p></td>
                                    </tr>
                                    <tr>
                                        <td align='right'><strong>Correo electrónico:</strong></td>
                                        <td><p>".$email."</p></td>
                                    </tr>
                                    <tr>
                                        <td align='right'><strong>Comentarios:</strong></td>
                                        <td><p>".$message."</p></td>
                                    </tr>
                                </table>
                            </body>
                            </html>";


        // Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
        $cabeceras = "MIME-Version: 1.0\r\n";
        $cabeceras .= "Content-type: text/html; charset=utf-8"."\r\n";
        $cabeceras.= "From: ".$email."\r\n";
        $cabeceras .= "X-Mailer: PHP/".phpversion()."\r\n";

        if(mail($email_to, $email_subject, $email_message, $cabeceras))
        {
            echo "<script language='javascript'>
				window.location.href = 'gracias_contacto.php';
		   </script>";
        }

    }else{
        $msg = 'No has selecionado un producto.';
    }

}else{
    $msg = "Captcha incorrecto";
}
echo $msg;