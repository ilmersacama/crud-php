<?php
	
	include ('views/cabecera.inc');
	include_once('controller/Controller.php');
	$controller = new Controller();
	$controller -> menu();
	include ('views/contenido_lateral.inc');
	include ('views/footer.inc');
?>

