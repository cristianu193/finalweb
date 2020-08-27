<?php
require_once "../conf/conexion.php";
$email=$_GET['email'];
$password=$_GET['password'];
$respuesta=login($email,$password);
if ($respuesta!='exito'){
	echo ($respuesta);
}
else{
	echo '';
	
}
