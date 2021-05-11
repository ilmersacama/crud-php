<?php

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$mensajeinicial=$_POST['obs'];

$destinatario="ilmersacama@gmail.com, ilmer Sacama <ilmer_sa@hotmail.com>";
$asunto="Necesidad de ayuda con diseños de paginas web";
//$mensajes="Por favor necesito su ayuda";

$cabeceras_adicionales = "From: Ana María López <anita@mail.com>\r\n"; 
$cabeceras_adicionales .= "Reply-to: Rocío Irao <rocio@mail.com>\r\n"; 
$cabeceras_adicionales . "Cc: Ariel Domingo <ariel@mail.com>\r\n"; 
$cabeceras_adicionales .= "Bcc: Supervisor <admin@mail.com>\r\n"; 

$mensaje = $nombre." con el email ".$email." te ha enviado un mensaje que dice ".$mensajeinicial;

//mail($destinatario, $asunto, $mensaje, $cabeceras_adicionales);

if(mail($destinatario, $asunto, $mensaje, $cabeceras_adicionales)) { 
    echo "El e-mail se ha enviado satisfactoriamente.";
	echo "
			<html>
				<head>
					<meta http-equiv='REFRESH' content='0;url=address.php'
				</head>
			</html>
	"; 
	} else { 
    	echo "Se ha producido un error al intentar enviar el e-mail"; 
	echo "

		<html>
			<head>
				<meta http-equiv='REFRESH' content='0;url=address.php'
			</head>
		</html>
		";
	}

?>