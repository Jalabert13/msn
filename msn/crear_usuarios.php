<?php
  include "libreria.php";
  $con = conectar();
?>

<?php

  $a = $_POST['usuario'];
  $b = $_POST['password'];
  $c = $_POST['confpassword'];
  $foto= $_POST['foto'];
  $lista = explode("\\", $foto);
  $n = count($lista) -1;
  $foto = $lista[$n];

  if ($b == $c) {
    $query = "INSERT INTO usuarios(usuario, password, foto) VALUES('$a',md5('$b'),'$foto')";
  $result = mysqli_query($con, $query) or die (mysqli_error($con));
  header('Location:login.php');
  } else 
     header('Location:signup.php')
  
?>