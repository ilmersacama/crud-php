<?php
//Conectar con el servidor de base de datos

$conexion = mysql_connect("localhost","ilmer","ilsa1983");

if(!$conexion){
	die('No he podido conectar: '.mysql_error());
	}
//crear una base de datos
if(mysql_query("CREATE DATABASE blog",$conexion))
	{
		echo "Se ha creado la base de datos";
	}
	else{
			echo "No se ha podido crear la base de datos por el siguiente error: ".mysql_error();
	}

//Cerrar la conexion

mysql_close($conexion);

?>