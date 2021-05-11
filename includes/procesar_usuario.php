<?php

session_start();

$contador = 0;

//recibo variables
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$nombre = $_POST['nombre'];
$apellidouno = $_POST['apellidouno'];
$apellidodos = $_POST['apellidodos'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$foto = $_POST['foto'];
$webpersonal = $_POST['webpersonal'];
$email = $_POST['email'];

//comprobar si existe un usuario identico
include('conexion_db.php');

$resultado = mysql_query("SELECT * FROM usuarios",$conexion)or die('error->'.mysql_error());

while($fila = mysql_fetch_array($resultado)){

	if($fila['usuario'] == $usuario){
		$contador++;
	}else{}

}
 mysql_close($conexion);

//creo inserto un nuevo usuario

if($contador == 0){
	include('conexion_db.php');

	$consulta = mysql_query("INSERT INTO usuarios VALUES (null,'".$usuario."','".$contrasena."','".$nombre."','".$apellidouno."','".$apellidodos."','".$titulo."','".$descripcion."','".$foto."','".$webpersonal."','".$email."',3)",$conexion)or die('existe errores al insertar->'.mysql_error());

	mysql_close($conexion);

	echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=../blog.php"
	</head>
</html>

';

}
else{echo'

El usuario creado ya existe
';}
?>
