<?php
session_start();
require_once "../conf/conexion.php";
$email=$_GET['email'];
$password=$_GET['password'];

	$usuario=consulta("SELECT id FROM `users` WHERE `email`='".$email."' and `password`='".$password."'");
	
	
	$_SESSION['id'] = $usuario['id'];
	$_SESSION["favanimal"] = "cat";
	if (isset($_SESSION['id'])){
	 	header("Status: 301 Moved Permanently");
		header("Location: ProyectoFinalWeb/ingreso.php");
	}
?>