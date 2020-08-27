 <?php
session_start();
if(isset($_SESSION['id'])) 
{ 
  
    $id= $_SESSION['id'];

}else
{
    header("Location: /ProyectoFinalWeb/index2.php?error=is");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<input type="hidden" id="idusuario" name="idusuario" value="<?=$id?>">
	<?php
		include 'src/menu.php';
	?>
	<div class="contenido">
		    <center>
    	<table bgcolor="E1DCDC" border="1">
    		<thead>
    			<tr>
    				<th colspam="1">Numero registro</th>
    				<th colspam="5">Lista de usurios</th>
    			</tr>
    		</thead>
    		<tbody>
    			<tr>
    				<td>Id</td>
    				<td>Nombre</td>
    				<td>Email</td>
    				<td>Password</td>
    				<td>Direccion</td>
    				<td>Telefono</td>
    				<td colspan="2">Operaciones</td>
    			</tr>
	    			<?php
	    			include ("conf/conexion2.php");

	    			$query="SELECT * FROM users";
	    			$resultado=$conexion->query($query);
	    			while($row=$resultado->fetch_assoc()){

	    			?>

	    			<tr>
	    				<td><?php echo $row['id']; ?></td>
	    				<td><?php echo $row['nombre']; ?></td>
	    				<td><?php echo $row['email']; ?></td>
	    				<td><?php echo $row['password']; ?></td>
	    				<td><?php echo $row['direccion']; ?></td>
	    				<td><?php echo $row['telefono']; ?></td>
	    				<td><a href="src/modificar.php?id=<?php echo $row['id']; ?>">Modificar</a></td>
	    				<td><a href="src/eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a></td>
	    			</tr>
	    			<?php
	    				}
	    			?>
    		</tbody>
    	</table>
    </center>
	</div>
</body>

</html> 