<?php

//session_start();
//$_SESSION['usuariotemporal']='ilmersa';

   //Conectar con el servidor MySQL*/
   //include ('conexion_db.php');
	include('../core/conectar.php');
$ejecuto = new conectar();
$ejecuto -> open_connection();
$peticion = mysql_query("SELECT * FROM usuarios WHERE username ='".$_SESSION['usuariotemporal']."';");

while ($fila = mysql_fetch_array($peticion))
{
$_SESSION['usuario'] = $fila['nombre'];
$_SESSION['apellidouno'] = $fila['apellidos'];
$_SESSION['titulo'] = $fila['usuario'];
$_SESSION['descripcion'] = $fila['password'];
$_SESSION['email'] = $fila['email'];
$_SESSION['permisos'] = $fila['permisos'];

}
?>