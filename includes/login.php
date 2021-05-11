<?php
	session_start();
	$usuarioenviado = $_POST['usuario'];
	$contrasenaenviado = $_POST['contrasena'];

/*include_once ('conexion_db.php');

$ejecuto = mysql_query("SELECT * FROM usuarios WHERE username = '".$usuarioenviado."';",$conexion)or die('Error en seleccionar'.mysql_error());

while($fila = mysql_fetch_array($ejecuto)){

if($usuarioenviado = $fila['usuario'] & $contrasenaenviado = $fila['contrasena']){

$_SESSION['login'] = "yes";
$_SESSION['usuariotemporal'] = $fila['usuario'];
*/
include('../core/conectar.php');
$ejecuto = new conectar();
$ejecuto -> open_connection();
$query= mysql_query("SELECT * FROM usuarios WHERE username = '".$usuarioenviado."';");

while($fila = mysql_fetch_array($query)){

if($usuarioenviado = $fila['usuario'] & $contrasenaenviado = $fila['contrasena']){

	$_SESSION['login'] = "yes";
	$_SESSION['usuariotemporal'] = $fila['usuario'];
	header("Location: form_posts.php");
	} else{
	$_SESSION['login'] = "no";

	header("Location: blog.php");
}


}
header("Location: blog.php");

?>
