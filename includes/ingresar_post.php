<?php

//session_start();

//$usuario = $_SESSION['usuario'];
	//cargar datos del formulario
	$usuario = $_POST['usuario'];
	$mensaje = $_POST['mensaje'];
	//cargar datos de tiempo en memoria de la base de datos
	$postutc = date('U');
	$postanio = date('Y');
	$postmes = date('m');
	$postdia = date('d');
	$posthora = date('H');
	$postminuto = date('i');
	$postsegundo = date('s');
    //Conectar con el servidor MySQL
 
include ('conexion_db.php');
	   
    //Insertar datos de form en la BD
mysql_query("INSERT INTO posts VALUES ('$usuario', '$mensaje', '', '$postutc', '$postanio', '$postmes', '$postdia', '$posthora', '$postminuto', '$postsegundo')",$conexion)or die("problemas al insertar registros".mysql_error());

   //Cerrrar conexion a la BD
    mysql_close($conexion);
	
 echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=../blog.php"
	</head>
</html>

	';

	
	/*
    // Le  Envio  un correo electronico  de bienvenida
    $destinatario = "ilmer_sa@hotmail.com";      //A quien se envia
	$asunto = "Has recibido un correo del Blog"; //asunto
    $nomb = $_REQUEST['nombre'];      				 //Quien envia
    $mail = $_REQUEST['email'];       			 //Mail del quien envia
    $mensaje = $_REQUEST['obs'];						 //comentarios
	$urlAccess = "http://localhost/registro";       //Url de la pantalla de registro
    $cuerpomsg ="
    <p>Su mensaje ha sido enviado con exito.</p>
        <table border='0'>
		 <tr>
           <td colspan='2' align='center' >Sus datos de acceso para <a href='\".$urlAccess.\"'>'.$urlAccess.'</a><br></td>
        </tr>
        <tr>
            <td> Nombre </td>
            <td> <b>'.$nomb.'</b> </td>
        </tr>
        <tr>
            <td> Email </td>
            <td> <b>'.$mail.'</b> </td>
        </tr>
        <tr>
            <td> Comentarios </td>
            <td> <b>'.$mensaje.'</b> </td>
        </tr>
        </table> <br/><br/>
    <p><b>Gracias por su preferencia, hasta pronto.</b></p> <br><br>";
 
    date_default_timezone_set('America/Mexico_City');
 
    //Establecer cabeceras para la funcion mail()
    //version MIME
    $cabeceras = "MIME-Version: 1.0\r\n";
    //Tipo de info
    $cabeceras .= "Content-type: text/html; charset=iso-8859-1\r\n";
	
    //direccion del remitente
    $cabeceras .= "From: ".$nomb." <".$mail.">";
    $i_EmailEnviado = 0;
    $mensajemail = $nomb." con el email ".$mail." te ha enviado un mensaje que dice ".$mensaje;
    //Si se envio el email
    if(mail($destinatario,$asunto,$cuerpomsg,$mensajemail))
	{
		echo "Tu email se ha enviado correctamente";
		$i_EmailEnviado = 1;
	}
	else{
		echo "El envio del mail ha fallado";
		}
   //Cerrrar conexion a la BD
    mysql_close($conexion);
 
    // Mostrar resultado del registro
	echo "<html>
		<form action='address.html' method='post'>
			<input type='hidden' name='status_registro' value='1' />
        	<input type='hidden' name='i_EmailEnviado' value='\".$i_EmailEnviado.\"' />
			<input type='submit' value='VOLVER ATR&Aacute;S' />
		</form>
    </html>";
	*/
	?>