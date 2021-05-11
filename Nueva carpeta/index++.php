<?php
	//iniciar session para autenticar usuarios
 	session_start();
	include "includes/variablesusuarios.php";
	//verificar url navegador si se esta editando
	if(isset($_GET['editando']))
	{
		$editando = $_GET['editando'];
	}
	else
	{
		$editando = "no";
	}
	
	if(isset($_GET['articulo']))
	{
		$articulo = $_GET['articulo'];
	}
	else{
		$articulo = "no";
	}

	include ('cabecera.inc');
	include ('principal.inc');
	include ('contenido_lateral.inc');
	include ('footer.inc');
?>

