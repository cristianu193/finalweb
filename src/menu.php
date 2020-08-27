<?php 
if(isset($_SESSION['nombre'])) 
{ 
  
    $usuario= $_SESSION['nombre'];
    ?>
<nav class="nav-menu">
	<div class="item"><a id="home"><i class='fa fa-home'></i></a></div>
	<ul class=menu>
		<li class="item usuario"><?php echo "<strong><i class='fa fa-user'></i>  ".$usuario."</strong>";?></li>
		<li class="item"> <a id="cerrar">Cerrar sesión</a></li>
		<li class="item"><a href="registro.php">Agregar usuario</a></li>
	</ul>
</nav>
<script type="text/javascript" src="js/menu.js"></script>

    <?php

}else
{
    echo "";
}?>
