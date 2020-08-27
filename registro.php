<?php
if(isset($_GET['error'])){
	$error=$_GET['error'];
}else{
	$error="";
} 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div class="caja login">

		<form action="src/procesar.php" method="post" name="frm">
			<div><label for="name"> Nombre:<br>
				<input type="text" name="nombre" id="name">	
			</label></div>
			<div><label for="lastname"> Email:<br>
				<input type="email" name="correo" id="lastname">	
			</label></div>
			<div><label for="dir"> Contraseña:<br>
				<input type="pass" name="contraseña" id="dir">	
			</label></div>
			<div><label for="Tel"> Direccion:<br>
				<input type="number" name="dir" id="tel">	
			</label></div>
			<div><label for="suemail"> Telefono:<br>
				<input type="number" name="tel" id="suemail">	
			</label></div>
			<button class="btn btn-success my-2 my-sm-0" type="submit">Registrar</button>
			<div id="mensaje"></div>
	</form>
</div>

</body>
<script type="text/javascript" src="js/iniciarsesion.js"></script>
</html>