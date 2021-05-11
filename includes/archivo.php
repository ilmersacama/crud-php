<aside id="posts">
	<h5>Posts previos</h5>
	<ul>
		<?php

		include_once ('/core/Conectar.php');
   		$ejecution = new Conectar();
 		$query = $ejecution->open_connection()->query("SELECT * FROM posts ORDER BY utc DESC LIMIT 20 OFFSET 3");

		while($fila = $query->fetch())
		
		{
			echo "<li><a href='blog.php?articulo=yes&utc=".$fila['utc']."'><time>".$fila['anio']."-".$fila['mes']."-".$fila['dia']."</time>-".$fila['usuario']."</a></li>";

		}

		//mysql_close($conexion);

		?>			

	</ul>
</aside>
