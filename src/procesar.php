<?php
include "conf/conexion2.php";

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$contraseña=$_POST['contra'];
$direccion=$_POST['dir'];
$telefono=$_POST['tel'];

$query="INSERT INTO users (nombre,email, password, direccion, telefono)
	values('$nombre','$correo','$contraseña','$direccion','$telefono')";

$resultado= $conexion->query($query)

if($resultado){
	header("Location: home.php");
}else{
	echo "insercion no exitosa";
}
?>
