<?php
session_start();
if(!isset($_GET['u'])){}else{$_SESSION['usuariotemporal'] = $_GET['u'];}
//$_SESSION['usuariotemporal']='ilmersa';
	include "controller/Controller.php";

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
	
	//if(isset($_SESSION['login'])){}else{$_SESSION['login'] = "no";}
	
	if(isset($_GET['registronuevo'])){
	$registronuevo = $_GET['registronuevo'];

	}else{
	$registronuevo = "no";
	}
?>
<?php
	include ('views/cabecera.inc');
	
?>
	<!---CONTENIDO-->
	<div class="seccion">
	<div class="contenido">
	<h1 id="titulo">Blogs</h1>
	<section>
          <p>En esta secci&oacute;n, puedes dejar tus comentarios y observaciones, adem&aacute;s para ayudar a los que necesiten de un asesoramiento.</p>
          <h3>Secci&oacute;n de Comentarios</h3>
   		  	<?php /*if($registronuevo == "no"){} else{include "includes/registrar_usuarios.php";}?>
            <?php if($registronuevo == "no"){if ($articulo=="no"){*/include "includes/posts.php"; /*} else{}}else{}*/ ?>
            
            <?php if($registronuevo == "no"){if($_SESSION['login']=="yes"){if ($articulo=="no"){if ($editando == "yes"){include "includes/formactualizar.php";}else{}} else {} }else{} }else{}?>
            
          	<?php if($registronuevo == "no"){if ($articulo == "yes"){include "includes/articulo.php";}else{}}else{}?>
    		<?php
			if($registronuevo == "no"){if($_SESSION['login'] == "yes")
			{
			echo "<a style='background:#F00;padding:10px;' href='includes/unlog.php'>Pulsa AQUI para cerrar sesion</a>";
			}
			else {
				$controller = new Controller();
				$controller -> invoke();
			
			}
			echo '<div style="background:#CCC;padding:20px;">
					<a href="blog.php?registronuevo=yes">Registrarse</a></div>';}else{}
		?>
        <?php
		if($_SESSION['login']=="yes"){include ('includes/form_posts.php');}else{}
		?>
	</section>
	</div>
	</div>
	<!---MENU DE CONTENIDO LATERAL-->
	<div class="lateral">
	<aside>
	<?php
    include_once "includes/archivo.php";
    ?>
	</aside>
	</div>
	<?php
		include ('footer.inc');
	?>