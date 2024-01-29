<?php
	include "libreria.php";
$con = conectar();

	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

	$query = "SELECT usuario from usuarios WHERE usuario='$usuario' AND password='$password'";
	$result = mysqli_query($con, $query) or die (mysqli_error($con));
	$num = mysqli_num_rows($result);

	

	if ($num == 1) {
		session_start();
		$_SESSION['usuario'] = $usuario;
		header('Location:index.php');
	} else 
   	 header('Location:index.php')
	
	

?>
