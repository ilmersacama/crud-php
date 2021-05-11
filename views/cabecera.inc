
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ILMER SACAMA | Desarrollo Web</title>
	<meta name="description" content="Ilmer Sacama Anconi | Desarrollador web" />
	<meta name="keywords" content="desarrollo web, posts, blog, perfil profesional, actividades, dirección, diseño, multimedia" />
	<meta http-equiv="refresh" content="500" />
	<link rel=stylesheet type="text/css" href="css/estilos.css" media="screen, projection, only screen and (max-width:450px)" />
	<link rel=stylesheet type="text/css" href="css/bootstrap.css" media="screen, projection, only screen and (max-width:450px)" />
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/validar.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	var cambio=false;
	$('.nav li a').each(function(index){
		if(this.href.trim() == window.location){
			$(this).parent().addClass("active");
			cambio=true;
		}
	});
	if(!cambio){
		$('.nav li:first').addClass("active");
	}
	});
	</script>
</head>

<body>
<div id="contenedor">
	<!---CABECERA-->
	<header id="cabecera">
		<div id="content">
			<div class="logo"></div>
			<div>
			<h1>Ilmer Sacama</h1>
			<h3>DESARROLLADOR WEB</h3>
			</div>
			<div id="links">
				<a href="http://www.facebook.com/ilmer.sacama/">
				<img src="images/facebook.png" width="34" height="38" /></a>
				<a href="http://twitter.com/ilmersacama/">
				<img src="images/twitter.png" width="34" height="38" /></a>
				<a href="mailto:ilmer_sa@gmail.com">
				<img src="images/email.png" width="34" height="38"></a>
			</div>
		</div>	
		<div style="clear:both;"></div>
	</header>
		<!---MENU DE NAVEGACION-->
	<nav>
	<ul class="nav">
		<li ><a href="views/principal.inc">INICIO</a></li>
		<li ><a href="views/user.php">ACERCA DE MI</a></li>
		<li ><a >PERFIL PROFESIONAL</a>
		<ul>
			<li><a href="views/desar.php">FORMACION ACADEMICA</a></li>
			<li><a href="views/aplic.php">CAPACITACION</a> </li>
			<li><a href="views/work.php">EXPERIENCIA LABORAL</a></li>
			<li><a href="views/hobbies.php">ACTIVIDADES ADICIONALES</a></li>
		</ul>
		</li>
		<li><a href="blog.php">BLOG</a></li>
		<li><a href="views/address.php">CONTACTOS</a></li>
	</ul>
	</nav>
	<div style="clear:both;"></div>