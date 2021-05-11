<?php
	include ('cabecera.inc');
?>
	<!---CONTENIDO-->
	<div class="seccion">
	<div class="contenido">
	<h1 id="titulo">Formulario de Registro</h1>
	<section>
			<label>Reg&iacute;strese para responder su consulta.</label>
			<p><span id="reg">Los campos marcados con <strong id="requerido">*</strong> son obligatorios.</span></p>
			<form action="registrar.php" method="post" onSubmit="return validar();">
			<fieldset>
			<legend>Datos de registro:</legend>
			  <span>Nombre y apellidos: <strong>*</strong></span><br/>
			  <input type="text" id="nombre" name="nombre" placeholder="nombres">
			  <span id="error_nombre"></span> <br/> 
			  <span>E-mail: <strong>*</strong></span><br/>
			  <input type="text" id="mail" name="email" placeholder="email">        
			  <span id="error_mail"></span><br/>
			  <span>Escriba su mensaje: <strong>*</strong></span><br/>
			  <textarea rows="5" cols="65" id="obs" name="obs" placeholder="introduzca sus comentarios"></textarea><br />   
			  <span id="error_obs"></span><br/>
			  <input type="submit" value="ENVIAR"></input><br/>
		   </form>
			</div>
	</section>
	</div>
	<?php
		include ('contenido_lateral.inc');
		include ('footer.inc');
	?>