<?php

$utcact = $_POST['utcact'];
$usuario = $_POST['usuariopostactualizar'];
$mensaje = $_POST['mensajepostactualizar'];

include('conexion_db.php');

$consulta = mysql_query("UPDATE posts SET usuario = '".$usuario."', mensaje='".$mensaje."' WHERE utc='".$utcact."'", $conexion)or die('error al modificar registros'.mysql_error());

mysql_close($conexion);


echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=../blog.php"
	</head>
</html>

';

?>
