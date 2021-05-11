<?php

$utcarticulo = $_GET['utc'];

//Conectar con el servidor MySQL
include('conexion_db.php');

$ejecucion = mysql_query("SELECT * FROM posts WHERE utc='$utcarticulo' ORDER BY utc DESC LIMIT 1;", $conexion) or die('Error '.mysql_error());

while ( $fila = mysql_fetch_array($ejecucion)){
echo "
<article>
						<div id='logov2b' style='background:url(\"fotos/".$fila['foto'].".jpg\");'></div>
						<time>".$fila['anio']."-".$fila['mes']."-".$fila['dia']."</time>
						<h4>".$fila['usuario']."</h4>
						<p>".$fila['mensaje']."</p>
						<br/><a href='includes/eliminarpost.php?utc=".$fila['utc']."'>Eliminar</a><br/>
						<a href='blog.php?usuariomod=".$fila['usuario']."&mensajemod=".$fila['mensaje']."&editando=yes&utc=".$fila['utc']."'>Modificar</a><br/>
					</article>
";

}

mysql_close($conexion);

?>


