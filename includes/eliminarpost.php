<?php

$codigoutc = $_GET['utc'];

//Conectar con el servidor MySQL
include('conexion_db.php');

mysql_query("DELETE FROM posts WHERE utc='".$codigoutc."'",$conexion)or die("problemas al seleccionar tabla".mysql_error());

mysql_close($conexion);

echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=../blog.php"
	</head>
</html>

';

?>
