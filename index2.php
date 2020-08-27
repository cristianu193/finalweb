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
	<title>Ingreso</title>

	    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!--Etilos personalizados-->
    <link rel="stylesheet" href="css/estilos.css">
	
</head>
<body>
	    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="index.html">Menu</a>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html">Empresa</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
              <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
          </div>
    </nav>
	 <section id="cover">
      <div id="cover-texto">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
				<form action="javascript:ProyectoFinalWeb()" id="login">
					<div><label for="email"> Escriba su correo:<br>
						<input type="email" name="email" id="email">	
					</label></div>
					<div><label for="pwd"> Escriba contraseña:<br>
						<input type="password" name="password" id="pwd">	
					</label></div>
					<input type="hidden" name="error" id="error" value="<?=$error?>">
					<button id="boton" class="btn btn-success btn-lg">Ingresar</button>
					<div id="mensaje"></div>
				</form>
			</div>
           </div>
         </div>
       </div>
    </section>

</body>
<script type="text/javascript" src="js/iniciarsesion.js"></script>
</html>