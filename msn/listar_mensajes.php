<?php 
  include "libreria.php";
  $con = conectar();
  session_start();
  $usuario = $_SESSION['usuario'];
?>

<?php 
  $query = "SELECT mensaje, fecha, usuario from mensajes where fecha > NOW() - INTERVAL 5 MINUTE;";
  $result = mysqli_query($con, $query) or die (mysqli_error($con));
  $num = mysqli_num_rows($result);
  for ($i=0; $i<$num; $i++) {
    $row = mysqli_fetch_array($result);
    $mensaje = urldecode($row['mensaje']);
    $fecha = urldecode($row['fecha']);
    $usu = urldecode($row['usuario']);
    print ("$usu: $mensaje    Fecha: $fecha \n");
  }
?>
