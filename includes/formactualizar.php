<?php

$usuariomod = $_GET['usuariomod'];
$mensajemod = $_GET['mensajemod'];
$utcmod = $_GET['utc'];

?>

<article style="background:rgba(255,255,0,0.2)">
						<div id="logov2b"></div>
						<!--<time>2011-01-31</time>-->
<form action="includes/actualizarpost.php" method="post">
						<h4>Nombre: <input type="text" name="usuariopostactualizar" value="<?php echo $usuariomod ?>"></h4>
						<p>Contenido: <input type="text" name="mensajepostactualizar" value="<?php echo $mensajemod ?>"></p>
						<input type="hidden" name="utcact" value="<?php echo $utcmod; ?>">
	<input type="submit">
						</form>
					</article>
