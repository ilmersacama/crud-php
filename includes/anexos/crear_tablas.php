<?php
//################  crear la tabla de usuarios   #################
/*$conexion;
function conectar_db()
{
    global $conexion;
    //Conectar con el servidor MySQL*/
 
    $conexion = mysql_connect("localhost","ilmer","ilsa1983") or die ('No se ha podido conectar'.mysql_error());
     
    //Seleccionar la BD a utilizar
    mysql_select_db("blog",$conexion) or die ('Existe problemas al seleccionar la base de datos'.mysql_error());
//}  

//Preparo esta peticion
$sql = "CREATE TABLE usuarios
(
id_usuario int unsigned not null auto_increment primary key,
usuario varchar(40) Not Null,
contrasena varchar(40) Not Null,
nombre varchar(40),
apellidouno varchar(40),
apellidodos varchar(40),
titulo varchar(120),
descripcion varchar(1500),
foto varchar(40),
webpersonal varchar(80),
email varchar(80),
permisos Int
) ENGINE=InnoDB";

//Ejecuto la peticion
mysql_query($sql,$conexion);

//Cerrar la conexion

mysql_close($conexion);

//################  crear la tabla de posts   #################
//Conectar con el servidor MySQL*/
 
    $conexion = mysql_connect("localhost","ilmer","ilsa1983") or die ('No se ha podido conectar'.mysql_error());
     
    //Seleccionar la BD a utilizar
    mysql_select_db("blog",$conexion) or die ('Existe problemas al seleccionar la base de datos'.mysql_error());
//}  

//Preparo esta peticion
$sql = "CREATE TABLE posts
(
usuario varchar(80)Not Null,
mensaje varchar(1000) Not Null,
imagen varchar(200),
utc Int Not Null,
anio Int,
mes Int,
dia Int,
hora Int,
minuto Int,
segundo Int
) ENGINE=InnoDB";
//Ejecuto la peticion
mysql_query($sql,$conexion);

//Cerrar la conexion

mysql_close($conexion);
//################  crear la tabla de contactos   #################
//Conectar con el servidor MySQL*/
 
    $conexion = mysql_connect("localhost","ilmer","ilsa1983") or die ('No se ha podido conectar'.mysql_error());
     
    //Seleccionar la BD a utilizar
    mysql_select_db("blog",$conexion) or die ('Existe problemas al seleccionar la base de datos'.mysql_error());
//}  

//Preparo esta peticion
$sql = "CREATE TABLE contactos
(
nombre varchar(80) not null,
email varchar(80) not null,
mensaje varchar(1000) Not Null,
utc Int Not Null,
anio Int,
mes Int,
dia Int,
hora Int,
minuto Int,
segundo Int
) ENGINE=InnoDB";
//Ejecuto la peticion
mysql_query($sql,$conexion);

//Cerrar la conexion

mysql_close($conexion);
?>