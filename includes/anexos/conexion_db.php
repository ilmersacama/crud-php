    <?php
    //Conectar con el servidor MySQL*/
 
    $conexion = mysql_connect("localhost","root","ilsa1983") or die ('No se ha podido conectar'.mysql_error());
     
    //Seleccionar la BD a utilizar
    mysql_select_db("blog",$conexion) or die ('Existe problemas al seleccionar la base de datos'.mysql_error());
	?>