<?php
	//session_start();
	//$_SESSION['usuariotemporal']='ilmersa';
   	//Conectar con el servidor MySQL
   	include_once ('/core/Conectar.php');
	$ejecution = new Conectar();
	$query = $ejecution->open_connection()->query("SELECT * FROM posts WHERE usuario='".$_SESSION['usuariotemporal']."' ORDER BY utc DESC LIMIT 10");

	while($fila = $query->fetch())
	{
		echo "
			<article style='background:#CFF;font-size:12px;'>
			<div style='background:url(\"images/".$fila['imagen'].".jpg\");background-repeat:no-repeat;width:50px;height:50px;display:box;float:left;'></div>
			<h4 style='border:0;'>".$fila['usuario']."<br>
			<time style='border:0'>".$fila['anio']."-".$fila['mes']."-".$fila['dia']."->".$fila['hora'].":".$fila['minuto']."</time>
			<p>".$fila['mensaje']."</p>
			
		";
			if($_SESSION['login'] == "yes"){
			echo "<a href='includes/eliminarpost.php?utc=".$fila['utc']."'>Eliminar</a>";
			echo "<br/>";
			}else{}
					
			if($_SESSION['login'] == "yes"){
			echo "<a href='blog.php?usuariomod=".$fila['usuario']."&mensajemod=".$fila['mensaje']."&editando=yes&utc=".$fila['utc']."'>Modificar</a>";
			echo"<br/>";
			}else{}
		
		echo "</article>";
		}

	//$ejecution->close_connection();

?>