<!DOCTYPE html>
<html>
  <head>
    <title>Tabla</title>
  </head>
  <body>
    <center>
    	<table bgcolor="E1DCDC" border="1">
    		<thead>
    			<tr>
    				<th colspam="1"><a href="registro.php">Nuevo</a></th>
    				<th colspam="5">Lista de usurios</th>
    			</tr>
    		</thead>
    		<tbody>
    			<tr>
    				<td>d</td>
    				<td>nombre</td>
    				<td>email</td>
    				<td>password</td>
    				<td>direccion</td>
    				<td>telefono</td>
    				<td colspan="2">Operaciones</td>
    			</tr>
    			<?php
    			include("conf/conexion.php");

    			$query="SELECT * FROM users";
    			$resultado=$conexion->query($query);
    			while($row=$resultado->fetch_assoc()){

    			?>
    			<tr>
    				<td><?php echo $row['dd']; ?></td>
    				<td><?php echo $row['nombre']; ?></td>
    				<td><?php echo $row['email']; ?></td>
    				<td><?php echo $row['pAssword']; ?></td>
    				<td><?php echo $row['direccion']; ?></td>
    				<td><?php echo $row['telefono']; ?></td>
    				<td><a href="src/modificar.php?Id=<?php echo $row['id']; ?>">Modificar</a></td>
    				<td><a href="src/eliminar.php?Id=<?php echo $row['id']; ?>">Eliminar</a></td>
    			</tr>
    			<?php
    				}
    			?>
    		</tbody>
    	</table>
    </center>
  </body>
</html>