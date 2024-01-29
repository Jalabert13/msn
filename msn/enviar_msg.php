<?php
  include "libreria.php";
  $con = conectar();
  session_start();
  $usuario = $_SESSION['usuario'];
?>

<?php

  $mensaje = $_POST['mensaje'];
  $time = time();
  $fecha = date("Y-m-d H:i:s", $time);

  $query = "INSERT INTO mensajes(mensaje, fecha, usuario) VALUES('$mensaje','$fecha','$usuario')";
  $result = mysqli_query($con, $query) or die (mysqli_error($con));
	header('Location:messenger.php');
?>